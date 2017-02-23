<div id=" bread">
    <ol class="breadcrumb">
       <li>首页</li>
       <li>渗透测试训练</li>
       <li>教师作业</li>
       <li class="active">作业内容</li>
    </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
            <div id="mainContent">
                <div id="newsShow">
                <div id="newsTitle" class="breadcrumb">
                    <h3>训练内容</h3>
                </div>
                <div class="clear"></div>
                <div id="newsContent">
                    <div id = "divtrain">
                    <?php $form = $this -> beginWidget('CActiveForm',array( //自动引入jquery，进行表单验证
                        'enableClientValidation'=>true,
                         'clientOptions'=>array( 'validateOnSubmit'=>true, ), ));?>
                        <?php foreach($taskInfo as $v){  ?>
                        <p>  
                            <?php echo $form->label($taskModel,'train_id'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->train_id; ?>
                        </p>
                        <p>  
                            <?php echo $form->label($taskModel,'requirements'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->requirements; ?>
                        </p>
                        <p>  
                            <?php echo $form->label($taskModel,'train_name'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->train_name; ?>
                        </p>
                        <p>  
                            <?php echo $form->label($taskModel,'train_level'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $level; ?>
                        </p>
                        <p>  
                            <?php echo $form->label($taskModel,'deliver_date'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->deliver_date; ?>
                        </p>
                        <p>  
                            <?php echo $form->label($taskModel,'deadline'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->deadline; ?>
                        </p>
                        <p>  
                            <?php echo $form->label($taskModel,'teacher'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->teacher; ?>
                        </p>
                        <p>  
                            <font style="color: red;"><strong>作业状态:</strong>&nbsp;&nbsp;
                            <strong><?php switch($status){
                                case 0: echo '未完成';break;
                                case 1: echo '已完成'; break;
                                case 2: echo '超期未做'; break;
                            }?></strong></font>
                        </p>
                        <p align="center">
                            <input type="button" id="startTask" class="btn btn-default"  value="开始作业" 
                                   onclick="location.href='<?php echo SITE_URL;?>/index.php?r=penetration/index&trainId=<?php echo $v->train_id; ?>&trainModel=<?php echo $v->train_model; ?>'" />
                            <input type="button" id="alterTask" style="display: none;" class="btn btn-default"  value="修改作业" 
                                   onclick="location.href='<?php echo SITE_URL;?>/index.php?r=penetration/index&trainId=<?php echo $v->train_id; ?>&trainModel=<?php echo $v->train_model; ?>'" />
                &nbsp;&nbsp;<input type="button" class="btn btn-default"  value="重新查询" onclick="location.href='<?php echo SITE_URL;?>/index.php?r=homework/train&id=1'" />

                        </p> 
                    </div>
                        <?php } ?>
                    <?php $form = $this -> endWidget();?>
                        </div>
                    </div>
                </div>
            <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">
var  userid = '<?php echo Yii::app()->user->id;?>';
 if(userid == ''){
    var choice = confirm("您当前为游客状态，请先登录。");
    if(choice){
        window.location.href='<?php echo SITE_URL;?>/index.php?r=user/login';
    }   
  }   
 var status = '<?php echo $status;?>';
 if(status == '1'){
    document.getElementById("startTask").style.display="none"; //隐藏开始作业按钮
    document.getElementById("alterTask").style.display=""; //显示修改作业按钮
 }else if(status == '2'){
     document.getElementById("startTask").style.display="none"; //隐藏开始作业按钮
 }
  
</script>