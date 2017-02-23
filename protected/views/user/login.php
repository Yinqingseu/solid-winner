<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="width=device-width,initial-scale=0.8, minimum-scale=0.8, maximum-scale=3"
          name="viewport"/>
    <meta name="description" content="网络攻防实验平台学生登录界面" />
    <meta name="author" content="YQ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta property="qc:admins" content="754034015366713545637571540352652"/>
    <meta property="wb:webmaster" content="1ad39047f32b5b6b"/>
    <title>网络攻防实验平台身份认证</title>
</head>
<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.7.1.min.js"></script>
<link href="<?php echo CSS_URL;?>login.css" rel="stylesheet">
<link href="<?php echo CSS_URL;?>custom.css" rel="stylesheet">

<body onload="loadFresh();">
<div class="auth_bg">
    <img src="<?php echo IMG_URL;?>login-bg-autumn.jpg" alt="">
</div>
<div class="auth_page_wrapper">
<div class="auth_logo">
    <img src="<?php echo IMG_URL;?>login-logo.png" alt="logo"/>
</div>
<div class="auth_login_content">
    <div class="auth_login_left">
        <div class="auth_others">
            
        </div>
    </div>
    <div class="auth_login_right">
        <div class="auth_tab">
            <div class="auth_tab_links">
                <ul>
                    <li id="accountLogin" style="width:100%" class="selected" tabid="01"><span>账号登录</span></li>
                </ul>
            </div>
            <div class="clearfloat"></div>
            <div class="auth_tab_content">
                <div tabid="01" class="auth_tab_content_item">
                      <?php $form = $this -> beginWidget('CActiveForm');?>
                        <p>
                            <?php echo $form->labelEx($user_login,'username') ?>
                            <?php echo $form->textField($user_login,'username',array('size'=>25,'class'=>'auth_input'));?>
                            <?php echo $form->error($user_login,'username');?>
                        </p>

                        <p>
                            <?php echo $form->labelEx($user_login,'password') ?>
                            <?php echo $form->passwordField($user_login,'password',array('size'=>25,'class'=>'auth_input'));?>
                            <?php echo $form->error($user_login,'password');?>
                        </p>
<!--                         <p>
                            <?php // echo $form->labelEx($user_login,'verifyCode') ?>
                            <?php //echo $form->textField($user_login,'verifyCode',array('size'=>20,'class'=>'auth_input'));?>
                            <?php //echo $form->error($user_login,'verifyCode');?>
                             使用小物件显示验证码图片
                           <?php // $this->widget('CCaptcha');?>  对应在widgets/captcha/CCaptcha.php
                        </p>-->
                        
                       
                        <p>
                            <button type="submit" class="auth_login_btn primary full_width">登录
                            </button>
                        </p>
                        <a  href="<?php echo SITE_URL;?>/index.php?r=user/findback" class="auth_login_forgetp">
                            <small>忘记密码？</small> 
                        </a>
                        <a href="<?php echo SITE_URL;?>/index.php?r=user/register" class="auth_login_forgetp">
                            <small>注册</small> 
                        </a>
                        &nbsp;&nbsp;
                        <?php echo $form->checkBox($user_login,'rememberMe');?>
                        <?php echo $form->label($user_login,'rememberMe');?>
                        <input type="hidden" name="lt" value="LT-3146-ULmbkn9fX0CKEqBathyMHjlRT4cODV1479450410210-O1zy-cas"/>
                        <input type="hidden" name="dllt" value="userNamePasswordLogin"/>
                        <input type="hidden" name="execution" value="e2s1"/>
                        <input type="hidden" name="_eventId" value="submit"/>
                        <input type="hidden" name="rmShown" value="1">
                      <?php $form = $this -> endWidget();?>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="clearfloat"></div>
<div class="auth_login_footer">
    

 <span>
     Copyright&nbsp;©&nbsp;>东南大学-网络攻防实验平台&nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;

 </span>
</div>
</div>

<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>icheck.min.js"></script>

<script type="text/javascript" src="<?php echo JS_URL;?>login.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>login-wisedu.js"></script>

<script type="text/javascript">
    // 选中tab框
    var dllt = '';
    if (dllt != '' && dllt == 'dynamicLogin') {
        selectLi($("#dyLogin"));
    } else {
        selectLi($("#accountLogin"));
    }

    $(document).ready(function () {
        var service = GetQueryString("service");
        if (service) {
            $("#getBackPasswordMainPage").attr("href", "getBackPasswordMainPage.do?service=" + encodeURIComponent(service));
        }
    });
</script>
</body>

</html>
    

