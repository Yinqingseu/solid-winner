<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
		<div id="mainContent">
                    <div id="leftContent">
                        <div id="sidebar" class="left">
                            <div id="newsTitle" class="breadcrumb">
                                <h3>漏洞扫描</h3><!--<i class="icon-th-large"></i>-->
                            </div>
                            <div>
                                <div id="newsTitle" class="operationcrumb">
                                    <ul>
                                        <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/hole" >漏洞库</a></li>
                                        <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/scan">扫描功能</a></li>
                                        <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/plugin">插件功能</a></li>
                                        <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/report"  style="color:red;">报表功能</a></li>
                                        <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/selfcheck" >手动验证功能</a></li>
                                        <li><a href="<?php echo SITE_URL;?>/index.php?r=scan/detect"  >系统监测</a></li>
                                    </ul>  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="rightContent">
                        <div id="newsShow">
                            <div id="newsTitle" class="breadcrumb">
                                <h3>报表功能</h3>
                            </div>
                            <div class="clear"></div>
                            <div id="newsContent">
                                <p align="left" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                                    <span style="font-size: 20pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                        <form method="get" >   
                                                <table class="table table-bordered" width="500" cellpadding="0" cellspacing="0" align="center" vlign="center">   
                                                    <tr align="center">   
                                                        <td width="" height="30">报表ID </td> 
                                                        <td width="352" height="30">报表名称 </td> 
                                                        <td width="352" height="30" >创建者 </td> 
                                                        <td width="352" height="30">创建时间 </td> 
                                                        <td width="352" height="30">查看&&下载 </td> 
                                                    </tr>
                                                    <tr align="center">   
                                                        <td width="352" height="30">1 </td> 
                                                        <td width="352" height="30">test</td> 
                                                        <td width="352" height="30">YQ</td> 
                                                        <td width="352" height="30">2016.11.30</td> 
                                                        <td width="352" height="30">
                                                            <input  type="button" class="btn btn-default" style="text-align: center;" value="在线查看" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/onlineshow'" /> 
                                                            <input  type="button" class="btn btn-default" style="text-align: center;" value="下载导出" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/download'"/> 
                                                        </td> 
                                                        
                                                    </tr>
                                                </table>  
                                       </form>
                                       
                                        <p>
                                            文件导出格式选择：&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="1" >pdf&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="2" >html&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="3" >excel&nbsp;&nbsp;&nbsp;&nbsp;
                                        </p>
                                        <p>
                                            选择文件导出路径：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" >
                                        </p>
                                        <p>
                                            导出文件命名：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  >
                                        </p>
                                        <p>
                                             <input type="button" class="btn btn-default" role="button" value="报表导出" onclick ="" />
                                        </p>
                                    </span>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
		<div class="clear"></div>
                
	</div>
</div>
        </div>





