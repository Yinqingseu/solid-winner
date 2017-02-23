<div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li><a href="<?php echo SITE_URL?>/index.php?r=scan/typechoose">漏洞扫描</a></li>
           <li class="active">扫描完成</li>
        </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
            <div id="newsShow">
                <div id="newsTitle" class="breadcrumb">
                    <h3 style="font-size: 20pt;color: red;">扫描完成！<?php echo Yii::app()->user->getFlash('save_success');?></h3>
                </div>
                <div class="clear"></div>
                <div id="newsContent">
                    <div id="div2">
                           <ul style="font-size: 14pt;font-family: 宋体;">
                               <p>
                               <?php foreach($resultsInfos as $v){?>
                                <li>扫描开始时间：<?php echo $v->start_time;?></li><br /> <!--从python的扫描结果中赋值更好-->
                                <li>扫描结束时间：<?php echo $v->end_time;?></li><br />
                                <p>
                                    <input type="button" class="btn btn-default" role="button" value="查看具体扫描结果" 
                                    onclick ="#" />
                                    <input type="button" class="btn btn-default" role="button" value="重新扫描" 
                                    onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/typechoose'" />
                                </p>  
                               <?php } ?>
                                </p>
                           </ul>
                    </div>
                </div>
            </div>
            </div>
            <div class="clear"></div>  
    </div>
</div>



       
           
          
            
            
        



















