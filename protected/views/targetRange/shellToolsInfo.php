<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
    <title>网络攻防实验平台--靶场模式</title>
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
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
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
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=user/layout" style="color:#ffffff;">平台首页</a></li>
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/index" style="color:#ffffff;">靶场首页</a></li>                    
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/combat"  style="color:#ffffff;">靶场实战</a></li>
                    <li><a href="#" style="color:#ffffff;">操作工具</a></li>
                    <li><a href="#" style="color:#ffffff;">历史操作</a></li>
                    <li><a href="#" style="color:#ffffff;">报表</a></li>
                    <li><a href="#" style="color:#ffffff;">团队信息</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>    
    <div id="wrap">
        <div id="wrapInnerTop"></div>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL;?>/index.php?r=user/layout">平台首页</a></li>
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/index">靶场首页</a></li>
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/combat">靶场实战</a></li>
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/operationLayout">靶场操作</a></li>
            <li class="active">shell操作</li>
        </ol>
        <div id="mainContainer">
            <div id="mainContent">
                <!--<div id="rightContent">-->
                <div id="newsShow">
                    <div id="newsTitle">
                        <h2>靶场操作--Shell操作</h2>
                    </div>                    
                    <div class="clear"></div>
                    <div id="newsContent">
                        <div style="float:left;border:1px;width:100%">                                                       
                            <!--并排显示-->
                            <div style="width:500px;height:440px;border:10px;margin-left:auto;margin-right:auto;">
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                    <span style="font-size: 14pt; font-family: 宋体"><b>编写脚本，显示结果</b></span>                                
                                <!--暂时用静态图片代替-->
                                <img src="<?php echo IMG_URL;?>contorl.jpg" height="290" width="400" border="10px"> 
                                </p>
                            </div>
                        </div>
                    </div>                            
                </div>
                <div class="clear"></div>                    
                <p align="center">
                    <a href="<?php echo SITE_URL;?>/index.php?r=targetRange/operationLayout" class="btn btn-default" role="button">返回靶场操作</a>
                </p>
                <!--</div>-->
                <div class="clear"></div>
            </div>
        </div>
        <div id="push"></div>
    </div>

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