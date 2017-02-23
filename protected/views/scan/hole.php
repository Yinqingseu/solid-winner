
    <div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li>漏洞库</li>
           <li class="active">漏洞信息</li>
        </ol>
    </div>
<div class="clear"></div>
<div id="wrap">
<div id="wrapInnerTop"></div>
<div id="mainContainer">
<div id="mainContent">
    <div id="newsTitle1" class="operationcrumb1">
        <form action="#" method="get" name="patchsform" id="patchsform" />
        <table width="80%" border="0"  style="height:40px;" cellspacing="0" cellpadding="0" align="center">
         <caption align="top"> <b>漏洞信息快速查询</b</caption>
         <tr>
           <td align="center" nowrap="nowrap">漏洞名称：<input type="text" name="vulcode" id="vulcode" value="" size="15" /></td>
           <td align="center" nowrap="nowrap">漏洞编号：<input type="text" name="cnnvdid" style="color:#999;" size="15" id="cnnvdid" value="CNNVD或CVE编号" size="15" /></td>
           <td align="center" nowrap="nowrap">平台能否检测：</td>   
           <td colspan="2" height="29"><select name="choose">
                                        <option>是</option>
                                        <option>否</option>
                                    </select> </td>
           <td align="center">&nbsp;</td>
           <td >
                <input type="button" size="5"  value="搜索"  class="Wdate" />  
                <a href="http://www.cnnvd.org.cn/vulnerability/statistics" target="_blank" style="color:#900">&nbsp;高级搜索</a>
           </td>
         </tr>
        </table>
    </div>
    <div id="newsShow">
       <div class="clear"></div>
       <div id="newsContent" >
           <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align:left;">
                   <?php $form = $this -> beginWidget('CActiveForm');?>  
                     <table  class="table"  cellpadding="0" cellspacing="0" align="center" > 
                         <tr align="center">
                             <td ><?php echo $form->label($holeModel,'cnnvd_id'); ?> </td> 
                             <td ><?php echo $form->label($holeModel,'hole_type'); ?></td> 
                             <td ><?php echo $form->label($holeModel,'hole_level'); ?></td> 
                             <td ><?php echo $form->label($holeModel,'hole_name'); ?></td> 
                             <td ><?php echo $form->label($holeModel,'deliver_date'); ?></td> 
                             <td ><?php echo $form->label($holeModel,'tag'); ?></td> 
                         </tr>
                          <?php foreach($holeInfos as $v){  ?>
                         <tr align="center"> 
                             <td ><a href="<?php echo SITE_URL;?>/index.php?r=scan/holeshow&id=<?php echo $v->id; ?>" target="_blank" ><?php echo $v->cnnvd_id; ?> </a></td> 
                             <td ><?php echo $v->hole_type; ?></td>
                             <td ><?php echo $v->hole_level; ?></td> 
                             <td ><a href="<?php echo SITE_URL;?>/index.php?r=scan/holeshow&id=<?php echo $v->id; ?>" target="_blank" ><?php echo $v->hole_name; ?></a></td> 
                             <td><?php echo $v->deliver_date; ?></td>
                             <td ><?php echo $tag;?></td>
                         </tr>
                       <?php  } ?>
                     </table>  
                 <?php $form = $this -> endWidget();?>
           </p>
            <center><?php echo $pageList; ?></center>
       </div>
   </div>
    </div>
</div>   
   
   </div>
             <div class="clear"></div>   
	</div></div>






