<div id=" bread">
    <ol class="breadcrumb">
       <li>首页</li>
       <li>渗透测试训练</li>
       <li>教师作业</li>
       <li class="active">作业查询</li>
    </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
            <div id="mainContent">
                <div id="newsShow">
                <div id="newsTitle" class="breadcrumb">
                    <h3>训练信息填写</h3>
                </div>
                <div class="clear"></div>
                <div id="newsContent">
                    <div id = "divtrain">
                    <?php $form = $this -> beginWidget('CActiveForm',array( //自动引入jquery，进行表单验证
                        'enableClientValidation'=>true,
                         'clientOptions'=>array( 'validateOnSubmit'=>true, ), ));?>
                        <p>  
                            <?php echo $form->label($config_model,'train_name'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $form->textField($config_model,'train_name',array('class'=>'inputBg')); ?>
                            <?php echo $form -> error($config_model,'train_name'); ?>
                        </p>
                        <p >  
                            <?php echo $form->label($config_model,'train_id'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $form->textField($config_model,'train_id',array('class'=>'inputBg','id'=>'train_id')); ?>
                            <?php echo $form -> error($config_model,'train_id'); ?>
                        </p>
                        <p >
                            <input type="button" class="btn btn-default"  value="点击生成本次训练号" onclick="javascript:getID()"/>
                        </p> 
                        <p>  
                            <?php echo $form->label($config_model,'train_level'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $form->radioButtonList($config_model,'train_level',$level,array('separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
                            <?php echo $form -> error($config_model,'train_level'); ?>
                        </p>
                        <p align="center">
                            <input type="submit" class="btn btn-default"  value="提交" />
                        </p> 
                    </div>
                    <?php $form = $this -> endWidget();?>
                        </div>
                    </div>
                </div>
            <div class="clear"></div>
    </div>
</div>
