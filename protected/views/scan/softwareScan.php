
    <div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li><a href="<?php echo SITE_URL?>/index.php?r=scan/typechoose">漏洞扫描</a></li>
           <li class="active">应用软件扫描配置</li>
        </ol>
    </div>
<div class="clear"></div>
<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
		<div id="mainContent">
                        <div id="newsShow">
                            <div id="newsTitle" class="breadcrumb">
                                <h3>应用软件扫描内容配置</h3>
                            </div>
                            <div class="clear"></div>
                            <div id="newsContent">
                                        <?php $form = $this -> beginWidget('CActiveForm');?>
                                        <div id="softwareCenter">
                                            <p><!-- 扫描应用软件设置-->
                                                <?php echo $form->label($softwareConfig,'scan_software'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;（此处上传应用软件源文件）
                                                <?php echo $form->fileField($softwareConfig,'scan_software',array('separator'=>'&nbsp;&nbsp;')); ?>
                                                <?php echo $form -> error($softwareConfig,'scan_software'); ?>
                                            </p>
                                            <p><!-- 扫描线程数设置-->
                                                <?php echo $form->label($softwareConfig,'numofthreads'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $form->dropDownList($softwareConfig,'numofthreads',$threads); ?>
                                            </p>
                                            <p><!-- 扫描命名-->
                                                <?php echo $form->label($softwareConfig,'scan_name'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $form->textField($softwareConfig,'scan_name'); ?>
                                                <?php echo $form ->error($softwareConfig,'scan_name'); ?>
                                            </p>
                                            <p align="center">
                                               <input name="Submit" value="开始扫描" style="width: 100px;height: 40px;"class="btn btn-default" role="button" type="submit" />
                                            </p> 
                                            </div>
                                        <?php $form = $this -> endWidget();?>
                            </div>
                        </div>
                    </div>
		<div class="clear"></div>   
	</div>
</div>




       

          
            
        
