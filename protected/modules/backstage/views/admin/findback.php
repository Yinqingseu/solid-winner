<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="qc:admins" content="754034015366713545637571540352652"/>
    <meta property="wb:webmaster" content="1ad39047f32b5b6b"/>
    <title>网络攻防实验平台身份认证</title>
</head>
        <script type="text/javascript"
                src="<?php echo JS_URL;?>jquery.min.find.js"></script>
        <script type="text/javascript"
                src="<?php echo JS_URL;?>easyloader.js"></script>
        <script type="text/javascript" src="<?php echo JS_URL;?>cas-wisedu-redirect.js"></script>
        <script type="text/javascript" src="<?php echo JS_URL;?>i18n.zh_CN.js"></script>

        <link type="text/css" rel="stylesheet"
              href="<?php echo CSS_URL;?>lovey.css"/>
        <link rel="stylesheet" type="text/css"
              href="<?php echo CSS_URL;?>custom.css"/>

        <link rel="stylesheet" type="text/css"
              href="<?php echo CSS_URL;?>custom-base.css"/>
        <body class="body_bg">
        <div class="ui_container_fluid">
            <div class="header">
                <div class="top">
                    <div class="logo pull_left">
                        <img src="<?php echo IMG_URL;?>login-logo.png" alt="IDS logo"
                             title  ="IDS logo"/>
                    </div>
                </div>
            </div>
        </div>
            
<body class="body_bg" >
    <h2><span>激活用户可以通过以下方式找回密码</span>
        <a  href="<?php echo SITE_URL;?>/index.php?r=backstage/admin/login" title="返回"><span style="float: right;font-size: 20px;color: #c75900;">返回</span></a>
    </h2>
    <div style="text-align: center;background-color:whitesmoke;width: 60%; height: 180px;line-height:180px; " align="center">
                        <a href="#" style="margin: 0 50px;"  ><font size="5">问题找回</font></a>
                        <a href="#"  style="margin: 0 50px;" ><font size="5">邮箱找回</font></a>
                    </div>
<script type="text/javascript">
    $(document).ready(function () {
        var service = GetQueryString("service");
        if (service) {
            $("#getBackPasswordByQuestion").attr("href", "getBackPasswordByQuestion.do?service=" + encodeURIComponent(service));
            $("#getBackPasswordByEmail").attr("href", "getBackPasswordByEmail.do?service=" + encodeURIComponent(service));
            $("#getBackPasswordByMobile").attr("href", "getBackPasswordByMobile.do?service=" + encodeURIComponent(service));
            $("#goBack").attr("href",$("#goBack").attr("href")+"?service="+encodeURIComponent(service));
        }
    });
</script>
        <div class="clearfloat"></div>
        <div class="auth_login_footer">
            <span>
               Copyright&nbsp;©&nbsp;>东南大学-网络攻防实验平台&nbsp;All&nbsp;Rights&nbsp;Reserved&nbsp;&nbsp;
            </span>
        </div>
        <script type="text/javascript" src="<?php echo JS_URL;?>cas-wisedu.js"></script>
</body>
</html>