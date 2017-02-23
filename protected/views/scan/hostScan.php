
    <div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li><a href="<?php echo SITE_URL?>/index.php?r=scan/typechoose">漏洞扫描</a></li>
           <li class="active">主机扫描</li>
        </ol>
    </div>
<div class="clear"></div>
<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
		<div id="mainContent">
                        <div id="newsShow">
                            <div id="newsTitle" class="breadcrumb">
                                <h3>主机扫描内容配置</h3>
                            </div>
                            <div class="clear"></div>
                            <div id="newsContent">
                                <p align="center"  style="margin: 0cm 0cm 0pt; text-align: center">
                                        <?php $form = $this -> beginWidget('CActiveForm');?>
                                        <div id="div2">
                                            <p><!-- 扫描主机IP范围设置-->
                                                <?php echo $form->label($hostConfig,'start_ip'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $form->textField($hostConfig,'start_ip'); ?>
                                                <?php echo $form -> error($hostConfig,'scan_ip'); ?>
                                            </p>
                                            <p>
                                                <?php echo $form->label($hostConfig,'end_ip'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $form->textField($hostConfig,'end_ip'); ?>
                                                <?php echo $form -> error($hostConfig,'end_ip'); ?>
                                            </p>
                                            <p><!-- 扫描端口范围设置-->
                                                <?php echo $form->label($hostConfig,'start_port'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $form->textField($hostConfig,'start_port'); ?>
                                                <?php echo $form -> error($hostConfig,'start_port'); ?>
                                            </p>
                                            <p>
                                                <?php echo $form->label($hostConfig,'end_port'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $form->textField($hostConfig,'end_port'); ?>
                                                <?php echo $form -> error($hostConfig,'end_port'); ?> （端口号范围：0-65535）
                                            </p>
                                            <p><!-- 扫描线程数设置-->
                                                <?php echo $form->label($hostConfig,'numofthreads'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $form->dropDownList($hostConfig,'numofthreads',$threads); ?>
                                            </p>
                                            <p><!-- 扫描命名-->
                                                <?php echo $form->label($hostConfig,'scan_name'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $form->textField($hostConfig,'scan_name'); ?>
                                                <?php echo $form ->error($hostConfig,'scan_name'); ?>
                                            </p>
                                                <p>
                                                    <input name="Submit" value="开始扫描" style="width: 100px;height: 40px;"class="btn btn-default" role="button" type="submit" />
                                                </p> 
                                            </div>
                                        <?php $form = $this -> endWidget();?>
                                </p>
                            </div>
                        </div>
                    </div>
		<div class="clear"></div>   
	</div>
</div>




       

          
            
        
