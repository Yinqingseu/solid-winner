<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
    <title>网络攻防实验平台--漏洞扫描</title>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-menu.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-responsive.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>doc.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>main.css" />
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>common.js"></script>
    <script language="javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap-ie.js"></script>
    <script src="<?php echo JS_URL;?>jquery.min.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript">$().ready(
    function(){
        $('#slideshow').cycle({fx:      'scrollHorz',timeout:  0,prev:    '#prev',next:    '#next',pager:   '#pagination',speed: 800,timeout: 6000,cleartype:  true,slideExpr: '.item',pagerAnchorBuilder: pagerFactory});
    function pagerFactory(idx, slide) {if(idx >= 8){return;}return '<li><a href="#"  class="nav_button"><span>'+(idx+1)+'</span></a></li>';};});
    function show_select(input,btn,option,value){var inputobj = document.getElementById(input);var btnobj = document.getElementById(btn);var optionobj = document.getElementById(option);var valueobj = document.getElementById(value);optionobj.style.display = (optionobj.style.display=="")?"none":"";for (var i=0;i<optionobj.childNodes.length;i++){optionobj.focus();optionobj.childNodes[i].onclick = (function(){inputobj.innerHTML = this.innerHTML;valueobj.value = this.innerHTML;optionobj.style.display = (optionobj.style.display=="")?"none":"";});}}
    </script>
</head>
<body>
    <ul id="board">
            <li><a href="<?php echo SITE_URL?>/index.php?r=user/infoedit">欢迎您：<?php  echo Yii::app()->user->name;?></a></li>   
            <li><a href="<?php echo SITE_URL?>/index.php?r=user/login" >退出登录</a></li>
    </ul>
    <div id="headContainer">
        <div id="head">
            <div id="headText" class="headTextcrumb">
                    <h2>网络攻防实验操作平台</h2>
            </div>
        </div>
    </div>
<div id="menuContainer">
    <div id="menu">
        <div class="navbar">
            <ul class="nav">
                <li><a href="<?php echo SITE_URL;?>/index.php?r=user/layout" style="color:#ffffff;">首页</a></li>
                 <li class="dropdown"><a href="#" class="dropdown-toggle" style="color:#ffffff;" >漏洞扫描<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/softwarescan">应用软件扫描</a></li>
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/webscan">网站扫描</a></li>
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/host">主机扫描</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="<?php echo SITE_URL;?>/index.php?r=scan/hole" class="dropdown-toggle" style="color:#ffffff;" data-toggle="dropdown">漏洞库<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/hole">漏洞信息</a></li>
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/holeup">上传漏洞</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" style="color:#ffffff;" data-toggle="dropdown">工具<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/plugin">漏洞扫描工具</a></li>
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/detect">系统监测</a></li>
                </ul>
                </li>
                <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/report" style="color:#ffffff;">报表</a></li>
                <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/selfcheck" style="color:#ffffff;">手动验证</a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li><a href="<?php echo SITE_URL?>/index.php?r=scan/index">漏洞扫描</a></li>
           <li class="active">功能展示</li>
        </ol>
    </div>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
	<div id="mainContainer">
            <div id="mainContent">
                <div id="centerContent">
                    <div id="newsShow"><div class="clear"></div>
                         <div id="newsTitle" class="breadcrumb">
                                <h3>主要功能：</h3>
                            </div>
                   <div id="newsContent">
                            <div id = "part1">
				<p align="center" >
                                    <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="漏洞扫描" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/typechoose'" />
                                     <p align="center">功能简介：</p>
                                    <li>1. 可进行应用软件扫描、网站扫描、主机扫描。</li>
                                    <li>2. 扫描结果以报表形式展示，可下载至本地。</li>
                                    <li>3. 扫描结果包括扫描配置信息、检测出的漏洞和危险等级、检测方法、漏洞简介和对应的修补策略等。</li>
                                </p>
                            </div>
                            <div id = "part1">
                                <p align="center" >
                                    <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="漏洞库" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/hole'" /> 
                                    <p align="center">功能简介：</p>
                                    <li>展示漏洞库中拥有的漏洞信息和系统可检测的漏洞；</li><li>用户也可自行上传发现的新漏洞到该漏洞库中；</li>
                                </p>
                            </div>
                            <div id = "part1">
                                <p align="center" >
                                    <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="报表" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/report'" /> 
                                    <p align="center">功能简介：</p>
                                    <li>展示历史扫描结果报表，用户可查询、下载历史报表。</li>
                                </p>
                            </div>
                            <div id = "part2">
                                <p align="center" >
                                    <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="工具" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/plugin'" />
                                    <p align="center">功能简介：</p>
                                   <li>漏洞扫描工具：提供第三方漏洞扫描工具，供用户下载使用。</li><li>系统监测：监测漏洞扫描系统的运行状态，是否超时、无响应。</li>
                                </p>
                            </div>
                            <div id = "part1">
                                <p align="center" >
                                    <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="手动验证" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/selfcheck'" /> 
                                    <p align="center">功能简介：</p>
                                   <li>提供插件、控制台和脚本三种验证方式，</li><li>供用户手动验证已知漏洞或未知漏洞的存在。</li>
                                </p>
                            </div>
                        </div> 
                    </div>
            </div>
    </div>
</div></div>

<div id="footContainer">
            <div id="footContent">
                <script type="text/javascript">
                        $("#foot li:last-child a").attr("target", "_blank");
                </script>
                <p>东南大学-网络攻防实验平台</p>
            </div>
        </div>
        <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
        try {
        var pageTracker = _gat._getTracker("UA-11987146-2");
        pageTracker._trackPageview();
        } catch(err) {}
        </script>

    </body>
</html>