
    <div id=" bread">
       <ol class="breadcrumb">
       <li>首页</li>
       <li>攻防实例训练</li>
       <li>自主训练</li>
       <li class="active">训练信息填写</li>
    </ol>
    </div>
<div class="clear"></div>
<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
		<div id="mainContent">
                    <div id="newsShow">
                        <div id="newsTitle" class="breadcrumb">
                            <h3>攻防实例训练内容填写</h3>
                        </div>
                        <div class="clear"></div>
                        <div id="newsContent">
                             <div id = "divtrain">
                            <?php $form = $this -> beginWidget('CActiveForm',array( //自动引入jquery，进行表单验证
                                    'enableClientValidation'=>true,
                                     'clientOptions'=>array( 'validateOnSubmit'=>true, ), 
                                    ));?>
                            <p>  
                            <?php echo $form->label($configModel,'train_id'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $form->textField($configModel,'train_id',array('class'=>'inputBg','id'=>'train_id','style'=>'color:blue;border:0px;background-color:transparent;'));?>
                            <?php echo $form -> error($configModel,'train_id'); ?>
                            </p>
                            <p>  
                                <?php echo $form->label($configModel,'train_user'); ?><strong>:</strong>&nbsp;&nbsp;
                                <?php echo  $form->textField($configModel,'train_user',array('class'=>'inputBg','id'=>'train_user','style'=>'color:blue;border:0px;background-color:transparent;')); ?>

                            </p>
                            <p>  
                                <?php echo $form->label($configModel,'train_name'); ?><strong>:</strong>&nbsp;&nbsp;
                                <?php echo $form->textField($configModel,'train_name',array('class'=>'inputBg')); ?>
                                <?php echo $form -> error($configModel,'train_name'); ?>
                            </p>
                            <p>  
                                <?php echo $form->label($configModel,'media_id'); ?><strong>:</strong>&nbsp;&nbsp;
                                <?php echo $form->dropDownList($configModel,'media_id',$medias,array('class'=>'inputBg','separator'=>'&nbsp;')); ?>
                                <?php echo $form -> error($configModel,'media_id'); ?>
                            </p>
                              <p align="center">
                                <input type="submit" class="btn btn-default"  value="开始训练" />
                             </p>  
                            <?php $form = $this -> endWidget();?>
                            </div>
                        </div>
                    </div>
                    </div>
		<div class="clear"></div>
                
	</div>
</div>
<script type="text/javascript">
	day = new Date();
	id = day.getTime(); //该方法返回距1970.1.1之间的毫秒数，因此每一毫秒唯一，作为训练号
        document.getElementById('train_id').value = Number(id); 
        //将生成的训练号赋值给目标文本框
        document.getElementById('train_id').readOnly = true;
        document.getElementById('train_user').value = '<?php  echo Yii::app()->user->name;?>';
</script>

