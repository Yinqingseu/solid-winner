
<div id=" bread">
    <ol class="breadcrumb">
       <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
       <li class="active">报表</li>
    </ol>
</div>
<div class="clear"></div>
<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
		<div id="mainContent">
                        <div id="newsShow">
                            <div id="newsTitle" class="breadcrumb">
                                <h3>报表信息展示</h3>
                            </div>
                            <div class="clear"></div>
                            <div id="newsContent">
                                <p align="left" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: left">
                                      <p>
                                        <input type="button" name="search" class="btn btn-default"  value="搜索" onclick ="" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   />
                                      </p>
                                        <?php $form = $this -> beginWidget('CActiveForm');?>  
                                                <table class="table table-bordered" width="500" cellpadding="0" cellspacing="0" align="center" vlign="center">   
                                                    <tr align="center">   
                                                        <td width="352" height="30" ><?php echo $form->label($reportModel,'id'); ?> </td> 
                                                        <td width="352" height="30"><?php echo $form->label($reportModel,'report_name'); ?></td> 
                                                        <td width="352" height="30"><?php echo $form->label($reportModel,'scan_time'); ?></td> 
                                                        <td width="352" height="30" ><?php echo $form->label($reportModel,'scan_user'); ?></td> 
                                                        <td width="352" height="30"><?php echo $form->label($reportModel,'scan_date'); ?> </td> 
                                                        <td width="352" height="30">查看&&下载 </td> 
                                                    </tr>
                                                    <?php foreach($reportInfos as $v) { ?>
                                                    <tr align="center">   
                                                        <td width="352" height="30"><?php echo $v->result_id; ?> </td> 
                                                        <td width="352" height="30"><?php echo $v->report_name; ?></td>
                                                        <td width="352" height="30"><?php echo $v->scan_time; ?></td> 
                                                        <td width="352" height="30"><?php echo $v->scan_user; ?></td> 
                                                        <td width="352" height="30"><?php echo $v->scan_date; ?></td> 
                                                        <td width="352" height="30">
                                                            <input  type="button" class="btn btn-default" style="text-align: center;" value="在线查看" onclick ="window.open('<?php echo SITE_URL;?>/index.php?r=scan/onlineshow&id=<?php echo $v->result_id; ?>')" /> 
                                                            <input  type="button" class="btn btn-default" style="text-align: center;" value="下载导出" onclick ="alert('报表导出窗口：选择文件保存路径、文件命名和文件保存格式')"/> 
                                                        </td> 
                                                        
                                                    </tr>
                                                    <?php } ?>
                                                </table>  
                                       <?php $form = $this -> endWidget();?>
                                </p>
                                <center><?php echo  $pageList; ?></center>
                            </div>
                        </div>
                    </div>
		<div class="clear"></div>
                
	</div>
</div>





