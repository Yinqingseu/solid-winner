
 <div id=" bread">
        <ol class="breadcrumb">
           <li>首页</li>
           <li>漏洞扫描</li>
           <li class="active">应用软件扫描</li>
        </ol>
    </div>
<div class="clear"></div>
<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
		<div id="mainContent">
                        <div id="newsShow">
                            <div id="newsTitle" class="breadcrumb">
                                <h3>应用软件漏洞扫描实时展示</h3>
                            </div>
                            <div class="clear"></div>
                            <div id="newsContent">
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                   <span style="font-size: 14pt;color:red;  font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                    <?php $form = $this -> beginWidget('CActiveForm');?>  
                                       <div id="div2">
                                       <?php foreach($configInfos as $v){ ?>
                                       <ul style="font-size: 14pt;color:red;  font-family: 宋体;">
                                            <li>功能1：实时显示扫描结果，扫描时间，扫描进度</li><br />
                                            <li>功能2：实时显示系统监测数据、系统性能评估参数</li><br />
                                            <li>功能3：扫描结束，网页展示扫描结果</li><br />
                                            <p>
                                                <input type="button" class="btn btn-default" role="button" value="暂停扫描"  title="此按钮实现扫描的暂停" onclick ="" />
                                            </p>  
                                            <p>
                                                <input type="button" class="btn btn-default" role="button" value="扫描结束，查看扫描结果报表" title="点击生成网页形式扫描结果报表" onclick ="window.open('<?php echo SITE_URL;?>/index.php?r=scan/onlineshow&id=<?php echo $v->scan_id;?>')" />
                                            </p>
                                             <p>
                                                <input type="button" class="btn btn-default" role="button" value="退出扫描" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/scanover'" />
                                             </p>
                                           
                                       </ul>
                                       <?php } ?>
                                       </div>
                                         <?php $form = $this -> endWidget();?>
                                   </span>
                                </p>
                            </div>
                        </div>
                    </div>
		<div class="clear"></div>  
              <script>
                window.onbeforeunload = function(event) {
                    event.returnValue = "...";
                };
            </script>
	</div>
</div>



       
           
          
            
            
        



















