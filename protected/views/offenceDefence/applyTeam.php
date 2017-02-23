        <div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
            <div id="leftContent">
                <div id="sidebar" class="left">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>攻防训练</h3><!--<i class="icon-th-large"></i>-->
                    </div>
                    <div>
                        <div id="newsTitle" class="operationcrumb">
                            <ul>
                                <li style="color:red;">攻防基本配置</li>
                                <li style="color:#337ab7;">攻防操作</li>
                                <li style="color:#337ab7;">攻防结果</li>
                            </ul>  
                        </div>
                    </div>                                     
                </div>
            </div>
            <div id="rightContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>队伍申请</h3>
                    </div>                    
                    <div class="clear"></div>                       
                    <div>            
                        <?php $form = $this -> beginWidget('CActiveForm'); ?>
                        <table class="table table-bordered" border="1" width="100%">
                            <caption><h3>队伍申请信息列表</h3></caption>
                            <tr>
                                <td>
                                    <?php echo $form -> labelEx($team_model, 'team_name') ?>
                                </td>
                                <td>
                                    <?php echo $form -> textField($team_model,'team_name') ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $form -> labelEx($team_model, 'user_talent') ?>
                                </td>
                                <td>
                                    <?php echo $form -> textArea($team_model,'user_talent',array('cols'=>30,'rows'=>5)); ?>
                                </td>
                            </tr>                               
                            <tr>
                                <td colspan="2" align="center">
                                    <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/detailInfo" class="btn btn-default" role="button">返回</a>                            
                                    <input type="submit" class="btn btn-default" value="提交">
                                </td>
                            </tr>  
                        </table>
                        <?php $this -> endwidget(); ?>
                    </div>                    
                </div>                
            </div>           
        </div>
    </div>
    <div id="push"></div>
</div>