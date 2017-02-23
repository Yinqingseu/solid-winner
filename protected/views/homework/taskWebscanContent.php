<div id=" bread">
    <ol class="breadcrumb">
       <li>首页</li>
       <li>漏洞扫描</li>
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
                    <h3>漏洞扫描内容</h3>
                </div>
                <div class="clear"></div>
                <div id="newsContent">
                    <div id = "divtrain" style="width: 600px;">
                    <?php $form = $this -> beginWidget('CActiveForm',array( //自动引入jquery，进行表单验证
                        'enableClientValidation'=>true,
                         'clientOptions'=>array( 'validateOnSubmit'=>true, ), ));?>
                        <?php foreach($taskInfo as $v){  ?>
                        <p>  
                            <?php echo $form->label($taskModel,'scan_id'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->scan_id; ?>
                        </p>
                        <p>  
                            <?php echo $form->label($taskModel,'requirements'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->requirements; ?>
                        </p>
                        <p><?php echo $form->label($taskModel,'model'); ?><strong>:</strong>&nbsp;&nbsp;
                             <?php echo '教师作业'; ?>
                        </p>
                        <p>  
                            <?php echo $form->label($taskModel,'scan_name'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->scan_name; ?>
                        </p>
                         <p>  
                            <?php echo $form->label($taskModel,'scan_url'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $v->scan_url; ?>
                        </p>
                         <p>  
                            <?php echo $form->label($taskModel,'choice'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php  echo $choice; ?>&nbsp;&nbsp;
                            <?php switch($v->choice){
                                case 1:
                                    $key = explode(',',$v->scan_holelist);
                                    $len = count($key); //获取复选框个数
                                    if($len==1){//存储在数据库中的值作为键值，获取对应的value
                                        $key = number_format ($key[0]);
                                    echo  "<p><b>扫描漏洞:&nbsp;&nbsp;</b>".$hole[$key].'&nbsp;&nbsp; ';}
                                    else{
                                    echo  "<p><b>扫描漏洞:&nbsp;&nbsp;</b>".$hole[1].','.$hole[2].'&nbsp;&nbsp; ';}

                                    echo  '<b>扫描深度:</b>'. $v->scan_depth.'&nbsp;&nbsp; ';
                                    echo  '<b>扫描并发线程数:</b>'. $v->numofthreads.'</p>';
                                break;
                                case 2:
                                    if($v->tool == 1){
                                        $tools = 'OpenVAS';

                                    }else{
                                         $tools = 'Nessus';
                                     }  
                                    echo  "<p><b>第三方漏洞工具:</b>". $tools."</p>";
                                break;
                                case 3:
                                    $key = explode(',',$v->selfcheck);
                                    $len = count($key);
                                    if($len==1){  //存储在数据库中的值作为键值，获取对应的value
                                        $key = number_format($key[0]);      
                                        echo  "<td><b>手动验证工具:</b></td><td>".$selfCheck[$key]."</td> </tr>";}
                                    else{
                                        echo  "<td><b>手动验证工具:</b></td><td>".$selfCheck[1].','.$selfCheck[2]."</td> </tr>";
                                    }
                                break;     
                            } ?>
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
                            } ?></strong></font>
                        </p>
                        <p align="center">
                            <input id="startTask" type="button" class="btn btn-default"  value="开始作业" onclick="location.href='<?php echo SITE_URL;?>/index.php?r=scan/webscanshow&scanId=<?php echo $v->scan_id;?>&scanModel=2'" />
                            <input id="alterTask" style="display: none;"
                                   type="button" class="btn btn-default"  value="修改作业" onclick="location.href='<?php echo SITE_URL;?>/index.php?r=scan/webscanshow&scanId=<?php echo $v->scan_id;?>&scanModel=2'" />
                &nbsp;&nbsp;<input type="button" class="btn btn-default"  value="重新查询" onclick="location.href='<?php echo SITE_URL;?>/index.php?r=homework/scan&id=2'" />
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