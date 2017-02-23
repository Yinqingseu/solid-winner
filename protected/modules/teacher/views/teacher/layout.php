<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
    <title>网络攻防实验教师操作平台</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="YQ"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="网络攻防实验教师操作平台" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-menu.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-responsive.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>doc.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>main.css" />
<!--    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>slider.css" />[if lte IE 6]><link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>bootstrap-ie6.css"><![endif][if lte IE 7]><link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>ie.css"><![endif]-->
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>common.js"></script><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script type="text/javascript" src="<?php echo JS_URL;?>html5.js"></script><![endif]--><!--[if lte IE 6]><script type="text/javascript" src="<?php echo JS_URL;?>DD_bladePng.js"></script><script type="text/javascript">DD_bladePng.fix('img background-image')</script><![endif]-->
    <script language="javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap-ie.js"></script>
    <script type="text/javascript" language="javascript">$().ready(
	function(){
		$('#slideshow').cycle({fx:      'scrollHorz',timeout:  0,prev:    '#prev',next:    '#next',pager:   '#pagination',speed: 800,timeout: 6000,cleartype:  true,slideExpr: '.item',pagerAnchorBuilder: pagerFactory});
	function pagerFactory(idx, slide) {if(idx >= 8){return;}return '<li><a href="#"  class="nav_button"><span>'+(idx+1)+'</span></a></li>';};});
	function show_select(input,btn,option,value){var inputobj = document.getElementById(input);var btnobj = document.getElementById(btn);var optionobj = document.getElementById(option);var valueobj = document.getElementById(value);optionobj.style.display = (optionobj.style.display=="")?"none":"";for (var i=0;i<optionobj.childNodes.length;i++){optionobj.focus();optionobj.childNodes[i].onclick = (function(){inputobj.innerHTML = this.innerHTML;valueobj.value = this.innerHTML;optionobj.style.display = (optionobj.style.display=="")?"none":"";});}}
    </script>
</head>
<body>
     <ul id="board">
            <li><a href="<?php echo SITE_URL?>/index.php?r=teacher/teacher/infoedit">欢迎您：<?php echo Yii::app()->user->name;?></a></li>   
            <li><a href="<?php echo SITE_URL?>/index.php?r=teacher/teacher/login" >退出登录</a></li>
    </ul>
    <div id="headContainer">
        <div id="head">
            <div id="headText" class="headTextcrumb">
                    <h2>网络攻防实验教师操作平台</h2>
            </div>
        </div>
    </div>
    <div id="menuContainer">
	<div id="menu">
            <div class="navbar">
                <ul class="nav">
                    <li>
                        <a href="<?php echo SITE_URL;?>/index.php?r=teacher/teacher/layout" style="color:#ffffff;">首页</a>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" style="color:#ffffff;" data-toggle="dropdown">模式管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">训练模式</a></li>
                            <li><a href="#">靶场模式</a></li>
                            <li><a href="#">攻防模式</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" style="color:#ffffff;" data-toggle="dropdown">作业管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">作业发布</a></li>
                            <li><a href="#">作业批改</a></li>
                            <li><a href="#">作业反馈</a></li>
                            <li><a href="#">作业完成进度</a></li>
                            <li><a href="#">作业警告</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" style="color:#ffffff;" data-toggle="dropdown">论坛<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">问题回答</a></li>                            
                        </ul>
                    </li>   
                    <li class="dropdown"><a href="#" class="dropdown-toggle" style="color:#ffffff;" data-toggle="dropdown">个人信息<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo SITE_URL;?>/index.php?r=teacher/teacher/infoshow">个人信息查看</a></li>
                            <li><a href="<?php echo SITE_URL;?>/index.php?r=teacher/teacher/infoedit">个人信息编辑</a></li>  
                        </ul>
                    </li>  
                </ul>
                <!--搜索框-->
                <form action="search" id="cse-search-box" class="pull-right form-inline">
                        <fieldset>
                                <input type="hidden" name="cx" value="013768042675187445827:tfoxnz3vx78" />
                                <input type="hidden" name="cof" value="FORID:11" />
                                <input type="hidden" name="ie" value="UTF-8" /><input type="text" name="q" /><button type="submit" name="sa">搜索</button>
                        </fieldset>
                </form>
            </div>
	</div>
	<div class="clear"></div><!--清楚浮动的功能-->
    </div>
    <div class="clear"></div>
    <div id="wrap">
        <div id="wrapInnerTop"></div>
        <div id="mainContainer">
            <div id="mainContent">                    
                <div id="newsShow">
                    <div class="clear"></div>
                    <div id="newsContent">
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <span style="font-size: 26pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                插入图片或教师操作描述
                            </span>
                        </p>
                    </div>
                    </div>

                <div class="clear"></div>
            </div>
        </div>
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