    <div id="wrap">
        <div id="wrapInnerTop"></div>
        <div id="mainContainer">
            <div id="mainContent">
                <div id="newsShow">
                    <div id="newsTitle">
                        <h2>靶场首页</h2>
                    </div>                    
                    <div class="clear"></div>
                    <div id="newsContent">                                          
                        <div align="center" style="margin: 0cm 0cm 0pt; text-align: center">
                            <p align="center" >
                                <input type="button" style="font-size:26px;width:150px;height:100px;" class="btn btn-default" role="button" value="靶场实战" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=targetRange/combat'" />
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="button" style="font-size:26px;width:150px;height:100px;" class="btn btn-default" role="button" value="操作工具" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=targetRange/trToolsLayout'" /> 
                            </p>
                            <p align="center" >
                                <input type="button" style="font-size:26px;width:150px;height:100px;" class="btn btn-default" role="button" value="历史操作" onclick ="location.href='#'" />
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="button" style="font-size:26px;width:150px;height:100px;" class="btn btn-default" role="button" value="报表" onclick ="location.href='#'" /> 
                            </p>
                        </div>
                        <h3>主要包括以下内容：</h3>
                        <p align="center" style="margin: 0cm 0cm 0pt; text-align: left">
                            <span style="font-size: 14pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                靶场实战：</span>
                            <span style="font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                需要配置基本参数后，方可进行靶场操作</span>                               
                        </p>
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                            <span style="font-size: 14pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                操作工具：</span>
                            <span style="font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                可以调用攻防实验平台自身工具，或者使用平台提供的第三方工具</span>                               
                        </p>
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                            <span style="font-size: 14pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                历史操作：</span>
                            <span style="font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                具备查询历史报表功能</span>                               
                        </p> 
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                            <span style="font-size: 14pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                报表功能：</span>
                            <span style="font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                提供报表下载功能</span>                               
                        </p>
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
        confirm("请先进行靶场基本配置！")
    }  
</script>