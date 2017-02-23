<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
            <div id="leftContent">
                <div id="sidebar" class="left">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>报表功能</h3><!--<i class="icon-th-large"></i>-->
                    </div>
                    <div>
                        <div id="newsTitle" class="operationcrumb">
                            <ul>
                                <li><a href="#">查看报表</a></li>
                                <li><a href="#">下载</a></li>
                            </ul>  
                        </div>
                    </div>
                                      
                </div>
            </div>
            <div id="rightContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>查看结果</h3>
                    </div>                    
                    <div class="clear"></div>
                    <table class="table table-bordered" border="1" width="100%">
                        <tbody>
                            <tr style="font-weight: bold;">
                                <td>序号</td>
                                <td>类型</td>
                                <td>结果</td>
                                <td>评价</td>
                                <td>导出</td>                      
                            </tr>
                            <tr id="product1">                        
                                <!--数据表表单项名称-->
                                <td><?php echo $combat_info->id;?></td>
                                <td><?php 
                                     if($type == '1'){
                                         $url = 'offenceDefence';
                                         echo "攻防结果";
                                     }
                                     else if($type =='2'){
                                         $url = 'targetRange';
                                          echo "靶场结果";
                                     }
                                    ?>
                                </td>
                                <td><?php echo $combat_info->result;?></td>
                                <td>
                                    <?php echo $combat_info->description;?>
                                    <a href="<?php echo SITE_URL;?>/index.php?r=combat/report&id=<?php echo $combat_info->id;?>&chooseModel=<?php echo $type;?>">
                                        查看报表
                                    </a>
                                </td>                                              
                                <td>
                                    <a href="<?php echo SITE_URL;?>/index.php?r=combat/download&id=<?php echo $combat_info->id;?>&chooseModel=<?php echo $type;?>">
                                        下载
                                    </a>
                                </td>                        
                            </tr>                   
                        </tbody>
                    </table>
        <!--</div>-->
                    <p>
                            <a href="<?php echo SITE_URL;?>/index.php?r=<?php echo $url;?>/resultJudge" class="btn btn-default" role="button">返回</a>                            
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div id="push"></div>
</div>