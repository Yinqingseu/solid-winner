
    <div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li><a href="<?php echo SITE_URL?>/index.php?r=scan/hole">漏洞库</a></li>
           <li class="active">漏洞详情</li>
        </ol>
    </div>
<div id="wrap">
	<div id="wrapInnerTop"></div>
	<div id="mainContainer">
            <div id="mainContent">
                <div id="RightContent"> 
                    <div id="sidebar" class="left">
                        <?php foreach($holeInfos as $v){    
                            //分割字符串：related_holes_name和related_holes_link，使之一一对应
                            $related_hole_names = explode(',',$v->related_holes_name);
                            $related_hole_links = explode(',',$v->related_holes_link);
                            ?>
                      <div id="newsTitle" >
                            <h3>补丁</h3>
                        </div>
                        <div>
                            <div id="newsTitle1" class="operationcrumb1">
                                <ul>
                                    <li><a href="<?php echo $v->hole_patch_link;?>" target="_blank"><?php echo $v->hole_patch;?></a></li>
                                </ul>  
                            </div>
                        </div>
                         <div id="newsTitle">
                            <h3>受影响实体</h3><!--<i class="icon-th-large"></i>-->
                        </div>
                        <div>
                            <div id="newsTitle1" class="operationcrumb1">
                                <ul>
                                    <li>暂无数据</li>
                                </ul>  
                            </div>
                        </div>
                         <div id="newsTitle" >
                            <h3>相关漏洞</h3><!--<i class="icon-th-large"></i>-->
                        </div>
                        <div>
                            <div id="newsTitle1" class="operationcrumb1">
                                <ul>
                                    <?php for($i=0;$i<count($related_hole_names);$i++){  ?>
                                    <li><a href="<?php echo $related_hole_links[$i];?>"  target="_blank"><?php echo $related_hole_names[$i];?></a></li>
                                    <?php }  ?>
                                </ul>  
                            </div>
                        </div>
                        </div>
                    </div> 
            <div id="LeftContent">
                <div id="newsShow">
                    <div class="clear"></div>
                    <div id="newsContent">
                    <h2 style="width:707px;">漏洞信息详情</h2>
                    <div class="cont_details">
                        <?php $form = $this -> beginWidget('CActiveForm');?>
                        <p class="displayitem" style="margin:0;paddng:0;">
                          <p>
                            <?php echo $form->label($holeModel,'hole_name'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td width="81%" class="displayitem" style="color:#B4191E"><?php echo $v->hole_name;?></td>
                          </p>
                          <p>
                             <?php echo $form->label($holeModel,'cnnvd_id'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td class="displayitem"><?php echo $v->cnnvd_id;?></td>
                          </p>
                          <p>
                            <?php echo $form->label($holeModel,'deliver_date'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td class="displayitem"><a href="#" ><?php echo $v->deliver_date;?></a></td>
                          </p>
                          <p>
                            <?php echo $form->label($holeModel,'update_date'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td class="displayitem"><a href="#" ><?php echo $v->update_date;?></a></td>
                          </p>
                          <p>
                            <?php echo $form->label($holeModel,'hole_level'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td class="displayitem"><?php echo $v->hole_level;?>
                            </td>
                          </p>
                          <p>
                            <?php echo $form->label($holeModel,'hole_type'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td class="displayitem"><a href="#" ><?php echo $v->hole_type;?></a></td>
                          </p>
                          <p>
                            <?php echo $form->label($holeModel,'threat_type'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td class="displayitem"><a href="#" ><?php echo $v->threat_type;?></a></td>
                          </p>
                          <p>
                            <?php echo $form->label($holeModel,'cve_id'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td><a href="http://cve.mitre.org/cgi-bin/cvename.cgi?name=<?php echo $v->cve_id;?>" target="_blank" ><?php echo $v->cve_id;?></a></td>
                          </p>
                          <p>
                            <?php echo $form->label($holeModel,'tag'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <td> <?php echo $tag;?></td>
                          </p>
                      </p>
                      <?php $form = $this -> endWidget();?>
                      </div>
                    <h3>漏洞简介</h3>
                    <div class="cont_details" >
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <p class="displayitem" style="margin:0;paddng:0;">
                                <?php echo $v -> hole_details;?>
                            </p>
                        <p class="displayitem"></p>
                       </table> 
                    </div>
                    <h3>漏洞公告</h3>
                    <div class="cont_details">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <p class="displayitem">目前厂商已经发布了升级补丁以修复此安全问题，补丁获取链接：<br/>
                            <a href="<?php echo $v->hole_patch_link;?>" target="_blank" rel="nofollow"><?php echo $v->hole_patch;?></a>
                        </p>
                        </table>
                    </div>
                    <h3>参考网址</h3>
                      <div class="cont_details1" >
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <p class="displayitem">
                            <br/>链接:<a href="<?php echo $v-> related_url;?>" target="_blank" rel="nofollow"><?php echo $v-> related_url;?></a><br/></p> 
                          </p>
                        </table>
                      </div>
                    <?php } ?>
        <div class="clear"></div>   
</div>
</div>
</div>
</div></div></div>





       

          
            
        