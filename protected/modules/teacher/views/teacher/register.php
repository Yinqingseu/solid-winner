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
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>slider.css" /><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>ie.css"><![endif]-->
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>common.js"></script><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script type="text/javascript" src="<?php echo JS_URL;?>html5.js"></script><![endif]--><!--[if lte IE 6]><script type="text/javascript" src="<?php echo JS_URL;?>DD_bladePng.js"></script><script type="text/javascript">DD_bladePng.fix('img background-image')</script><![endif]-->
    <script language="javascript" src="<?php echo JS_URL;?>bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>bootstrap-ie.js"></script>
    <script type="text/javascript" language="javascript">$().ready(
	function(){
		$('#slideshow').cycle({fx:      'scrollHorz',timeout:  0,prev:    '#prev',next:    '#next',pager:   '#pagination',speed: 800,timeout: 6000,cleartype:  true,slideExpr: '.item',pagerAnchorBuilder: pagerFactory});
	function pagerFactory(idx, slide) {if(idx >= 8){return;}return '<li><a href="#"  class="nav_button"><span>'+(idx+1)+'</span></a></li>';};});
	function show_select(input,btn,option,value){var inputobj = document.getElementById(input);var btnobj = document.getElementById(btn);var optionobj = document.getElementById(option);var valueobj = document.getElementById(value);optionobj.style.display = (optionobj.style.display=="")?"none":"";for (var i=0;i<optionobj.childNodes.length;i++){optionobj.focus();optionobj.childNodes[i].onclick = (function(){inputobj.innerHTML = this.innerHTML;valueobj.value = this.innerHTML;optionobj.style.display = (optionobj.style.display=="")?"none":"";});}}
    </script>
</head>
<body>
    <div id="headContainer">
        <div id="head">
            <div id="headText" class="headTextcrumb">
                    <h2>网络攻防实验平台教师注册</h2>
            </div>
        </div>
    </div>
    <div id="menuContainer">
	<div id="menu">
            <div class="navbar">
                <ul class="nav">
                    <li><a href="<?php echo SITE_URL;?>/index.php?r=teacher/teacher/login" style="color:#ffffff;">退出注册</a></li>
                </ul>
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
                        <span style=" font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                           <!--教师注册表-->
                    <?php $form = $this -> beginWidget('CActiveForm',
                                         array( //自动引入jquery，进行表单验证
                                                 'enableClientValidation'=>true,
                                                          'clientOptions'=>array(
                                                          'validateOnSubmit'=>true,
                                               ),
                                         ) ); ?> 
                                 <table cellpadding="5" cellspacing="5" style="text-align:left; width:80%; border:0;">
                                     <tbody >
                                         <tr >
                                             <td align="right"> 
                                                <?php echo $form -> labelEx($user_model,'username')?>
                                             </td>
                                             <td>            
                                                 <?php echo $form->textField($user_model,'username',array('class'=>'inputBg','id'=>'User_username')); ?>
                                                 <?php echo $form -> error($user_model,'username'); ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td align="right">
                                                 <?php echo $form -> labelEx($user_model,'password');?>
                                             </td>

                                             <td>
                                                 <?php echo $form->passwordField($user_model,'password',array('class'=>'inputBg','id'=>'User_password')); ?>       
                                                 <?php echo $form -> error($user_model,'password'); ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td align="right">
                                                 <?php echo $form -> labelEx($user_model,'password2');?>
                                             </td>

                                             <td>
                                                 <?php echo $form->passwordField($user_model,'password2',array('class'=>'inputBg','id'=>'User_password')); ?>       
                                                 <?php echo $form -> error($user_model,'password2'); ?>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td align="right">
                                                <?php echo $form -> label($user_model,'user_email');?>
                                             </td>
                                             <td>
                                                 <?php echo $form->textField($user_model,'user_email',array('class'=>'inputBg','id'=>'User_user_email')); ?> 
                                                   <?php echo $form -> error($user_model,'user_email'); ?>
                                             </td>
                                         </tr>

                                         <tr>
                                             <td align="right">
                                             <?php echo $form -> label($user_model,'user_tel');?>
                                             </td>
                                             <td>
                                                  <?php echo $form->textField($user_model,'user_tel',array('class'=>'inputBg','id'=>'User_user_tel','maxlength'=>11)); ?> 
                                                 <?php echo $form -> error($user_model,'user_tel'); ?>                  
                                             </td>
                                         </tr>
                                         <tr>

                                             <td align="right">
                                             <?php echo $form -> label($user_model,'user_sex');?>
                                             </td>
                                             <td>
                                             <?php echo $form -> dropDownList($user_model,'user_sex',$sex); ?>               
                                             </td>
                                         </tr>
                                         <tr>
                                             <td>&nbsp;</td>
                                             <td align="left">
                                                 <input name="Submit" value="注册" style="width: 100px;height: 40px;" class="us_Submit_reg" type="submit"  />
                                             </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             <?php $form = $this -> endWidget(); ?>
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

   

    

    
