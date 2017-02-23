
<div id=" bread">
   <ol class="breadcrumb">
      <li>首页</li>
      <li>训练</li>
      <li>攻防实例</li>
      <li class="active">视频播放</li>
   </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
	<div id="mainContainer">
            <div id="mainContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>攻防实例视频播放</h3>
                    </div>
                    <div class="clear"></div>
                    <div id="newsContent"  >
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <font size="5" color="red">此处插入视频播放器</font>
                                <?php foreach($configInfos as $v){ ?>  
                              <div id = "tdnoborder" align="left">
                                <pre style="color: black;width:200px;height:190px;">
                                <table width="120"  cellpadding="0" cellspacing="0" >
                                    <caption align="top"> <b>训练配置信息</b></caption>
                                    <tr><td><b>训练用户:</b></td> <td><?php echo Yii::app()->user->name; ?></td> </tr>
                                    <tr><td><b>训练ID号:</b></td> <td><?php echo $v->train_id; ?></td> </tr>
                                     <tr><td><b>训练名称:</b> </td><td><?php echo $v->train_name; ?></td> </tr>
                                     <tr><td><b>播放视频:</b></td><td> <?php echo  $mediaName;?></td> </tr>
                                 </table></pre> </div>
                         <?php } ?>
                             <?php $form = $this-> beginWidget('CActiveForm');?>
                             <?php echo $form->hiddenField($recordModel,'start_time');?>
                             <p align="center">
                             <input type="submit" class="btn btn-default" role="button"  value="结束训练"  />
                             </p>
                             <?php $form = $this -> endWidget(); ?>
                    </div>
                </div>
            </div>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">
 var startTime = '<?php date_default_timezone_set("Asia/Shanghai");
 echo date("Y-m-d H:i:s");?>';  
 document.getElementById('RecordSelftestMedia_start_time').value = startTime;   
 </script>