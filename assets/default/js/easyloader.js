/*
 * easyloader - jQuery EasyUI
 *
 * Licensed under the GPL:
 * http://www.gnu.org/licenses/gpl.txt
 *
 * Copyright 2010 stworthy [ stworthy@gmail.com ]
 *
 */
(function ($) {
    //将所有的插件，和插件资源和依赖文件放进modules对象中。
    var modules = {};
    //将国际化文件放入一个locales对象中
    var locales = {
        'af': 'easyui-lang-af.js',
        'bg': 'easyui-lang-bg.js',
        'ca': 'easyui-lang-ca.js',
        'cs': 'easyui-lang-cs.js',
        'da': 'easyui-lang-da.js',
        'de': 'easyui-lang-de.js',
        'en': 'easyui-lang-en.js',
        'fr': 'easyui-lang-fr.js',
        'nl': 'easyui-lang-nl.js',
        'zh_CN': 'easyui-lang-zh_CN.js',
        'zh_TW': 'easyui-lang-zh_TW.js'
    };

    //定义一个局部变量，做循环遍历时候，存放状态
    var queues = {};
    var sysTheme = "default";//系统主题标识

    //定义一个加载器，注意，是全局变量
    easyloader = {
        modules: modules,
        locales: locales,
        debugMode: false, //true开发模式，false调试模式，实际中生产环境配置false，开启择不缓存文件
        minMode: false, //迷你模式下，只加载min的文件
        hideFormError: true,//校验默认规则，隐藏模式
        base: '.', //该属性是为了加载js,记录文件夹路径的
        theme: '', //个性主题标识
        css: true, //是否包含css样式控制
        pluginsStr: 'plugins', //主插件的地址
        dialogCssName: 'dialog_style01', //解决CMS和UCP的组件的冲突问题,其他项目不要使用
        dialogToTop:false,//是否弹到顶层,弹到顶层以后,回写需要指定document对象，不支持默认写到当前
        dialogAllowToMax: false, //弹出框允许最大化
        dialogAllowToMin: false, //弹出框允许最小化
        dialogAllowRefresh: false, //弹出框允许刷新
        /**
         * 外部插件开发最简单的配置是单插件模式，插件和配置文件放在js目录下，所有插件放在plugins目录下
         * 如果是多个插件必须已数组的形式统一给定
         */
        sysloading: "<div class='sys_loading'>正在加载中，请稍候...</div>",//全局统一等待样式
        extPlugins: (typeof pluginloader == "undefined") ? "" : pluginloader.defPlugins, //外部插件的集合
        extPluginsRoot: '', //扩展插件的根目录地址,程序会自动处理，不需要关注
        extPluginsFolder: 'js', //外部插件的相对目录,这个目录是一个相对根目录，和lovey目录必须同级
        extPluginsName: 'plugins', //用于存放插件的包名
        splitStr: '/', //文件路径分隔符
        URI: '', //应用部署路径
        pluginsJsonDone: false, //主插件是否加载完毕
        extPluginJsonDone: {}, //辅助插件是否加载完毕
        locale: null,
        isIframe: false, //是否iframe集成，默认否，by yzhao
        timeout: 2000, //加载超时事件
        //easyloader.load()，该模块加载的调用方法,先加载css,然后加载js
        load: function (name, callback) {
            //如果加载是*.css文件，判断是不是以http开头，如果是，直接调用
            if (/\.css$/i.test(name)) {
                if (/^http/i.test(name)) {
                    loadCss(name, callback);
                } else {
                    //不是http的，加上base.文件夹路径
                    loadCss(easyloader.base + name, callback);
                }
            }
            //加载js文件
            else if (/\.js$/i.test(name) && (typeof name == 'string')) {
                if (/^http/i.test(name) || /^\//i.test(name)) {
                    loadJs(name, callback);
                } else {
                    loadJs(easyloader.base + name, callback);
                }
            } else {
                //构造module关系树,name有两种，一种是string ,一种是string array,这样一次可以加载多个plugin,都是调用add方法进行添加
                makeModule(name, callback);
            }
        },
        onProgress: function (name) {
        },
        onLoad: function (name) {
        }
    };
    //以上一直在定义函数，和变量，此处为真正执行处
    //获取页面的所有的script,主要是为了获取我们现在解释的easyloader.js文件路径，来设置base属性
    var scripts = document.getElementsByTagName('script');
    for (var i = 0; i < scripts.length; i++) {
        var src = scripts[i].src;
        if (!src) continue;
        var m = src.match(/easyloader\.js(\W|$)/i);//判断文件是否含有easyloadr.js
        if (m) {
            //如果有，base为easyloadr.js 的相同前缀
            easyloader.base = src.substring(0, m.index);
            //插件配置文件在装配阶段部署路径是获取不到的
            easyloader.extPluginsRoot = easyloader.base.split("lovey/js")[0];
        }
    }

    //定义一个简化调用接口
    window.using = easyloader.load;

    //加载js方法
    function loadJs(url, callback) {
        //标志变量，js是否加载并执行
        var done = false;
        var script = document.createElement('script');//创建script dom
        script.type = 'text/javascript';
        script.language = 'javascript';
        script.src = url;
        script.onload = script.onreadystatechange = function () { //onload是firefox 浏览器事件，onreadystatechange,是ie的，为了兼容，两个都写上，这样写会导致内存泄露
            //script.readyState只是ie下有这个属性，如果这个值为undefined，说明是在firefox,就直接可以执行下面的代码了。反之为ie，需要对script.readyState
            //状态具体值进行判别，loaded和complete状态表示，脚本加载了并执行了。
            if (!done && (!script.readyState || script.readyState == 'loaded' || script.readyState == 'complete')) {
                done = true;

                script.onload = script.onreadystatechange = null;//释放内存，还会泄露。
                if (callback) {//加载后执行回调
                    callback.call(script);
                }
            }
        };
        //具体加载动作，上面的onload是注册事件，
        document.getElementsByTagName("head")[0].appendChild(script);
    }

    //运行js ,看代码逻辑可知，运行js,只是在js执行后，将这个script删除而已，主要用来加载国际化文件
    function runJs(url, callback) {
        loadJs(url, function () {
            document.getElementsByTagName("head")[0].removeChild(this);
            if (callback) {
                callback();
            }
        });
    }

    //加载css没什么好说的
    function loadCss(url, callback) {
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.media = 'screen';
        link.href = url;
        document.getElementsByTagName('head')[0].appendChild(link);
        if (callback) {
            callback.call(link);
        }
    }

    //加载单一一个plugin,仔细研究module ,可以发现，pingin之间通过dependence,构造成了一颗依赖树，
    //这个方法，就是加载具体树中的一个节点
    function loadSingle(name, callback) {
        //把整个plugin的状态设置为loading
        queues[name] = 'loading';

        var module = modules[name];
        //把js状态设置为loading
        var jsStatus = 'loading';
        //如果允许css,并且plugin有css,则加载css,否则设置加载过了，其实是不加载
        var cssStatus = 'loaded';
        var themeCcsStatus = 'loaded';

        if (module != undefined) {
            cssStatus = (easyloader.css && module['css']) ? 'loading' : 'loaded';
        }
        var cssUrl = "";
        var jsUrl = "";

        //加载css,plugin 的css，如果是全称，就用全称，否则把简写换成全称，所以简写的css文件要放入到themes/type./文件下
        if (module != undefined) {
            if (easyloader.css && module['css']) {
                if (/^http/i.test(module['css'])) {
                    cssUrl = module['css'];
                } else if (/^\//i.test(module['css'])){
                    //判断已/开头的表面是全路径
                    cssUrl = easyloader.URI + module['css'];
                }else if (module['moduleExt'] != undefined && module['moduleExt'] == true) {
                    //如果是项目自己开发的插件
                    cssUrl = easyloader.extPluginsRoot + module['extPluginsFolder'] + easyloader.splitStr + module['extPluginsName'] + easyloader.splitStr
                        + name + easyloader.splitStr + sysTheme + easyloader.splitStr + module['css'];

                    //启用min模式，http加载不关注
                    if (easyloader.minMode) {
                        cssUrl = doUrl(cssUrl, ".css");
                    }
                } else {
                    //固定加载default目录下的样式
                    cssUrl = easyloader.base + easyloader.pluginsStr + easyloader.splitStr
                        + name + easyloader.splitStr + sysTheme + easyloader.splitStr + module['css'];

                    //启用min模式，http加载不关注
                    if (easyloader.minMode) {
                        cssUrl = doUrl(cssUrl, ".css");
                    }
                }

                if (easyloader.debugMode && cssUrl != "") {
                    cssUrl += "?v=" + new Date().getTime();
                }

                loadCss(cssUrl, function () {
                    cssStatus = 'loaded';
                    //js， css加载完，才调用回调
                    if (jsStatus == 'loaded' && cssStatus == 'loaded') {
                        finish();
                    }
                });

                //必须等待组件的样式加载完成
                if (cssStatus == "loaded" && easyloader.theme != "") {
                    themeCcsStatus = 'loaded';

                    var themeUrl = easyloader.base + "/themes/" + easyloader.theme + easyloader.splitStr + easyloader.theme + ".css";

                    //启用min模式，http加载不关注
                    if (easyloader.minMode) {
                        themeUrl = doUrl(themeUrl, ".css");
                    }

                    loadCss(themeUrl);
                }
            }
        }

        //加载js,全称用全称，简写补全。已.JS结尾但不是已http开头
        if (/\.js$/i.test(name) && !(/^http/i.test(name))) {
            //已.js结尾，/js打头
            jsUrl = easyloader.base + name;

            if (easyloader.minMode) {
                jsUrl = doUrl(jsUrl, ".js");
            }
        } else if (/^http/i.test(module['js'])) {
            // 如果module里面直接加载的是远程js，则直接加载
            jsUrl = module['js'];
        } else if (module['moduleExt'] != undefined && module['moduleExt'] == true) {
            jsUrl = easyloader.extPluginsRoot + module['extPluginsFolder'] + easyloader.splitStr + module['extPluginsName'] + easyloader.splitStr + name + easyloader.splitStr + module['js'];

            //启用min模式，http加载不关注
            if (easyloader.minMode) {
                jsUrl = doUrl(jsUrl, ".js");
            }
        } else {
            if (module['js']) {
                jsUrl = easyloader.base + easyloader.pluginsStr + easyloader.splitStr + name + easyloader.splitStr + module['js'];

                //启用min模式，http加载不关注
                if (easyloader.minMode) {
                    jsUrl = doUrl(jsUrl, ".js");
                }
            }
        }

        if (easyloader.debugMode && jsUrl != "") {
            jsUrl += "?v=" + new Date().getTime();
        }

        if (jsUrl != "") {
            loadJs(jsUrl, function () {
                jsStatus = 'loaded';
                if (jsStatus == 'loaded' && cssStatus == 'loaded') {
                    finish();
                }
            });
        } else {
            jsStatus = 'loaded';
            if (jsStatus == 'loaded' && cssStatus == 'loaded') {
                finish();
            }
        }

        //加载完调用的方法，改plugin状态
        function finish() {
            queues[name] = 'loaded';
            //调用正在加载的方法，其实已经加载完了，
            easyloader.onProgress(name);
            if (callback) {
                callback();
            }
        }
    }

    //根据传入的地址重新生成url
    function doUrl(url, type) {
        if (url == '') {
            return "";
        }

        var preString = url.split(type)[0];

        url = preString + "-min" + type;
        return url;
    }

    //加载主模块入口，
    function loadModule(name, callback) {
        //定义数组，最后是形成的是依赖插件列表，最独立的插件放在首位，name是末尾
        var mm = [];
        var doLoad = false;
        //name有两种，一种是string ,一种是string array,这样一次可以加载多个plugin,都是调用add方法进行添加
        if (typeof name == 'string') {
            add(name);
        } else {
            for (var i = 0; i < name.length; i++) {
                add(name[i]);
            }
        }

        function add(name) {
            //如果是.js直接放入的队列
            if (/\.js$/i.test(name)) {
                mm.push(name);
            } else {
                //如果modules中没有这个plugin那退出,如果是加载直接记在js文件不进行判断
                if (!modules[name]) return;
                //如果有，查看它是否依赖其他plugin
                var d = modules[name]['dependencies'];
                //如果依赖，就加载依赖的plugin.同时在加载依赖的plugin的依赖。注意循环中调用了add,是递归
                if (d) {
                    for (var i = 0; i < d.length; i++) {
                        add(d[i]);
                    }
                }

                //主函数脚本
                mm.push(name);
            }
        }

        function finish() {
            if (callback) {
                callback();
            }
            //调用onLoad，传递name 为参数
            easyloader.onLoad(name);
        }

        //形成依赖树，不行还没有做实质性工作呢，那就是加载。打起精神来，最核心的代码就是以下的了
        //超时用,后面的依赖前面的，主脚本最后加载
        var time = 0;
        //定义一个加载方法，定义后直接调用
        function loadMm() {
            //如果mm有长度，长度！=0,加载plugin,为0，即加载完毕，开始加载国际化文件。
            if (mm.length) {
                var m = mm[0];	// the first module
                if (!queues[m]) {//状态序列中没有这个plugin的信息，说明没有加载这个plug,调用laodSingle进行加载
                    doLoad = true;
                    //加载插件
                    //console.log(m);
                    loadSingle(m, function () {
                        mm.shift();//加载完成后，将这个元素从数组去除，在继续加载，直到数组
                        loadMm();
                    });
                } else if (queues[m] == 'loaded') {//如果这个plugin已经加载，就不用加载，以为mm中可能有重复项
                    mm.shift();
                    loadMm();
                } else {
                    if (time < easyloader.timeout) {//超时时候，10秒钟调用一次loadMn().注意arguments.callee代表函数本身
                        time += 10;
                        setTimeout(arguments.callee, 10);
                    }
                }
            } else {
                if (easyloader.locale && doLoad == true && locales[easyloader.locale]) {
                    var url = easyloader.base + 'locale/' + locales[easyloader.locale];
                    runJs(url, function () {
                        finish();
                    });
                } else {
                    finish();
                }
            }
        }

        loadMm();
    }

    //模块配置关系装载
    function makeModule(name, callback) {
        if (!easyloader.pluginsJsonDone) {
            var jsonUrl = easyloader.base + "plugins.json";
            //启用压缩模式
            if (easyloader.minMode) {
                jsonUrl = doUrl(jsonUrl, ".json");
            }
            //通过 HTTP GET请求从服务器载入一个JavaScript文件,异步执行
            $.ajax({
                async: false,
                url: jsonUrl,
                success: function (data) {
                    /**
                     * 将module装配完成，在执行回调函数
                     */
                    for (var i = 0; i < data.length; ++i) {
                        var tpModuleName = data[i].moduleName;
                        var tpModuleJs = data[i].moduleJs;
                        var tpModuleCss = data[i].moduleCss;
                        var tpModuleDependencies = data[i].moduleDependencies;

                        //如果直接传递一个插件名，就去modole数组中加载。改方法是重点，也是easyui自带的plugin加载方式
                        if (tpModuleName == undefined) return;
                        easyloader.modules[tpModuleName] = {};
                        /**
                         * 如果依赖其他module,则最从最低底加载
                         */
                        if (tpModuleJs != undefined) {
                            easyloader.modules[tpModuleName] = {js: tpModuleJs};
                        }
                        //css附加
                        if (tpModuleCss != undefined) {
                            //直接对象赋值
                            easyloader.modules[tpModuleName].css = tpModuleCss;
                        }

                        //插件的前缀，插件必须防止在此目录下 by yzhao 主插件地址是固定的，不需要每次多置入
                        //easyloader.modules[tpModuleName].pluginsStr = easyloader.pluginsStr;

                        //依赖组件定义,不能js和模块名混合写,主JS靠前
                        if (tpModuleDependencies != undefined) {
                            easyloader.modules[tpModuleName].dependencies = [];
                            if (typeof tpModuleDependencies == 'string') {
                                easyloader.modules[tpModuleName].dependencies.push(tpModuleDependencies);
                            } else {
                                for (var j = 0; j < tpModuleDependencies.length; ++j) {
                                    easyloader.modules[tpModuleName].dependencies.push(tpModuleDependencies[j])
                                }
                            }
                        }
                    }

                    //主插件装配完成标识
                    easyloader.pluginsJsonDone = true;

                    /**
                     * 主插件和辅助插件装配多必须是同步的，以便保证根据name一定可以找到插件
                     * 辅助插件加载
                     */
                    if (easyloader.extPlugins != '') {
                        if (typeof easyloader.extPlugins == 'string') {
                            loadExtPlugins(easyloader.extPlugins);
                        } else {
                            /**
                             * 如果是数组装配形式，插件的根目录.插件的目录必须是数组，且位置相对
                             */
                            if ((typeof easyloader.extPluginsFolder != "string") && (typeof easyloader.extPluginsName != "string")) {
                                for (var k = 0; k < easyloader.extPlugins.length; k++) {
                                    loadExtPlugins(easyloader.extPlugins[k], k);
                                }
                            }

                        }
                    }

                    /**
                     * 没有给出模块名不加载模块
                     */
                    if (name != undefined) {
                        loadModule(name, callback);
                    }
                }, dataType: "json"});
        } else {
            loadModule(name, callback);
        }
    }

    //外部插件装配
    function loadExtPlugins(pluginName, position) {
        var jsonModule = easyloader.extPluginJsonDone[pluginName];

        if (jsonModule == undefined || !jsonModule['jsDone']) {
            //插件配置文件在装配阶段部署路径是获取不到的,插件放置在js目录里面名称为xxx_plugins.json
            var jsonUrl = easyloader.extPluginsRoot;
            if (position == undefined) {
                jsonUrl += easyloader.extPluginsFolder + easyloader.splitStr + pluginName + "_plugins.json";
            } else {
                jsonUrl += easyloader.extPluginsFolder[position] + easyloader.splitStr + pluginName + "_plugins.json";
            }
            //启用压缩模式
            if (easyloader.minMode) {
                jsonUrl = doUrl(jsonUrl, ".json");
            }
            //通过 HTTP GET请求从服务器载入一个JavaScript文件,异步执行
            $.ajax({
                async: false,
                url: jsonUrl,
                success: function (data) {
                    /**
                     * 将module装配完成，在执行回调函数
                     */
                    if (data != null) {
                        for (var i = 0; i < data.length; ++i) {
                            var tpModuleName = data[i].moduleName;
                            var tpModuleJs = data[i].moduleJs;
                            var tpModuleCss = data[i].moduleCss;
                            var tpModuleDependencies = data[i].moduleDependencies;

                            //如果直接传递一个插件名，就去modole数组中加载。改方法是重点，也是easyui自带的plugin加载方式
                            if (tpModuleName == undefined || tpModuleJs == undefined) return;

                            /**
                             * 如果依赖其他module,则最从最低底加载
                             */
                            easyloader.modules[tpModuleName] = {js: tpModuleJs};
                            //css附加
                            if (tpModuleCss != undefined) {
                                //直接对象赋值
                                easyloader.modules[tpModuleName].css = tpModuleCss;
                            }

                            //插件的包名 by yzhao 改成默认是"plugins"
                            //easyloader.modules[tpModuleName].pluginsStr = easyloader.extPluginsName;
                            easyloader.modules[tpModuleName].extPluginsFolder = position != undefined ? easyloader.extPluginsFolder[position] : easyloader.extPluginsFolder;
                            easyloader.modules[tpModuleName].extPluginsName = position != undefined ? easyloader.extPluginsName[position] : easyloader.extPluginsName;

                            //知道此组件式自定义插件，需要对路径有特殊处理
                            easyloader.modules[tpModuleName].moduleExt = true;

                            //依赖组件定义,不能js和模块名混合写
                            if (tpModuleDependencies != undefined) {
                                easyloader.modules[tpModuleName].dependencies = [];
                                if (typeof tpModuleDependencies == 'string') {
                                    easyloader.modules[tpModuleName].dependencies.push(tpModuleDependencies);
                                } else {
                                    for (var j = 0; j < tpModuleDependencies.length; ++j) {
                                        easyloader.modules[tpModuleName].dependencies.push(tpModuleDependencies[j])
                                    }
                                }
                            }
                        }

                        //装配完成标志
                        easyloader.extPluginJsonDone[pluginName] = {jsDone: true};
                    }
                }, dataType: "json"});
        }
    }

    /*if (window.jQuery) {
        *//*jQuery(function () {
         //系统数据加载完后，加载parser.js插件，该插件是渲染界面的
         easyloader.load('parser', function () {
         jQuery.parser.parse();//渲染方法
         });
         });*//*
        jQuery(function () {
            using("base");
        });
    }*/

    /**
     * 招聘彩蛋
     */
    /*window.console && console.log("一张网页，要经历怎样的过程，才能抵达用户面前？");
    window.console && console.log("一位新人，要经历怎样的成长，才能站在技术之巅？");
    window.console && console.log("探寻这里的秘密；");
    window.console && console.log("体验这里的挑战；");
    window.console && console.log("成为这里的主人；");
    window.console && console.log("加入Lovey，加入前端世界，你，可以影响世界。");
    window.console && console.log("请将简历发送至 178518@gmail.com (邮件标题请以“姓名-应聘XX职位-来自console”命名)");
    window.console && console.log("项目介绍：http://172.16.6.28:7090");*/
})(jQuery);