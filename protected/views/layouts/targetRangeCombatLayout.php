<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
    <title>网络攻防实验平台--靶场模式</title>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-menu.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-responsive.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>doc.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>custom.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>main.css" />

    <script src="<?php echo JS_URL;?>jquery.min.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.min.js"></script>
<!--会对标签<a>的颜色产生变化，不加时为蓝色，加了为黑色
<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>slider.css" />
-->
<!--    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>common.js"></script>
    <script language="javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap-ie.js"></script>
    <script type="text/javascript" language="javascript">$().ready(
    function(){
        $('#slideshow').cycle({fx:      'scrollHorz',timeout:  0,prev:    '#prev',next:    '#next',pager:   '#pagination',speed: 800,timeout: 6000,cleartype:  true,slideExpr: '.item',pagerAnchorBuilder: pagerFactory});
    function pagerFactory(idx, slide) {if(idx >= 8){return;}return '<li><a href="#"  class="nav_button"><span>'+(idx+1)+'</span></a></li>';};});
    function show_select(input,btn,option,value){var inputobj = document.getElementById(input);var btnobj = document.getElementById(btn);var optionobj = document.getElementById(option);var valueobj = document.getElementById(value);optionobj.style.display = (optionobj.style.display=="")?"none":"";for (var i=0;i<optionobj.childNodes.length;i++){optionobj.focus();optionobj.childNodes[i].onclick = (function(){inputobj.innerHTML = this.innerHTML;valueobj.value = this.innerHTML;optionobj.style.display = (optionobj.style.display=="")?"none":"";});}}
    </script>-->
</head>
<body>
    <ul id="board">
            <li><a href="<?php echo SITE_URL?>/index.php?r=user/infoedit">欢迎您：<?php  echo Yii::app()->user->name;?></a></li>   
            <li><a id="user_login_check" href="<?php echo SITE_URL?>/index.php?r=user/login" ><?php  if(Yii::app()->user->id == 0){ echo '请先登录';}else{echo "退出登录"; }?></a></li>
            <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout" >回到首页</a></li>
    </ul>
    <div id="headContainer">
        <div id="head">
            <div id="headText" class="headTextcrumb">
                    <h2>网络攻防实验操作平台：网络靶场</h2>
            </div>
        </div>
    </div>
    <div id="menuContainer">
        <div id="menu">
            <div class="navbar">
                <ul class="nav">
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/index" style="color:#ffffff;">首页</a></li>                    
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/combat"  style="color:#ffffff;">靶场实战</a></li>
                    <li><a href="#" style="color:#ffffff;">操作工具</a></li>
                    <li><a href="#" style="color:#ffffff;">报表</a></li>
                    <li class="dropdown">
                        <a href="<?php echo SITE_URL;?>/index.php?r=user/infoedit" class="dropdown-toggle" style="color:#ffffff;" >个人主页<b class="caret"></b></a>
                        <!--data-toggle="dropdown"删掉这个属性-->
                        <ul class="dropdown-menu">
                            <li><a href="#">历史操作</a></li>
                            <li><a href="#">团队信息</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>    
    
<!--展示靶场每个具体页面的信息信息-->
<!--$content代表我们已经提取出来的没有头部和脚部的具体页面信息-->
<?php  echo $content; ?>


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

///**
// * 页面加载时调用
// * @author 徐婧
// */
//window.onload=function(){ 
//    userLoginCheck();//页面加载时调用   
//}
//
///**
// * 用户登录确认
// */
//function userLoginCheck(){ 
//    var checkState = document.getElementById("user_login_check");
//    if(checkState.innerHTML =="请先登录"){
//        alert("请回到主页开始登录！");             
//        window.location.href = '<?php echo SITE_URL;?>/index.php?r=user/login';//回到主页
//    }
//}
</script>

    </body>
</html>