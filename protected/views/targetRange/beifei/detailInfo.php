<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
            <div id="leftContent">
                <div id="sidebar" class="left">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>靶场训练</h3><!--<i class="icon-th-large"></i>-->
                    </div>
                    <div>
                        <div id="newsTitle" class="operationcrumb">
                           <ul>
                                <li style="color:red;">靶场基本配置</li>
                                <li style="color:#337ab7;">靶场操作</li>
                                <li style="color:#337ab7;">靶场结果</li>
                            </ul>   
                        </div>
                    </div>                                     
                </div>
            </div>
            <div id="rightContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>靶场对手分配，组队信息，环境配置</h3>
                    </div>                    
                    <div class="clear"></div>
                    <div>
                        <h3>加入团队选择</h3>
                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/showTeamInfo">
                                            查看队伍信息
                        </a>
                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/showTeamApplyState">
                                            查看申请状态
                        </a>
                    </div>
                    <div class="clear"></div>
                    <div>
                         <h3>靶场对手分配</h3>
                         <!--系统随机分配controller -->
                         <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/randomTeamer">
                                            系统随机分配
                        </a>
                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/selfChooseTeamer">
                                            自行选择
                        </a>
                    </div>   
                    <div>                        
                        <h3>环境配置</h3>   
                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/environConfig">
                                            自行选择
                        </a>
                    </div>
<!--                    <div>
                        <?php $form = $this -> beginWidget('CActiveForm'); ?>
                        <h3>实验命名</h3>
                        <table class="table table-bordered" border="1" width="100%">                            
                            <tr>
                                <td>
                                    <?php echo $form -> labelEx($tr_model, 'name') ?>
                                </td>
                                <td>
                                    <?php echo $form -> textField($tr_model,'name') ?>
                                    <input type="submit" class="btn btn-default" value="提交">
                                </td>
                            </tr>                                                            
                        </table>
                         
                    </div>-->
                    <p align ='center'>
                        <!--<input type="submit" class="btn btn-default" value="提交">暂时没有内容-->
                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/rulesConfig" class="btn btn-default" role="button">上一步</a>                                                        
                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/baseInfo" class="btn btn-default" role="button">下一步</a>                            
                    </p>
                    <?php $this -> endwidget(); ?>
                </div>                
            </div>           
        </div>
    </div>
    <div id="push"></div>
</div>