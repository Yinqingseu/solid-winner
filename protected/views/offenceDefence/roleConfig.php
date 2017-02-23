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
                        <h3>攻防角色与模式选择</h3>
                    </div>                    
                    <div class="clear"></div>
                    <div>
                         <label for="name"><h3>攻防基本配置</h3></label>
                    </div>
                    <!--有了这个开始和结束，就不需要<form>这个标签了，否侧会出错-->
                    <?php $form = $this -> beginWidget('CActiveForm',
                                    array(
                                            'enableClientValidation'=>true,
                                            'clientOptions'=>array(
                                                    'validateOnSubmit'=>true,
                                            ),
                                    )
                                ); 
                        ?>                    
                    <p>
                        <?php echo $form->labelEx($odModel,'type'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                        <!--在数据库表结构中，将type默认设置为1或2 ，页面显示是就会有默认选中-->
                        <?php echo $form->radioButtonList($odModel,'type',$type,array('separator'=>'&nbsp;')); ?>
                        <?php echo $form ->error($odModel,'type'); ?>
                    </p>
                    <p>
                        <?php echo $form->labelEx($odModel,'role'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                        <?php echo $form->radioButtonList($odModel,'role',$role,array('separator'=>'&nbsp;')); ?>
                        <?php echo $form ->error($odModel,'role'); ?>
                    </p>
                    <p>
                        <?php echo $form->labelEx($odModel,'name'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                        <?php echo $form->textField($odModel,'name'); ?>
                        <?php echo $form ->error($odModel,'name'); ?>
                    </p>

                    <input name="Submit" value="下一步" class="btn btn-default" type="submit">                        
                    <input type="reset"  class="btn btn-default"  value="重置">
                    <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/configHelp" class="btn btn-default" role="button">帮助</a>                       
                    <?php $this->endWidget(); ?>
                </div>                
            </div>           
        </div>
    </div>
    <div id="push"></div>
</div>