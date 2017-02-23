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
                        <!--实战命名-->
                        <p>
                            <?php echo $form->labelEx($trModel,'name'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                            <?php echo $form->textField($trModel,'name'); ?>
                            <b style="color: red"><?php echo $form ->error($trModel,'name'); ?></b>
                        </p>
                        <!--靶场模式选择，如果是多人，显示隐藏-->
                        <p>
                            <?php echo $form->labelEx($trModel,'type'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                            <!--在数据库表结构中，将type默认设置为1或2 ，页面显示是就会有默认选中-->
                            <?php echo $form->radioButtonList($trModel,'type',$type,array('separator'=>'&nbsp;','onclick'=>'showType()')); ?>
                            <!--不要随意改动小物件的name或者id,如果需要使用，则用原生的，否则Yii自带的JS无法显示-->
                            <b style="color: red"><?php echo $form ->error($trModel,'type'); ?></b>                            
                        </p>
                        <div id="divType" style="float:left;border:10px;width:100%;display: none;">
                            <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                               <span style="font-size: 14pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                   <b>多人队伍信息选择--图片按钮</b>
                               </span>                                
                            </p>
                            <!--主从选择-->
                            <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                <?php echo $form->labelEx($trModel,'team_type'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                                <?php echo $form->radioButtonList($trModel,'team_type',$teamType,array('separator'=>'&nbsp;','onclick'=>'showTeamType()')); ?>
                                
                            </p>
                            <!--主机相关配置-->
                            <div id="divTeamTypeZhu" style="float:left;border:10px;width:100%;display: none;">
                                <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                    <span style="font-size: 14pt; color: orange; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                        <b>主机相关配置</b>
                                    </span>                                
                                 </p>
                            </div>
                            <!--从机相关配置-->
                            <div id="divTeamTypeCong" style="float:left;border:10px;width:100%;display: none;">
                                <p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
                                    <span style="font-size: 14pt; color: orange; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                        <b>从机相关配置</b>
                                    </span>                                
                                 </p>
                            </div>
                        </div>
                        <b style="color: red"><?php echo $form ->error($trModel,'team_type'); ?></b>
                        <!--靶场目标选择-->
                        <p>
                            <?php echo $form->labelEx($trModel,'target'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
                            <?php echo $form->radioButtonList($trModel,'target',$target,array('separator'=>'&nbsp;','onclick'=>'showTarget()')); ?>
                            <b style="color: red"><?php echo $form ->error($trModel,'target'); ?></b>
                        </p>  
                        <!--应该根据选择的不同目标靶机，显示不同的类型的任务。-->
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
                        <b style="color: red"><?php echo $form ->error($trModel,'task_zhuji'); ?></b>
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
                        <b style="color: red"><?php echo $form ->error($trModel,'task_web'); ?></b>
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
                        <b style="color: red"><?php echo $form ->error($trModel,'task_phone'); ?></b>
                        
                        
                        <div>
                        <?php echo Yii::app()->user->getFlash('success'); ?> 
                        </div>
                  



                        <input name="Submit" value="保存配置" class="btn btn-default" type="submit">                        
                        <input value="提交配置" type="button" class="btn btn-default" onclick="submitFirm('<?php echo $numberID;?>','<?php echo $state;?>')">                                                
                        <input type="reset"  class="btn btn-default"  value="重置" onclick="reset()">
                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRange/rulesHelp" class="btn btn-default" role="button">帮助</a>
                        <?php $this->endWidget(); ?>
                    </div> 
                <!--</div>   rightContent注释--> 
            </div>
        </div>
        <div id="push"></div>
    </div>
<script type="text/javascript">
function showType(){
    var types = document.getElementsByName("TargetRangeCombat[type]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
    var radioValue = "";
    var i;
    //将所选的值，即为check的值拿出，比较，用户所选
    for(i=0;i<types.length;i++){
        if(types[i].checked == true){
            radioValue = types[i].value;  
            break;
        }else{
            continue;
        }
    }
    //如果是目标值，则对隐藏的内容进行展示
    if(radioValue == '2'){
          document.getElementById("divType").style.display=document.getElementById("divType").style.display==''?'none':'';//三元运算符
    }
    else{//否则对隐藏的内容继续隐藏，如果已经是显示的情况下，则改为隐藏
        document.getElementById("divType").style.display="none";//隐藏
    }
}

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
    }
    else if(radioValue =='2'){
        document.getElementById("divTargetWeb").style.display=document.getElementById("divTargetWeb").style.display==''?'none':'';//隐藏
    }
    else if(radioValue =='3'){//否则对隐藏的内容继续隐藏，如果已经是显示的情况下，则改为隐藏
        document.getElementById("divTargetPhone").style.display=document.getElementById("divTargetPhone").style.display==''?'none':'';//隐藏
    }
}

function showTeamType(){
    var teamTypes = document.getElementsByName("TargetRangeCombat[team_type]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
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
        document.getElementById("divTeamTypeZhu").style.display=document.getElementById("divTeamTypeZhu").style.display==''?'none':'';//三元运算符
    }
    else if(radioValue =='2'){
        document.getElementById("divTeamTypeCong").style.display=document.getElementById("divTeamTypeCong").style.display==''?'none':'';//隐藏
    }
}

function reset(){
    document.getElementById("yw0").reset();  
}

function submitFirm(name,state){
    if(state){
        //利用对话框返回的值 （true 或者 false）  
        if (confirm("完成配置，实验编号为："+name+"，开始靶场操作？")) {
                var addr ='<?php echo SITE_URL;?>/index.php?r=targetRange/operationLayout';//跳转地址，根据用户的选择出现不同的界面？
                window.location.href=addr;
        }
    }else{
        confirm("请先保存配置");
    }
     
}
</script>