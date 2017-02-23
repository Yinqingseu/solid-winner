<div id=" bread">
    <ol class="breadcrumb">
       <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
       <li><a href="<?php echo SITE_URL?>/index.php?r=scan/hole">漏洞库</a></li>
       <li class="active">漏洞上传</li>
    </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>提交漏洞</h3>
                    </div>
                    <div class="clear"></div>
                    <br />
                    <div id="holeCenter">
                         <?php $form = $this -> beginWidget('CActiveForm',
                            array( //自动引入jquery，进行表单验证
                                    'enableClientValidation'=>true,
                                             'clientOptions'=>array(
                                             'validateOnSubmit'=>true,
                                  ),
                            ) ); ?> 
                    <p> <!-- 漏洞标题-->
                        <?php echo $form->label($upholeModel,'hole_name'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->textField($upholeModel,'hole_name',array('style'=>'width:610px;height:25px;','placeholder'=>'请输入漏洞标题')); ?>
                    </p>
                        <!-- 厂商名字-->
                     <p>
                         <?php echo $form->label($upholeModel,'vendor_name'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->textField($upholeModel,'vendor_name'
                        ,array('style'=>'width:250px;height:25px;','placeholder'=>'输入第三方厂商名称')); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- 厂商链接-->
                        <?php echo $form->label($upholeModel,'vendor_link'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->textField($upholeModel,'vendor_link'
                        ,array('style'=>'width:250px;height:25px;','placeholder'=>'输入所属域名')); ?>
                    </p>
                    <!-- 漏洞类型-->
                    <p>
                        <?php echo $form->label($upholeModel,'hole_type'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->dropDownList($upholeModel,'hole_type',$holeType,array('style'=>'width:250px;height:25px;')); ?>
                    </p>
                   <p><!-- 威胁类型-->
                       <?php echo $form->label($upholeModel,'threat_type'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->dropDownList($upholeModel,'threat_type',$threatType,array('style'=>'width:250px;height:25px;')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                       <!-- 威胁等级-->   
                         <?php echo $form->label($upholeModel,'threat_level'); ?><strong>:</strong>&nbsp;&nbsp;
                         <?php echo $form->dropDownList($upholeModel,'threat_level',$threatLevel,array('style'=>'width:250px;height:25px;')); ?>
                    </p>
                     <p><!--漏洞详情 -->
                        <?php echo $form->label($upholeModel,'hole_details'); ?><strong>:</strong><br />
                        <?php echo $form->textArea($upholeModel,'hole_details',
                    array('style'=>'width:700px;height:200px;','placeholder'=>'请输入漏洞概述，漏洞URL，利用方式，发生场景等具体漏洞信息。')); ?>
                    </p>
                    <p><!--修复方案 -->
                        <?php echo $form->label($upholeModel,'solutions'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;<br />
                        <?php echo $form->textArea($upholeModel,'solutions',array('style'=>'width:700px;height:200px;','placeholder'=>'请给出该漏洞的修复方案，如果有补丁，请最好提供补丁链接。')); ?>
                    </p>    
                     <p><!--是否匿名--> 
                          <?php echo $form->checkBox($upholeModel,'anonymous_flag'); ?>&nbsp;&nbsp;
                         <?php echo $form->label($upholeModel,'anonymous_flag'); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <!--同意漏洞提交协议-->
                        <?php echo $form->checkBox($upholeModel,'agree_flag'); ?>&nbsp;&nbsp;
                            <?php echo $form->label($upholeModel,'agree_flag'); ?>
                    </p>
                         <p align="center">
                             <input type="submit"  class="btn btn-default"   value="上传漏洞" style="color: white;width:120px;height:50px;font-size:20px;background-color:#0099ff;"  />
                        </p>
                         <?php $form = $this -> endWidget(); ?>
<!--                            <div id="div2">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                                <label>提交须知：</label> <br />
                                <p>1.此功能使用户能够添加漏洞库中不存在的漏洞信息； </p>
                                <p>2.规定漏洞文件的编程语言、格式要求、漏洞简介、检测规则；</p>
                                <p>3.上传的漏洞文件需要经过后台开发人员的审核才能添加到漏洞库中。</p>
                           </div>-->
                    </div>
                </div>
            </div>
         <div class="clear"></div>   
    </div>
</div>




