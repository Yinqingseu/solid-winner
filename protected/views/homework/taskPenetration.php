<div id=" bread">
    <ol class="breadcrumb">
       <li>首页</li>
       <li>渗透测试训练</li>
       <li>教师作业</li>
       <li class="active">作业ID号填写</li>
    </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
            <div id="mainContent">
                <div id="newsShow">
                <div id="newsTitle" class="breadcrumb">
                    <h3>作业ID号填写</h3>
                </div>
                <div class="clear"></div>
                <div id="newsContent">
                    <div id = "divtrain">
                    <?php $form = $this -> beginWidget('CActiveForm');?>
                        <p >
                            <?php echo $form->label($searchModel,'task_id'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $form->textField($searchModel,'task_id'); ?>
                            <?php echo $form ->error($searchModel,'task_id'); ?>
                        </p> 
                        <b style="color: red;"><?php  echo Yii::app()->user->getFlash('id_error');?></b>
                        <p align="center">
                            <input type="submit" class="btn btn-default"  value="获取作业" />
                        </p> 
                        
                    </div>
                    <?php $form = $this -> endWidget();?>
                        </div>
                    </div>
                </div>
            <div class="clear"></div>
    </div>
</div>
