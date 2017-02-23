    <div id="wrap">
        <div id="wrapInnerTop"></div>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/index">首页</a></li>
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/combat">靶场实战</a></li>
            <li class="active">靶场配置</li>
        </ol>        
        <div id="mainContainer">
            <div id="mainContent">
                <!--<div id="rightContent">-->
                    <div id="newsShow">
                        <div id="newsTitle">
                            <h2>靶场自主竞赛配置</h2>
                        </div>                    
                        <div class="clear"></div>
                        <div style="float:right;border:1px;width:20%;margin-right:10px">
                            <div  style="float:left;border:10px" >
                                <input type="button" class="btn btn-default" onclick="openwin()" value="帮助">
                           </div>
                        </div>
                        <div class="clear"></div>

                        <!--有了这个开始和结束，就不需要<form>这个标签了，否侧会出错-->
                        <?php $form = $this -> beginWidget('CActiveForm',
                                array(
                                        'id'=>'teamConfig',
                                        'enableClientValidation'=>true,
                                        'clientOptions'=>array(
                                                'validateOnSubmit'=>true,
                                        ),
                                )
                            ); 
                        ?>
                        
                        <div><!--靶场模式选择，如果是多人，显示隐藏-->
                            <?php echo $form->labelEx($trTeam,'type'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                            <!--在数据库表结构中，将type默认设置为1或2 ，页面显示是就会有默认选中-->
                            <?php echo $form->radioButtonList($trTeam,'type',$type,array('separator'=>'&nbsp;','onclick'=>'showType()')); ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;<b style="color: red">请慎重选择，不可更改！</b>
                            <!--不要随意改动小物件的name或者id,如果需要使用，则用原生的，否则Yii自带的JS无法显示-->
                            <?php echo $form->hiddenField($trTeam,'trTeamFlag',array("value"=>FALSE));?>
                            <b style="color: red"><?php echo $form ->error($trTeam,'type'); ?></b>                            
                        </div>
                        <div><!--多人队伍信息选择--图片按钮-->
                            <div id="divType" style="float:left;border:10px;width:100%;display: none;">
                                <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                   <span style="font-size: 14pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                       <b>多人队伍信息选择--图片按钮</b>
                                   </span>                                
                                </p>
                                <!--主从机选择-->
                                <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                    <?php echo $form->labelEx($trTeam,'team_type'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                                    <?php echo $form->radioButtonList($trTeam,'team_type',$teamType,array('separator'=>'&nbsp;','onclick'=>'showTeamType()')); ?>

                                </p>
                                <!--主机相关配置-->
                                <div id="divTeamTypeZhu" style="float:left;border:10px;width:100%;display: none;">
                                    <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                        <span style="font-size: 14pt; color: orange; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                            <b>主机相关配置</b>
                                            <?php echo $form->labelEx($trTeam,'name'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                
                                            <?php echo $form->textField($trTeam,'name');?>
                                            <input name="Save" id="zhuSubmitBt" value="确定" class="btn btn-default" type="submit" onclick="zhuSubmit()">
                                            <input id="teamZhuResetBt" class="btn btn-default"  value="清空重置" type="button" onclick="TeamZhuReset()">                                            
                                        </span>                                
                                     </p>
                                </div>
                                <!--从机相关配置-->
                                <div id="divTeamTypeCong" style="float:left;border:10px;width:100%;display: none;">
                                    <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                        <span style="font-size: 14pt; color: orange; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                            <b>从机相关配置</b>
                                            <?php echo $form->labelEx($trTeam,'numberID'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                
                                            <?php echo $form->textField($trTeam,'numberID');?>
                                            <input name="Save" id="congSubmitBt" value="加入" class="btn btn-default" onclick="congSubmit()"  type="submit" >
                                             <!--onclick="submitCongBt()"-->
                                            <input id="teamCongResetBt" class="btn btn-default"  value="清空重置" type="button" onclick="TeamCongReset()">
                                        </span>                                
                                     </p>
                                </div>

                            </div>
                            <div  style="margin-top: 5px; margin-left: 5cm; text-align: left">
                                <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                   <span style="font-size: 16pt; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                        <b style="color: red"><?php echo $form ->error($trTeam,'name'); ?></b><!--主机错误信息显示-->
                                        <b style="color: red"><?php echo $form ->error($trTeam,'numberID'); ?></b><!--从机错误信息显示-->
                                        <b style="color: red"><?php echo $form ->error($trTeam,'team_type'); ?></b><!--错误的提示信息不需要因此，放在外面-->
                                   </span>                                
                                </p>
                            </div>
                            
                            
                            <!--输出数据库{{tr_team}}  保存或者失败的相关信息-->
                            <div id="databaseTeamInfo" style="margin-top: 5px; margin-left: 5cm; text-align: left">
                                <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                   <span style="font-size: 16pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                        <b><?php $temp = Yii::app()->user->getFlash('teamSuccess'); if($temp != NULL) echo $temp."请进行靶场具体配置。</br>";?></b><!--创建成功-->
                                        <b style="color: red"><?php $temp = Yii::app()->user->getFlash('teamFailed'); if($temp != NULL) echo $temp."</br>";?></b><!--创建失败-->
                                        <b><?php $temp = Yii::app()->user->getFlash('teamJoinSuccess'); if($temp != NULL) echo $temp."</br>" ;?></b><!--加入成功-->
                                        <b style="color: red"><?php $temp = Yii::app()->user->getFlash('teamJoinFailed'); if($temp != NULL) echo $temp."</br>" ;?></b><!--加入失败-->
                                        <b style="color: red"><?php $temp = Yii::app()->user->getFlash('teamFull'); if($temp != NULL) echo $temp."</br>";?></b><!--人数已满-->
                                        <b><?php $temp = Yii::app()->user->getFlash('TRTeamName'); if($temp != NULL) echo $temp."</br>请牢记团队编号并告知同一队伍中的从机</br>";?></b><!--团队名称-->                                       
                                        <b><?php $temp = Yii::app()->user->getFlash('TRTeamnumberID'); if($temp != NULL) echo $temp."</br>";?></b><!--团队编号-->
                                   </span>                                
                                </p>
                            </div>                          
                        </div>
                        <?php $this->endWidget(); ?>
                        <div id="otherConfigForm" style="display: none">
                            <?php $form = $this -> beginWidget('CActiveForm',
                                    array(
                                            'id'=>'OtherConfig',
                                            'enableClientValidation'=>true,
                                            'clientOptions'=>array(
                                                    'validateOnSubmit'=>true,
                                            ),
                                    )
                                ); 
                            ?>
                            <div><!--实战命名-->
                                <p>
                                    <?php echo $form->labelEx($trModel,'name'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                
                                    <?php echo $form->textField($trModel,'name');?>
                                    <?php echo $form->hiddenField($trModel,'trChangeFlag',array("value"=>FALSE));?>
                                    <?php // echo $form->hiddenField($trModel,'team_info',array("value"=>NULL));?><!--团队编号信息-->
                                    <b style="color: red"><?php echo $form ->error($trModel,'name'); ?></b>
                                </p>
                            </div>
                            <div style="display: none;"><!--靶场模式选择，如果是多人，显示隐藏-->
                                <?php echo $form->labelEx($trModel,'type'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                                <!--在数据库表结构中，将type默认设置为1或2 ，页面显示是就会有默认选中-->
                                <?php echo $form->radioButtonList($trModel,'type',$type,array('separator'=>'&nbsp;')); ?>
                                <!--不要随意改动小物件的name或者id,如果需要使用，则用原生的，否则Yii自带的JS无法显示-->       
                                <b style="color: red"><?php echo $form ->error($trModel,'type'); ?></b>                            
                            </div>


                            <div><!--靶场目标选择-->
                               <p>
                                    <?php echo $form->labelEx($trModel,'target'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                                    <?php echo $form->radioButtonList($trModel,'target',$target,array('separator'=>'&nbsp;','onclick'=>'showTarget()')); ?>
                                    <b style="color: red"><?php echo $form ->error($trModel,'target'); ?></b>
                                </p>
                            </div>
                            <!--应该根据选择的不同目标靶机，显示不同的类型的任务。-->
                            <div><!--主机目标选择--图片按钮-->
                                <div id="divTargetZhuJi" style="float:left;border:10px;width:100%;display: none;">
                                    <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                       <span style="font-size: 14pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                           <b>主机目标选择--图片按钮</b>
                                       </span>                                
                                    </p>          
                                    <p>
                                        <?php echo $form->labelEx($trModel,'task_zhuji'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                                        <?php echo $form->DropdownList($trModel,'task_zhuji',$taskZhuJi); ?>
                                        <!--$taskZhuJi是controller里传过来的键的名字，而'task_zhuji'是在数据库表单中的属性,也是Model里attributes配置的属性-->
                                    </p>
                                </div>
                                <b style="color: red"><?php echo $form ->error($trModel,'task_zhuji'); ?></b><!--错误的提示信息不需要因此，放在外面-->
                            </div>
                            <div><!--网站目标选择--图片按钮-->
                                <div id="divTargetWeb" style="float:left;border:10px;width:100%;display: none;">
                                    <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                       <span style="font-size: 14pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                           <b>网站目标选择--图片按钮</b>
                                       </span>                                
                                    </p>
                                    <p>
                                        <?php echo $form->labelEx($trModel,'task_web'); ?>&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <?php echo $form->DropdownList($trModel,'task_web',$taskWeb); ?>
                                    </p>                            
                                </div>
                                <b style="color: red"><?php echo $form ->error($trModel,'task_web'); ?></b><!--错误的提示信息不需要因此，放在外面-->
                            </div>
                            <div><!--手机目标选择--图片按钮div-->
                                <div id="divTargetPhone" style="float:left;border:10px;width:100%;display: none;">
                                    <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                       <span style="font-size: 14pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                           <b>手机目标选择--图片按钮</b>
                                       </span>                                
                                    </p>
                                    <p>
                                        <?php echo $form->labelEx($trModel,'task_phone'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                                        <?php echo $form->DropdownList($trModel,'task_phone',$taskPhone); ?>
                                    </p>                            
                                </div>
                                <b style="color: red"><?php echo $form ->error($trModel,'task_phone'); ?></b><!--错误的提示信息不需要因此，放在外面-->
                            </div>                        
                            <div><!--相关的操作按钮-->                       
                                <input name="Save" id="saveBt" value="保存配置" class="btn btn-default" type="submit" onclick="TrFormSave()">
                                <input name="Change" id ="changeBt" value="修改配置" class="btn btn-default" type="button" onclick="changeForm()" style="display:none">                        
                                <input id="submitBt" value="提交配置" type="button" class="btn btn-default" style="display:none" onclick="submitFirm('<?php echo $numberID;?>','<?php echo $databaseState;?>')">                                                
                                <!--type="reset"-->
                                <input id="resetBt" class="btn btn-default"  value="清空重置" type="button" onclick="allReset()">
                            </div>
                            <div id="databaseInfo" style="margin-top: 5px; margin-left: 5cm; text-align: left"><!--输出数据库保存成功信息-->
                                <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                   <span style="font-size: 16pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                       <b><?php echo Yii::app()->user->getFlash('databaseSuccess'); ?></b><br>
                                       <b><?php echo Yii::app()->user->getFlash('TRnumberID');?></b><br>
<!--                                       <b><?php // echo Yii::app()->user->getFlash('teamJoinSuccess');?></b><br>
                                       <b><?php // echo Yii::app()->user->getFlash('teamFull');?></b><br>
                                       <b><?php // echo Yii::app()->user->getFlash('TRTeamnumberID');?></b>-->
                                   </span>                                
                                </p>
                            </div>
                            <?php $this->endWidget(); ?>
                        </div>
                        <div class="clear"></div>
                        <div id="showZhuConfigInfo" style="margin-top: 5px; margin-left: 5cm; text-align: left;display: none"><!-- margin-left: 5cm;-->
                            <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                <span style="font-size: 16pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                    <b><?php $Trname = Yii::app()->user->getFlash('TrName'); if($Trname != NULL) echo "实验名称：".$Trname; ?></b><br>
                                    <b><?php $target = Yii::app()->user->getFlash('TrTarget'); if($target != NULL) echo "靶场目标：".$target; ?></b><br>                                                          
                                    <b><?php $TrTask = Yii::app()->user->getFlash('TrTask'); if($TrTask != NULL) echo "靶场".$target."任务：".$TrTask; ?></b><br>
                            </p>
                            <input id="submitBt" value="开始操作" type="button" class="btn btn-default" style="display:none" onclick="submitFirm('<?php echo $numberID;?>','<?php echo $databaseState;?>')">                                                
                                <!--type="reset"-->                            
                        </div>
                        <div class="clear"></div>
                        <div id="congJionSuccess" style="display: none"><!--相关的操作按钮-->                       
                            <input id="submitBt" value="开始操作" type="button" class="btn btn-default"  onclick="submitFirm('<?php $trNumberID = Yii::app()->user->getFlash('TrNumberID'); if($trNumberID != NULL) echo $trNumberID; ?>','<?php echo $databaseState;?>')">             
                        </div>
                    </div> 
                <!--</div>   rightContent注释--> 
            </div>
        </div>
        <div id="push"></div>
    </div>


<script type="text/javascript">
///---------------------------------------------主机有关的JS    BEGIN------------------------------------------------------------------------
/**
 * 展示团队主机配置div
 */
function showTeamZhuDiv(){
    var divType = document.getElementById("divType");
    var divTeamTypeZhu = document.getElementById("divTeamTypeZhu");
    divType.style.display = "";
    divTeamTypeZhu.style.display = "";
}

/**
 * 隐藏团队主机配置div 
 */
function hiddenTeamZhuDiv(){
    var divType = document.getElementById("divType");
    var divTeamTypeZhu = document.getElementById("divTeamTypeZhu");
    divType.style.display = "none";
    divTeamTypeZhu.style.display = "none";
}

/**
 *  保存成功后锁定团队主机配置信息
 */
function lockTeamZhuConfig(){
    var TrTeam_type = document.getElementsByName("TrTeam[team_type]");        
    var trTeamName = document.getElementById("TrTeam_name");
    var zhuSubmitBt = document.getElementById("zhuSubmitBt");//隐藏确定按钮
    var teamZhuResetBt = document.getElementById("teamZhuResetBt");//隐藏清空重置按钮    
    for(i=0;i<TrTeam_type.length;i++){
        TrTeam_type[i].disabled = true;//全部不可选
    }        
    trTeamName.disabled = true;
    zhuSubmitBt.style.display = "none";
    teamZhuResetBt.style.display = "none";
}

/**
 *  多人模式，主机的“确定”按钮
 */
function zhuSubmit(){
    removefun();
    setTrTeamFlagValue();
}

/**
 * 主机提交后页面刷新显示锁定按钮，并选中“多人”
 */
function zhuSubmitTypeFlash(){
    var types = document.getElementsByName("TrTeam[type]");
    types[2].checked = true;  
    for(i=0;i<types.length;i++){
        types[i].disabled = true;   //多人单选按钮设置为锁定   
    }
}

/**
 *  主机提交后页面刷新显示锁定按钮，并选中“主机”
 */
function zhuSubmitZCFlash(){
    var types = document.getElementsByName("TrTeam[team_type]");
    types[1].checked = true;  
    for(i=0;i<types.length;i++){
        types[i].disabled = true;   //team 从机单选按钮设置为锁定   
    }
}

/**
 * 主机重置后页面刷新显示锁定按钮，并选中“多人”
 */
function zhuResetTypeFlash(){
    var types = document.getElementsByName("TrTeam[type]");      
    for(i=0;i<types.length;i++){
        if(i==2){
            types[i].checked = true;
            types[i].disabled = false;//与提交的区别
        }else{
            types[i].disabled = true;   //单人单选按钮设置为锁定   
        }
    }
}

/**
 *  主机重置后页面刷新显示锁定按钮，并选中“主机”
 */
function zhuResetZCFlash(){
    var types = document.getElementsByName("TrTeam[team_type]");
    for(i=0;i<types.length;i++){
        if(i==1){
            types[i].checked = true;
            types[i].disabled = false;//与提交的区别
        }else{
            types[i].disabled = true;   //从机单选按钮设置为锁定   
        }   
    }
}

/*
 * TrTeam多人模式下，主机清空重置按钮清空文本框内容，并锁定“多人”与“主机”单选按钮
 */
function TeamZhuReset(){
    hiddenTeamError();//隐藏主机加入失败的错误信息  yii小物件的错误信息提示
    var databaseTeamInfo = document.getElementById("databaseTeamInfo");
    databaseTeamInfo.style.display = "none";//隐藏主机加入失败的信息  自定义的错误信息提示
    zhuResetTypeFlash();//主机清空重置按钮清空文本框内容，并锁定“多人”与“主机”单选按钮
    zhuResetZCFlash();//主机重置后页面刷新显示锁定按钮，并选中“主机”
    var teamName = document.getElementById("TrTeam_name");
    teamName.disabled = false;//输入团队名称框解除锁定
    teamName.value = "";//并清除内容
    var zhuSubmitBt = document.getElementById("zhuSubmitBt");
    zhuSubmitBt.style.display ="";//显示 "确定"按钮 
    
}
///---------------------------------------------主机有关的JS    END--------------------------------------------------------------------------


///---------------------------------------------从机有关的JS    BEGIN------------------------------------------------------------------------
/**
 * 展示团队从机配置div
 */
function showTeamCongDiv(){
    var divType = document.getElementById("divType");
    var divTeamTypeCong = document.getElementById("divTeamTypeCong");
    divType.style.display = "";
    divTeamTypeCong.style.display = "";
}

/**
 * 隐藏团队从机配置div
 */
function hiddenTeamCongDiv(){
    var divType = document.getElementById("divType");
    var divTeamTypeCong = document.getElementById("divTeamTypeCong");
    divType.style.display = "none";
    divTeamTypeCong.style.display = "none";
}

/**
 * 保存成功后锁定团队从机配置信息
 */
function lockTeamCongConfig(){
    var TrTeam_type = document.getElementsByName("TrTeam[team_type]");    
    var congSubmitBt = document.getElementById("congSubmitBt");//隐藏确定按钮
    var teamCongResetBt = document.getElementById("teamCongResetBt");//隐藏清空重置按钮
    var trTeamNumberID = document.getElementById("TrTeam_numberID");//隐藏输入文本框            
    trTeamNumberID.style.display = "none";//.disabled = true;
    congSubmitBt.style.display = "none";
    teamCongResetBt.style.display = "none";
    for(i=0;i<TrTeam_type.length;i++){
        TrTeam_type[i].disabled = true;//全部不可选
    }
}

/**
 * 从机加入成功显示主机在{{target_range_combat}}的配置信息
 */
function showTrConfigFormInfo(){
    var showDivId = document.getElementById("showZhuConfigInfo");
    showDivId.style.display = "";//显示主机在

}

/**
 *  多人模式，从机的“加入”按钮
 */
function congSubmit(){
    removefun();
    setTrTeamFlagValue();
}

/**
 * 从机提交后页面刷新显示锁定按钮，并选中“多人”
 */
function congSubmitTypeFlash(){
    var types = document.getElementsByName("TrTeam[type]");
    types[2].checked = true;  
    for(i=0;i<types.length;i++){
        types[i].disabled = true;   //多人单选按钮设置为锁定   
    }
}

/**
 *  从机提交后页面刷新显示锁定按钮，并选中“从机”
 */
function congSubmitZCFlash(){
    var types = document.getElementsByName("TrTeam[team_type]");
    types[2].checked = true;  
    for(i=0;i<types.length;i++){
        types[i].disabled = true;   //team 从机单选按钮设置为锁定   
    }
}

/**
 * 从机重置后页面刷新显示锁定按钮，并选中“多人”
 */
function congResetTypeFlash(){
    var types = document.getElementsByName("TrTeam[type]");      
    for(i=0;i<types.length;i++){
        if(i==2){
            types[i].checked = true;
            types[i].disabled = false;//与提交的区别
        }else{
            types[i].disabled = true;   //单人单选按钮设置为锁定   
        }
    }
}

/**
 *  从机重置后页面刷新显示锁定按钮，并选中“从机”
 */
function congResetZCFlash(){
    var types = document.getElementsByName("TrTeam[team_type]");
    for(i=0;i<types.length;i++){
        if(i==2){
            types[i].checked = true;
            types[i].disabled = false;//与提交的区别
        }else{
            types[i].disabled = true;   //主机单选按钮设置为锁定   
        }   
    }
}

/**
 *  TrTeam 多人模式下，从机清空重置按钮清空文本框内容，并锁定“多人”与“从机”单选按钮
 */
function TeamCongReset(){
    hiddenTeamError(); //隐藏错误信息 
    congResetTypeFlash();//锁定“多人”按钮
    congResetZCFlash();//锁定“从机”按钮
    var numberID = document.getElementById("TrTeam_numberID");
    numberID.disabled = false;//输入团队编号框解除锁定
    numberID.value = ""; //并清空内容  
    var congSubmitBt = document.getElementById("congSubmitBt");
    congSubmitBt.style.display = "";//显示 "加入"按钮
    var databaseTeamInfo = document.getElementById("databaseTeamInfo");
    databaseTeamInfo.style.display = "none";//隐藏从机加入失败的信息
}

/**
 * 从机加入成功展示“开始操作”按钮
 */
function ShowCongJionSuccess(){
    var congJionSuccess = document.getElementById("congJionSuccess");
    congJionSuccess.style.display = "";
}
///---------------------------------------------从机有关的JS    END--------------------------------------------------------------------------


///---------------------------------------------Tr_team有关的JS   BEGIN----------------------------------------------------------------------
/**
 * 展示“多人”隐藏信息，将信息同时传递给不显示的元素
 */
function showType(){
    var types = document.getElementsByName("TrTeam[type]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
    var typesHidden = document.getElementsByName("TargetRangeCombat[type]");
    var radioValue = "";
    var i;
    //将所选的值，即为check的值拿出，比较，用户所选
    for(i=0;i<types.length;i++){
        if(types[i].checked == true){
            radioValue = types[i].value;
            typesHidden[i].checked = true;//将信息同时传递给不显示的元素
        }else{
            types[i].disabled = true;   //没有选择的单选按钮设置为锁定       
        }
    }
    //如果是目标值，则对隐藏的内容进行展示
    if(radioValue == '2'){//如果选择的是团队
          setTrTeamFlagValue();
          document.getElementById("divType").style.display = "";//三元运算符---document.getElementById("divType").style.display==''?'none':''
          hiddenOtherConfigForm();//隐藏其余配置信息
    }
    else{//否则对隐藏的内容继续隐藏，如果已经是显示的情况下，则改为隐藏
        document.getElementById("divType").style.display="none";//隐藏
        showOtherConfigForm();//选择的是单人，显示配置信息
    }
}

/**
 * 设置主机下拉菜单任务为“请选择”
 */
function targetZJWidgetReset(){
    var targetZJWidget = document.getElementById("TargetRangeCombat_task_zhuji");//主机下拉菜单   
    var optTargetZJWidget = targetZJWidget.getElementsByTagName("option");//先获得selcet的name，得到所有的option
    optTargetZJWidget[0].selected = true;//将数组中第一个option设置为默认选中
}

/**
 * 设置网站下拉菜单任务为“请选择”
 */
function targetWebWidgetReset(){
    var targetWebWidget = document.getElementById("TargetRangeCombat_task_web");//网站下拉菜单 
    var optargetWebWidget = targetWebWidget.getElementsByTagName("option");//先获得selcet的name，得到所有的option
    optargetWebWidget[0].selected = true;//将数组中第一个option设置为默认选中
}

/**
 * 设置手机下拉菜单任务为“请选择”
 */
function targetPhoneWidgetReset(){
    var targetPhoneWidget = document.getElementById("TargetRangeCombat_task_phone");//手机下拉菜单 
    var optTargetPhoneWidget = targetPhoneWidget.getElementsByTagName("option");//先获得selcet的name，得到所有的option
    optTargetPhoneWidget[0].selected = true;//将数组中第一个option设置为默认选中
}

/**
 * 展示“多人--主机从机”隐藏信息
 */
function showTeamType(){
    var teamTypes = document.getElementsByName("TrTeam[team_type]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
    var radioValue = "";
    var i;
    //将所选的值，即为check的值拿出，比较，用户所选
    for(i=0;i<teamTypes.length;i++){
        if(teamTypes[i].checked == true){
            radioValue = teamTypes[i].value;  
            break;
        }else{
            continue;
        }
    }
    //先全部隐藏不展示
    document.getElementById("divTeamTypeZhu").style.display="none";
    document.getElementById("divTeamTypeCong").style.display="none";
     //如果是目标值，则对隐藏的内容进行展示
    if(radioValue == '1'){
        document.getElementById("divTeamTypeZhu").style.display = document.getElementById("divTeamTypeZhu").style.display==''?'none':'';//三元运算符
    }
    else if(radioValue =='2'){
        document.getElementById("divTeamTypeCong").style.display=document.getElementById("divTeamTypeCong").style.display==''?'none':'';//隐藏
    }
}

/**
 * {{tr_team}}数据库保存成功页面刷新自动调用函数
 */
function trTeamSaveState(){
    var teamTemp = "<?php echo $teamSuccessFlag;?>";//主机创建团队成功
    var teamJionTemp = "<?php echo $teamJoinSuccessFlag;?>";//从机加入团队成功
    if(teamTemp == "success"){
        showTeamZhuDiv();
        showOtherConfigForm();
        lockTeamZhuConfig();
        teamTypeValueToTr();
    }else if(teamTemp == "failed"){
        zhuSubmitTypeFlash();
        showTeamZhuDiv();
        zhuSubmitZCFlash();
        document.getElementById("TrTeam_name").disabled = true;//输入团队名称框锁定
        document.getElementById("zhuSubmitBt").style.display ="none";//主机“确定”按钮消失
        document.getElementById("databaseTeamInfo").style.display =""; //显示错误
    }else{       
    }
    if(teamJionTemp == "jionSuccess"){        
        congSubmitTypeFlash();
        showTeamCongDiv();
        congSubmitZCFlash();
        lockTeamCongConfig(); 
        showTrConfigFormInfo();//显示主机的配置信息     
        ShowCongJionSuccess();//显示“开始操作按钮”进行操作       
    }else if(teamJionTemp == "jionFailed"){      
        congSubmitTypeFlash();
        showTeamError();//yii小物件rules()中验证错误
        showTeamCongDiv();
        congSubmitZCFlash();
        document.getElementById("TrTeam_numberID").disabled = true;//输入团队编号框锁定
        document.getElementById("congSubmitBt").style.display ="none";//从机“加入”按钮重置
        document.getElementById("databaseTeamInfo").style.display =""; //显示错误       
    }else{
    }
}

/**
 * trTeam_type 模式选择 错误信息展示
 */
function showTeamTypeError(){
    //获取在TargetRange里面的type错误信息，并赋值给Team中。值在<div>***</div>中
    document.getElementById("TrTeam_type_em_").innerHTML = document.getElementById("TargetRangeCombat_type_em_").innerHTML;
    document.getElementById("TrTeam_type_em_").style.display = "";//不隐藏，显示

}

/**
 * TrTeam 有关错误信息隐藏
 */
function showTeamError(){
    document.getElementById("TrTeam_name_em_").style.display = "";
    document.getElementById("TrTeam_numberID_em_").style.display = "";
    document.getElementById("TrTeam_team_type_em_").style.display = "";
}

/**
 * TrTeam 有关错误信息隐藏
 */
function hiddenTeamError(){
    document.getElementById("TrTeam_name_em_").style.display = "none";
    document.getElementById("TrTeam_numberID_em_").style.display = "none";
    document.getElementById("TrTeam_team_type_em_").style.display = "none";
}
///---------------------------------------------Tr_team有关的JS   END----------------------------------------------------------------------

///---------------------------------------------Target_range_combat有关的JS    BEGIN------------------------------------------------------------------------
/**
 * 显示Target_range_combat配置信息
 */
function showOtherConfigForm(){
    var otherConfigForm = document.getElementById("otherConfigForm");
    otherConfigForm.style.display = "";//
}

/**
 * 隐藏Target_range_combat配置信息
 */
function hiddenOtherConfigForm(){
    var otherConfigForm = document.getElementById("otherConfigForm");
    otherConfigForm.style.display = "none";//
}

/**
 * 展示“目标--主机，网站，手机”隐藏信息
 */
function showTarget(){
    var targets = document.getElementsByName("TargetRangeCombat[target]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
    var radioValue = "";
    var i;
    //将所选的值，即为check的值拿出，比较，用户所选
    for(i=0;i<targets.length;i++){
        if(targets[i].checked == true){
            radioValue = targets[i].value;  
            break;
        }else{
            continue;
        }
    }
    //先全部隐藏不展示
    document.getElementById("divTargetZhuJi").style.display="none";
    document.getElementById("divTargetWeb").style.display="none";
    document.getElementById("divTargetPhone").style.display="none";
    //如果是目标值，则对隐藏的内容进行展示
    if(radioValue == '1'){
        document.getElementById("divTargetZhuJi").style.display=document.getElementById("divTargetZhuJi").style.display==''?'none':'';//三元运算符
        targetWebWidgetReset()//将“下拉菜单--默认选择”设为“请选择”   网站
        targetPhoneWidgetReset();//将“下拉菜单--默认选择”设为“请选择”  手机
    }
    else if(radioValue =='2'){
        document.getElementById("divTargetWeb").style.display=document.getElementById("divTargetWeb").style.display==''?'none':'';//隐藏
        targetZJWidgetReset();//将“下拉菜单--默认选择”设为“请选择”  主机
        targetPhoneWidgetReset();//将“下拉菜单--默认选择”设为“请选择”  手机
    }
    else if(radioValue =='3'){//否则对隐藏的内容继续隐藏，如果已经是显示的情况下，则改为隐藏
        document.getElementById("divTargetPhone").style.display=document.getElementById("divTargetPhone").style.display==''?'none':'';//隐藏
        targetZJWidgetReset();//将“下拉菜单--默认选择”设为“请选择”  主机
        targetWebWidgetReset()//将“下拉菜单--默认选择”设为“请选择”  网站
    }
}

/**
 * TrForm save保存按钮函数
 */
function TrFormSave(){
    removefun();
    teamTypeValueToTr();//保存时将多人的单选按钮值赋值从 team传递给target_range_combat
    setTrTeamFlagValue();
}

/**
 * {{target_range_combat}}数据库保存成功页面刷新自动调用函数
 */
function trSaveState(){
    var temp = "<?php echo $databaseState;?>";//获取数据是否保存成功，true为保存或者更新数据库成功，false为失败
    if(temp == "success"){//如果成功在刷新页面时设置所有元素不可读，和相关按钮隐藏显示以及设置与数据库交互信息trChangeFlag=true        
        allDisabled();//所有元素不可读
        showOtherConfigForm();
        var changeBt = document.getElementById("changeBt");
        var submitBt = document.getElementById("submitBt");
        var trChangeFlag = document.getElementById("TargetRangeCombat_trChangeFlag");
        var resetBt = document.getElementById("resetBt");      
        var saveBt = document.getElementById("saveBt");
        saveBt.style.display = "none";//隐藏保存按钮
        changeBt.style.display = "";//显示修改按钮
        submitBt.style.display = "";//显示提交按钮
        resetBt.style.display = "none";//隐藏重置按钮
        trChangeFlag.value = true;//标志信息,隐藏域与controller进行交互，如果第一次保存值为false，如果是修改后再保存（第2,3,4,5....次保存）则值为true，
    }
    else if(temp == "failed"){//如果失败，显示隐藏的div 与其中的错误信息
        errorsShow();//显示错误信息
        showOtherConfigForm();
        showTeamTypeError();
        trTypeValueToTeam();//多人的单选按钮值赋值  target_range_combat---->team       
    }else{
        var typeRadioTrWidget = document.getElementsByName("TargetRangeCombat[type]");//得到与数据库交互的单选按钮--Tr--模式选择
        var typeTeamradioWidget = document.getElementsByName("TrTeam[type]");//得到与数据库交互的单选按钮--Team--模式选择
        for(i=0;i<typeTeamradioWidget.length;i++){
            if(typeTeamradioWidget[i].checked == true){
                typeRadioTrWidget[i].checked = true;//将信息同时传递给不显示的元素
                if(i==1){
                    showOtherConfigForm();
                    showTeamTypeError();//靶场模式选择 错误信息展示
                }else if(i==2){
                    showTeamError();//靶场team 错误信息展示
                }
            }else{
            }
            //typeRadioTrWidget[i].checked = false;//type 靶场类型单选按钮重置 隐藏            
        } 
    }
}

/**
 * {{target_range_combat}}  form表单 设置所有元素不可读
 * @author 徐婧
 * @since 2017-01-16
 */
function allDisabled(){
    var nameTextWidget =document.getElementById("TargetRangeCombat_name");
    var typeRadioTrWidget = document.getElementsByName("TargetRangeCombat[type]");//得到与数据库交互的单选按钮--TR--模式选择
    var typeRadioTeamWidget = document.getElementsByName("TrTeam[type]");//得到与数据库交互的单选按钮--Team--模式选择
    var targetRadioWidget = document.getElementsByName("TargetRangeCombat[target]");//得到与数据库交互的单选按钮--目标选择
    //文本框的值为不可读
    nameTextWidget.disabled = true;//不可读，不可写    //.readOnly = true;只可读，不可写
    //将所选的值，即为check的值拿出，比较，用户所选
    for(i=0;i<typeRadioTrWidget.length;i++){
        typeRadioTrWidget[i].disabled = true;
    }
    for(i=0;i<typeRadioTeamWidget.length;i++){
        typeRadioTeamWidget[i].checked = typeRadioTrWidget[i].checked;
        typeRadioTeamWidget[i].disabled = true;//页面刷新后选择的内容会消失，所以需要用隐藏的内容来传递值
    }
    for(i=0;i<targetRadioWidget.length;i++){
        targetRadioWidget[i].disabled = true;
    }
}

/**
 * {{target_range_combat}}  form表单 设置所有元素可读
 */
function allAbled(){
    var nameTextWidget =document.getElementById("TargetRangeCombat_name");
    var typeRadioTrWidget = document.getElementsByName("TargetRangeCombat[type]");//得到与数据库交互的单选按钮--Tr--模式选择
    var typeRadioTeamWidget = document.getElementsByName("TrTeam[type]");//得到与数据库交互的单选按钮--Team--模式选择
    var targetRadioWidget = document.getElementsByName("TargetRangeCombat[target]");//得到与数据库交互的单选按钮--目标选择
    //文本框的值为不可读
    nameTextWidget.disabled = false;//不可读，不可写     //.readOnly = true;只可读，不可写
    //将所选的值，即为check的值拿出，比较，用户所选
    for(i=0;i<typeRadioTrWidget.length;i++){
        typeRadioTrWidget[i].disabled = false;
    }
    for(i=0;i<typeRadioTeamWidget.length;i++){
        typeRadioTeamWidget[i].checked = typeRadioTrWidget[i].checked;//页面刷新后选择的内容会消失，所以需要用隐藏的内容来传递值
        typeRadioTeamWidget[i].disabled = true;//不允许 单选按钮--Tr--模式选择  配置更改
    }
    for(i=0;i<targetRadioWidget.length;i++){
        targetRadioWidget[i].disabled = false;
    }
}

/**
 * {{target_range_combat}}  form表单 错误信息隐藏
 */
function errorsHidden(){
    document.getElementById("TrTeam_type_em_").style.display = "none";
    document.getElementById("TargetRangeCombat_name_em_").style.display = "none";
    document.getElementById("TargetRangeCombat_target_em_").style.display = "none";
    document.getElementById("TargetRangeCombat_task_zhuji_em_").style.display = "none";
    document.getElementById("TargetRangeCombat_task_web_em_").style.display = "none";
    document.getElementById("TargetRangeCombat_task_phone_em_").style.display = "none";

}

/**
 * {{target_range_combat}}  form表单 错误信息显示
 */
function errorsShow(){
    document.getElementById("TrTeam_type_em_").style.display = "";
    document.getElementById("TargetRangeCombat_name_em_").style.display = "";
    document.getElementById("TargetRangeCombat_target_em_").style.display = "";
    document.getElementById("TargetRangeCombat_task_zhuji_em_").style.display = "";
    document.getElementById("TargetRangeCombat_task_web_em_").style.display = "";
    document.getElementById("TargetRangeCombat_task_phone_em_").style.display = "";
}

/**
 * {{target_range_combat}}  form表单重置按钮函数
 */
function allReset(){
    errorsHidden();//错误信息隐藏
    //获取页面form表单所有的填写元素
    var nameTextWidget = document.getElementById("TargetRangeCombat_name");
    var targetRadioWidget = document.getElementsByName("TargetRangeCombat[target]");//得到与数据库交互的单选按钮--目标选择    
    //将文本框内容清空
    nameTextWidget.value="";//文本框的值清空
    //将所有按钮值设为未选中
    for(i=0;i<targetRadioWidget.length;i++){
        targetRadioWidget[i].checked = false;//target 目标单选按钮重置
    }
    //将所有的“下拉菜单--默认选择”设为“请选择”
    targetZJWidgetReset();//主机
    targetWebWidgetReset();//网站
    targetPhoneWidgetReset();//手机
    //将“主机、网站、手机”下拉菜单隐藏不展示
    document.getElementById("divTargetZhuJi").style.display="none";
    document.getElementById("divTargetWeb").style.display="none";
    document.getElementById("divTargetPhone").style.display="none";
}

/**
 * {{target_range_combat}}  form表单 修改配置按钮函数
 */
function changeForm(){
    allAbled();
    /*隐藏保存成功信息与实验编号*/
    var hiddenDatabaseInfo = document.getElementById("databaseInfo");
    var hiddenChangeBt = document.getElementById("changeBt");
    var showResetBt = document.getElementById("resetBt");      
    var saveBt = document.getElementById("saveBt");
    var submitBt = document.getElementById("submitBt");
    saveBt.style.display = "";//显示保存按钮
    hiddenDatabaseInfo.style.display = "none";//隐藏“保存成功与实验编号”信息    
    hiddenChangeBt.style.display = "none";//隐藏修改按钮
    showResetBt.style.display = "";//显示重置按钮
    submitBt.style.display = "none";//隐藏提交按钮
    removefun();//删除或（卸载）window.onbeforeunload事件
}     

/**
 * {{target_range_combat}}  form表单 提交按钮点击函数
 */
function submitFirm(name,state){
    if(state){//获取数据是否保存成功，true为保存或者更新数据库成功，false为失败
        removefun();//删除或（卸载）window.onbeforeunload事件
        if (confirm("完成配置，实验编号为："+name+"，开始靶场操作？")) {                 
                var addr ='<?php echo SITE_URL;?>/index.php?r=targetRange/operationLayout';//跳转地址，根据用户的选择出现不同的界面？
                window.location.href=addr;
        }
    }else{
        confirm("请先保存配置");
    }     
}
///---------------------------------------------Target_range_combat有关的JS    END--------------------------------------------------------------------------

///--------------------------------------------------------全局调用   BEGIN---------------------------------------------------------
/**
 * 页面加载时调用
 */
window.onload=function(){ 
    saveSuccess();//页面加载时调用
}

/**
 * 数据库保存、失败或者没有保存等页面刷新自动调用函数
 */
function saveSuccess(){
    trTeamSaveState();  
    trSaveState();
}

/**
 * 对隐藏域中的元素进行赋值，现设置$_POST['TrTeam']['trTeamFlag'] = true
 */
function setTrTeamFlagValue(){
    var trTeamFlag = document.getElementById("TrTeam_trTeamFlag");
    trTeamFlag.value = true;//如果选择多人，即团队，则置团队标志值为 真true
}

/**
 * 多人的单选按钮值赋值  team---->target_range_combat
 */
function teamTypeValueToTr(){
    var types = document.getElementsByName("TrTeam[type]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
    var typesHidden = document.getElementsByName("TargetRangeCombat[type]");
    var i;
    //将所选的值，即为check的值拿出，比较，用户所选
    for(i=0;i<types.length;i++){
        if(types[i].checked == true){
            typesHidden[i].disabled = false;
            typesHidden[i].checked = true;//将信息同时传递给不显示的元素
        }else{                
        }
        types[i].disabled = true;   //team 单选按钮设置为锁定   
    }
}

/**
 * 多人的单选按钮值赋值  target_range_combattarget_range_combat---->team
 */
function trTypeValueToTeam(){
    var typesHidden = document.getElementsByName("TrTeam[type]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
    var types = document.getElementsByName("TargetRangeCombat[type]");
    var i;
    //将所选的值，即为check的值拿出，比较，用户所选
    for(i=0;i<types.length;i++){
        if(types[i].checked == true){
            typesHidden[i].disabled = false;
            typesHidden[i].checked = true;//将信息同时传递给不显示的元素
        }else{
        }
        typesHidden[i].disabled = true;   //team 单选按钮设置全部设为锁定   
    }
}

/**
 * 帮助按钮点击弹窗函数
 */
function openwin() {
    window.open ("<?php echo SITE_URL;?>/index.php?r=targetRange/rulesHelp", 
    "newwindow", 
    "height=700, width=1000, toolbar =no, menubar=no, scrollbars=yes, resizable=no, location=no, status=no,left =200 ,top = 50'") //写成一行
}

/**
 * 使用 addEventListener() 方法向 body 元素添加 "onbeforeunload" 事件
 */
//window.addEventListener("beforeunload", function(event) {
//    event.returnValue = "test";//
//});

/**
 * 使用 HTML DOM 向 body 元素添加 "onbeforeunload" 事件
 * @returns {String}
 */
window.onbeforeunload = onbeforeunload_handler;
function onbeforeunload_handler(){
    var warning="注意，确认关闭将导致填写数据丢失";   
    return warning;   
}

/**
 * 删除或（卸载）window.onbeforeunload事件
 */
function removefun()
{
    window.onbeforeunload = null;
}
//-----------------------------------------------------------全局调用   END-----------------------------------------------------------
</script>