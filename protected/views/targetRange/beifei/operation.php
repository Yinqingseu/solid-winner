    <div id="wrap">
        <div id="wrapInnerTop"></div>
        <div id="mainContainer">
            <div id="mainContent">
                <!--<div id="rightContent">-->
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>靶场操作</h3>
                    </div>                    
                    <div class="clear"></div>
                    <div id="newsContent">
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <span style="font-size: 26pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                靶场操作的信息呈现，比如图片等。。。。。。。</span>
                            <span lang="EN-US" style="font-size: 26pt; color: red; mso-bidi-font-size: 12.0pt"><o:p></o:p>
                            </span>
                        </p>
                        <div style="float:right;border:1px;width:100%">
                             <div  style="width:80px;height:80px;float:right;border:10px" >
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                    <span style="font-size: 14pt; font-family: 宋体"><b>靶场用时</b></span>                                
                                <!--暂时用静态图片代替,应该有具体的算法并显示-->
                                <img src="<?php echo IMG_URL;?>time.jpg" height="40" width="40" border="10px">
                                </p>
                            </div>
                        </div>                                            
                        <div style="float:left;border:1px;width:100%">
                             <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                <span style="font-size: 26pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                    <b>信息呈现</b>
                                </span>                                
                            </p>                            
                            <!--并排显示-->
                            <div  style="width:300px;height:340px;float:left;border:10px" >
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                    <span style="font-size: 14pt; font-family: 宋体"><b>实时网络拓扑图</b></span>                                
                                <!--暂时用静态图片代替-->
                                <img src="<?php echo IMG_URL;?>topo.jpg" height="300" width="300" border="10px">
                                </p>
                            </div>
                            <div style="width:300px;height:340px;float:right;border:10px">
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                    <span style="font-size: 14pt; font-family: 宋体"><b>团队信息共享</b></span>                                
                                <!--暂时用静态图片代替-->
                                <img src="<?php echo IMG_URL;?>infomation.jpg" height="300" width="300" border="10px"> 
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div style="float:left;border:1px;width:100%">
                            <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                <span style="font-size: 26pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                    <b>控制台操作</b>
                                </span>                                
                            </p>
                            <!--并排显示-->
                            <div style="width:200px;height:240px;float:left;border:10px">
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                    <span style="font-size: 14pt; font-family: 宋体"><b>编写脚本，显示结果</b></span>                                
                                <!--暂时用静态图片代替-->
                                <img src="<?php echo IMG_URL;?>contorl.jpg" height="145" width="200" border="10px"> 
                                </p>
                            </div>
                            <div style="width:220px;height:240px;float:left;border:10px;margin-left: 80px;margin-right: 80px">
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                    <span style="font-size: 14pt; font-family: 宋体"><b>第三方工具调用</b></span>                                
                                <!--暂时用静态图片代替-->
                                <a href="<?php echo SITE_URL;?>/index.php?r=tools/thirdLayout&type=2">
                                    <img src="<?php echo IMG_URL;?>third-tools.jpg" height="185" width="220" border="10px">   
                                </a>
                                </p>
                            </div>
                            <div style="width:200px;height:240px;float:right;border:10px">
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                    <span style="font-size: 14pt; font-family: 宋体"><b>平台工具调用</b></span>                                
                                <!--暂时用静态图片代替-->
                                <a href="<?php echo SITE_URL;?>/index.php?r=tools/platLayout&type=2">
                                    <img src="<?php echo IMG_URL;?>plat-tools.png" height="200" width="200" border="10px">   
                                </a>
                                </p>
                            </div>
                        </div>
                    </div>                            
                </div>
                <div class="clear"></div>                    
                <p align="center">
                    <input type="button" class="btn btn-default"  onClick="firm()" value="结束操作">                          
                </p>
                <!--</div>-->
                <div class="clear"></div>
            </div>
        </div>
        <div id="push"></div>
    </div>
 <script type="text/javascript">
    function firm() {  
        //利用对话框返回的值 （true 或者 false）  
        if (confirm("确定结束操作？")) {  
            var addr ='<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/resultShow';//跳转地址，根据用户的选择出现不同的界面？
            window.location.href=addr;
        } 
    }  
</script>