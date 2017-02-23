<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>攻防模块主页内容描述</h3>
                    </div>                    
                    <div class="clear"></div>
                    <div id="newsContent">
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <span style="font-size: 26pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                内容具体介绍或者是介绍操作方法。。。。。。。</span>
                            <span lang="EN-US" style="font-size: 26pt; color: red; mso-bidi-font-size: 12.0pt"><o:p></o:p>
                            </span>
                        </p>
                        <h3>主要包括以下内容：</h3>
                        <ul>
                            <li><h3><a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/roleModelConfig">攻防基本配置</a></h3></li>
                            <li><h3><a onclick="warning()">攻防操作</a></h3></li>
                            <li><h3><a onclick="warning()">攻防结果</a></h3></li>
                        </ul>
                    </div>
                </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="push"></div>
</div>
<script type="text/javascript">
    function warning() {  
        //利用对话框返回的值 （true 或者 false）
        confirm("请先进行攻防基本配置！")
    }  
</script> 