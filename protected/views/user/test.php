<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
	<title>网络攻防实验平台</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="YQ">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="网络攻防实验平台学生视图" />
        <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-menu.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-responsive.min.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>doc.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>main.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>slider.css" /><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>ie.css"><![endif]-->
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
            <li id="welcomeMsg">欢迎您：用户名</li>   
            <li><a href="logout.portal" id="quit" >退出登录</a></li>
</ul>
    </body>
</html>
    
