    <div id="wrap">
        <div id="wrapInnerTop"></div>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/index">首页</a></li>
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/combat">靶场实战</a></li>
            <li class="active">靶场操作</li>
        </ol>
        <div style="float:right;border:1px;width:20%;margin-right:10px">
            <div  style="float:right;border:10px" >
               <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                   <span style="font-size: 12pt; color:blue;font-family: 宋体">
                       <b>本次实验编号:</b><br><br>
                       <b><?php echo $numberID;?></b>
                   </span>                                                                
               </p>
           </div>
        </div>
        <div style="float:right;border:1px;width:8%;margin-right: 10px">
            <div  style="width:80px;height:80px;float:right;border:10px" >
               <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                   <span style="font-size: 14pt; font-family: 宋体">
                       <b>靶场用时</b>
                   </span>                                
               <!--暂时用静态图片代替,应该有具体的算法并显示-->
               <img src="<?php echo IMG_URL;?>time.jpg" height="40" width="40" border="10px">
               </p>
           </div>
        </div>
        <div style="float:right;border:1px;width:6%;margin-right: 5px">
            <p align="center">
                    <input type="button" class="btn btn-default"  onClick="finishFirm()" value="结束操作">                          
            </p>
        </div>   
        <div class="clear"></div>
        <div id="mainContainer">
            <div id="mainContent">
                <!--<div id="rightContent">-->
                <div id="newsShow">
                    <div id="newsTitle">
                        <h2>靶场操作</h2>
                    </div>                    
                    <div class="clear"></div>
                    <div id="newsContent">
                        <div  style="width:300px;height:340px;float:left;border:10px" >
                            <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                <span style="font-size: 14pt; font-family: 宋体"><b>实时网络拓扑图</b></span>                                
                            <!--暂时用静态图片代替-->
                            <img src="<?php echo IMG_URL;?>topo.jpg" height="300" width="300" border="10px">
                            </p>
                        </div>
                        <div id="teamInfoShow" style="width:300px;height:340px;float:right;border:10px;display: none">
                            <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                <span style="font-size: 14pt; font-family: 宋体"><b>团队信息共享</b></span>                                
                            <!--暂时用静态图片代替-->
                            <img src="<?php echo IMG_URL;?>infomation.jpg" height="300" width="300" border="10px"> 
                            </p>
                        </div>
                        <div class="clear"></div>                          
                    </div>                                               
                </div>
                <div class="clear"></div>                    

                <ul id="myTab" class="nav nav-tabs">
                    <li class="dropdown">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle" 
                           data-toggle="dropdown">平台自身工具 
                                <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                <li><a href="#holeScan" tabindex="-1" data-toggle="tab">漏洞扫描</a></li>
                                <li><a href="#shellController" tabindex="-1" data-toggle="tab">shell命令行</a></li>
                        </ul>
                    </li>                    
                    <li class="dropdown">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle" 
                           data-toggle="dropdown">第三方工具 
                                <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                <li><a href="#Wireshark" tabindex="-1" data-toggle="tab">Wireshark</a></li>
                                <li><a href="#SQLMap" tabindex="-1" data-toggle="tab">SQLMap</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
                <div id="myTabContent" class="tab-content" style="margin-top:10px;">
                        <div class="tab-pane fade" id="holeScan">
                            <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                                <span style="font-size: 14pt; font-family: 宋体">
                                    <b>漏洞扫描是平台的一款可以进行对主机，网站和应用软件扫描的工具。</b>
                                </span>                                
                            </p>
                            <input type="button" class="btn btn-default"  onClick="openwin(holeScan)" value="使用工具"> 
                        </div>
                        <div class="tab-pane fade" id="shellController">
                            <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                                <span style="font-size: 14pt; font-family: 宋体">
                                    <b>shell命令行调用操作系统的网络命令。</b>
                                </span>                                
                            </p>
                            <input type="button" class="btn btn-default"  onClick="openwin(shellController)" value="使用工具"> 
                        </div>
                        <div class="tab-pane fade" id="Wireshark">
                            <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                                <span style="font-size: 14pt; font-family: 宋体">
                                    <b>wireshark是一个网络封包分析软件。网络封包分析软件的功能是撷取网络封包，并尽可能显示出最为详细的网络封包资料。
                                        Wireshark使用WinPCAP作为接口，直接与网卡进行数据报文交换。</b>
                                </span>                                
                            </p>                            
                            <input type="button" class="btn btn-default"  onClick="openwin(Wireshark)" value="使用工具"> 
                        </div>
                        <div class="tab-pane fade" id="SQLMap">
                            <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                                <span style="font-size: 14pt; font-family: 宋体">
                                    <b>SQLmap是一款用来检测与利用SQL注入漏洞的免费开源工具，有一个非常棒的特性，
                                        即对检测与利用的自动化处理（数据库指纹、访问底层文件系统、执行命令。</b>
                                </span>                                
                            </p>
                            <input type="button" class="btn btn-default"  onClick="openwin(SQLMap)" value="使用工具"> 
                        </div>
                        
                </div> 
                <div class="clear"></div> 
 
                <p align="center">
                    <input type="button" class="btn btn-default"  onClick="finishFirm()" value="结束操作">                          
                </p>
                <!--</div>-->
                <div class="clear"></div>
            </div>
        </div>
        <div id="push"></div>
    </div>
 <script type="text/javascript">
window.onload=function(){ 
    typeJudge();//页面加载时调用
}
/**
* 判断是否是团队，如果是团队，显示团队操作信息    
* */
function typeJudge(){
    var state = "<?php echo $type;?>";
    if(state == "2"){
        document.getElementById("teamInfoShow").style.display="";
    }
}     

/**
 * 工具使用按钮点击弹窗函数
 */
function openwin(url) {
    url = "rulesHelp";
    window.open ("<?php echo SITE_URL;?>/index.php?r=targetRange/"+url, 
    "newwindow", 
    "height=700, width=1000, toolbar =no, menubar=no, scrollbars=yes, resizable=no, location=no, status=no,left =200 ,top = 50'"); //写成一行
}

/**
 * 结束操作判断
 */
function finishFirm() {  
    //利用对话框返回的值 （true 或者 false）  
    if (confirm("确定结束操作？")) {  
        var addr ='<?php echo SITE_URL;?>/index.php?r=targetRange/resultShow';//跳转地址，根据用户的选择出现不同的界面？
        window.location.href=addr;
    } 
}
</script>
