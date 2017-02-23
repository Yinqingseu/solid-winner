
    <div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li><a href="<?php echo SITE_URL?>/index.php?r=scan/tool">工具</a></li>
           <li class="active">漏洞扫描工具</li>
        </ol>
    </div>
<div class="clear"></div>
<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
		<div id="mainContent">
                        <div id="newsShow">
                            <div id="newsTitle" class="breadcrumb">
                                <h3>漏洞扫描工具</h3>
                            </div>
                            <div class="clear"></div>
                            <div id="newsContent">
                                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                                    <span style="font-size: 16pt;  mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman';text-align: center;">
                                      <p>
                                        <input type="button" name="search" class="btn btn-default"  value="搜索" onclick ="" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   />
                                      </p>  
                                     <?php $form = $this -> beginWidget('CActiveForm');?>  
                                                <table class="table " width="500" cellpadding="0" cellspacing="0" align="center" valign="center">   
                                                    <tr align="center">
                                                        <td width="400" height="10"><?php echo $form->label($pluginModel,'plugin_name'); ?></td> 
                                                        <td width="400" height="20"><?php echo $form->label($pluginModel,'plugin_version'); ?></td> 
                                                        <td width="400" height="10"><?php echo $form->label($pluginModel,'plugin_summary'); ?></td> 
                                                        <td width="400" height="10"><?php echo $form->label($pluginModel,'plugin_creator'); ?></td> 
                                                        <td width="400" height="10"><?php echo $form->label($pluginModel,'plugin_download'); ?></td>
                                                    </tr>
                                                     <?php foreach($pluginInfos as $v){  ?>
                                                    <tr align="center"> 
                                                        <td width="400" height="10"><?php echo $v->plugin_name; ?></td> 
                                                        <td width="400" height="20"><?php echo $v->plugin_version; ?></td> 
                                                        <td width="400" height="10"><?php echo $v->plugin_summary; ?></td> 
                                                        <td width="400" height="10"><?php echo $v->plugin_creator; ?></td> 
                                                        <td width="400" height="10">
                                                            <a href="<?php echo $v->plugin_download; ?>">安装</a><br />
                                                            <a href="#">更新</a><br />
                                                            <a href="#">移除</a>
                                                        </td>
                                                    </tr>
                                                  <?php  } ?>
                                                </table>  
                                        <?php $form = $this -> endWidget();?>
                                        </p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
<!--                                        <p>
                                            若插件库中没有您想要的插件，您可以自行上传插件。上传的插件需满足一定的要求和标准，<a onclick="alert('详细描述系统能够集成的第三方插件的要求和标准')">点击此进行详细了解</a><br>
                                            <br></br>
                                         <strong>选择上传插件：</strong><input  type="file" class="btn " role="button"   style="text-align: center;" />
                                          <br>
                                            <input type="button" name="submit" class="btn btn-default" role="button"  value="点击上传所选插件" onclick ="" />
                                        </p>-->
                                    </span>
                            
                                </p>
                            </div>
                        </div>
                    </div>
                    
		<div class="clear"></div>
                
	</div>
</div>




       

