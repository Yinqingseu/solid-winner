<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="网络攻防实验管理员平台" />
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-menu.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-responsive.min.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>doc.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>main.css" /><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="/style/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="/style/ie.css"><![endif]-->
<script type="text/javascript" src="<?php echo JS_URL;?>jquery.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>common.js"></script>	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script type="text/javascript" src="<?php echo JS_URL;?>html5.js"></script><![endif]--><!--[if lte IE 6]><script type="text/javascript" src="<?php echo JS_URL;?>DD_bladePng.js"></script><script type="text/javascript">DD_bladePng.fix('img background-image')</script><![endif]-->
<script language="javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap-ie.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>xueban-index.css" />
	<title>网络攻防实验管理员平台</title>
	</head>
    <body>
        <div id="headContainer">
            <div id="head">
                <div id="headText" class="headTextcrumb"><!--徐婧添加-->
                    <h2>网络攻防实验管理员平台</h2>
                </div>
                <!--<div id="headText">网络攻防实验管理员平台</div>-->                   
            </div>
        </div>
        <div id="menuContainer">
            <div id="menu">
                <div class="navbar">                    
                    <ul class="nav">
                        <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/admin/layout" style="color:#ffffff;">首页</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-immediate" style="color:#ffffff;" data-toggle="dropdown">实时监视<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/monitor/offenceDefence">攻防监视</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/monitor/targetRange">靶场监视</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-operation" style="color:#ffffff;" data-toggle="dropdown">管理操作<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/manage/userInfo">用户管理</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/manage/train">训练管理</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/manage/offenceDefence">攻防管理</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/manage/targetRange">靶场管理</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/manage/environ">场景管理</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/manage/device">设备管理</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-tools" style="color:#ffffff;" data-toggle="dropdown">工具管理<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/soft/scan">漏洞扫描工具</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/soft/ids">入侵检测工具</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo SITE_URL;?>/index.php?r=backstage/more/layout" style="color:#ffffff;" style="color:#ffffff;">更多</a></li>                        
                    </ul>
                    <form action="search" id="cse-search-box" class="pull-right form-inline">
                        <fieldset>
                            <input type="hidden" name="cx" value="013768042675187445827:tfoxnz3vx78" />
                            <input type="hidden" name="cof" value="FORID:11" /><input type="hidden" name="ie" value="UTF-8" />
                            <input type="text" name="q" /><button type="submit" name="sa">搜索</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
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
                                    插入图片或管理员操作描述</span>
                                <span lang="EN-US" style="font-size: 26pt; color: red; mso-bidi-font-size: 12.0pt"><o:p></o:p>
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