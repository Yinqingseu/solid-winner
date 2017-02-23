<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
    <title>网络攻防实验平台</title>
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
                <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/hole"  style="color:#ffffff;" >漏洞库</a></li>
                <li class="dropdown"><a href="<?php echo SITE_URL;?>/index.php?r=user/toolshow" class="dropdown-toggle" style="color:#ffffff;" >工具<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">漏洞扫描</a></li>
                        <li><a href="#">系统监测</a></li>
                        <li><a href="#">手动验证</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo SITE_URL;?>/index.php?r=user/reportshow" style="color:#ffffff;">报表</a></li>
                <li><a href="#"  style="color:#ffffff;">个人管理</a></li>
                <li><a href="#" style="color:#ffffff;">论坛</a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
            <div id="mainContent">
		<div id="centerContent">
                    <div id="newsShow">
                            <div class="clear"></div>
                        <div id="newsTitle" class="breadcrumb">
                        </div>
                        <div id="newsContent" style="margin-top: 40px;">
                          <div id="div00" align="center">
                            <div id="div0" style="margin-left: 20px;margin-right: 20px;">
                                <input type="button" style="font-size:50px;width:250px;height:220px;background-color:#99ccff;" class="btn btn-default" role="button" value="训练" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=train/index'" />
                             </div>
                            <div  id="div0" style="margin-left: 20px;margin-right: 20px;">
                                <input type="button" style="font-size:50px;width:250px;height:220px;background-color:#99ff99;" class="btn btn-default" role="button" value="靶场" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=targetRange/index'" /> 
                             </div>
                            <div id="div0" style="margin-left: 20px;margin-right: 20px;">
                                <input type="button" style="font-size:50px;width:250px;height:220px;background-color:#ffff99;" class="btn btn-default" role="button" value="攻防" onclick ="location.href='#'" />  
                            </div>   
                            <div id="div0" style="margin-left: 20px;margin-right: 20px;">
                                <input type="button" style="font-size:50px;width:250px;height:220px;background-color:#ffcccc;" class="btn btn-default" role="button" value="漏洞扫描" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/typechoose'" />  
                             </div> 
                          </div>
                        </div>
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