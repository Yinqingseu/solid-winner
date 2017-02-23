<div id=" bread">
   <ol class="breadcrumb">
      <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
      <li><a href="<?php echo SITE_URL?>/index.php?r=train/index">训练</a></li>
      <li class="active">训练结束</li>
   </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>  
	<div id="mainContainer">
            <div id="mainContent">
		<div id="centerContent">
                    <div id="newsShow"><div class="clear"></div>
                         <div id="newsTitle" class="breadcrumb">
                            </div>
                        <div id="newsContent">
                            <h2 align="center" style="color: red;">训练完成！</h2>
                             <div style=" margin-right: auto;margin-left: auto; margin-top:25px;margin-bottom: 5px; height:130px;width:480px;" >
                                <?php foreach ($recordInfos as $v){ ?>
                                 <p><b>训练用户：</b><?php echo Yii::app()->user->name; ?></p>
                                <p><b>训练ID：</b><?php echo $id; ?></p>
                                <p><b>训练开始时间：</b><?php echo $v->start_time; ?></p>
                                <p><b>训练结束时间：</b><?php echo $v->end_time; ?></p>
                                <?php } ?>
                             </div>
                                <p align="center" >
                                    <input type="button" style="font-size:15px;width:100px;height:40px;"  class="btn btn-default" 
                                    role="button" value="重新训练" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=train/index'" /> 
                                </p>
                        </div>
                    </div>
		</div>
		<div class="clear"></div>
	</div>
    </div>
</div>

