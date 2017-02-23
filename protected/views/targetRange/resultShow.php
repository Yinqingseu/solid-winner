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
        <div id="mainContainer">
            <div id="mainContent">            
                <div id="newsShow">                    
                    <div id="newsTitle">
                        <h2>靶场结果</h2>
                    </div>                    
                    <div class="clear"></div>
                    <div id="newsContent">
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <span style="font-size: 26pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                靶场的评判标准，比如绘制图片或者表格</span>
                        </p>                       
                    </div>
                    <div class="clear"></div>                                                                                                         
                        <table class="table table-bordered" border="1" width="100%">
                            <caption><h3>结果信息列表</h3></caption>
                            <tbody style="font-weight: bold;" align="center">
                                <tr>
                                    <td>操作起止时间</td> 
                                    <td>2016年12月1日19:15--2016年12月1日21:15</td>                               
                                </tr>                                
                                <tr>                        
                                    <td>操作成果</td>                 
                                    <td>嗅探出对方的开放端口，绘制网络拓扑图</td>
                                </tr>
                                <tr>                        
                                    <td>团队操作</td>                                      
                                    <td><a href="#">查看队友操作信息</a></td>
                                </tr>  
                                <tr>                        
                                    <td>结果</td>                                      
                                    <td><a href="#">90</a></td><!--可以查看评分细则-->
                                </tr>
                                <tr>                        
                                    <td>操作评价</td>                                      
                                    <td><a href="#">Good Job!</a></td><!--可以查看评分细则-->
                                </tr>
    <!--                                <tr>                        
                                    <td>报表操作</td>                                      
                                    <td>
                                        <a href="#">生成并下载</a>                            
                                        <a href="#">查询</a>                            
                                    </td>
                                </tr>-->
                            </tbody>
                        </table>                       
                    <p align="center">
                            <a href="<?php echo SITE_URL;?>/index.php?r=targetRange/resultAll" class="btn btn-default" role="button">查看实验详细内容</a>                            
                    </p>                    
                </div>                
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