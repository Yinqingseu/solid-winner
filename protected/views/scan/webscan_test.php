
<div id=" bread">
    <ol class="breadcrumb">
       <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
       <li><a href="<?php echo SITE_URL?>/index.php?r=scan/typechoose">漏洞扫描</a></li>
       <li><a href="<?php echo SITE_URL?>/index.php?r=scan/webscan">自主扫描</a></li>
       <li class="active">网站扫描</li>
    </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
            <div id="newsShow">
                <div id="newsTitle" class="breadcrumb">
                    <h3>网站扫描内容配置</h3>
                </div>
                <div class="clear"></div>
                <div id="newsContent">
                <p align="center"  style="margin: 0cm 0cm 0pt; text-align: center">
                <?php $form = $this -> beginWidget('CActiveForm',  array( 'enableClientValidation'=>true, 'clientOptions'=>array(  'validateOnSubmit'=>true,   ),  )   );    ?>
                <div id="div2">
                    <p> <!-- 扫描ID号-->
                        <?php echo $form->label($web_config,'scan_id'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->textField($web_config,'scan_id',array('id'=>'scan_id','style'=>'color:blue;border:0px;background-color:transparent;')); ?>
                    <!-- 扫描模式-->
                        <br /><?php echo $form->label($web_config,'model'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->textField($web_config,'model',array('id'=>'model','style'=>'color:blue;border:0px;background-color:transparent;')); ?>
                   <!-- 扫描用户-->
                         <br /><?php echo $form->label($web_config,'creator'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->textField($web_config,'creator',array('id'=>'creator','style'=>'color:blue;border:0px;background-color:transparent;')); ?>
                    <!-- 扫描命名-->   
                         <br /><?php echo $form->label($web_config,'scan_name'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                         <?php echo $form->textField($web_config,'scan_name'); ?>
                         <?php echo $form ->error($web_config,'scan_name'); ?>
                        <!-- 扫描url设置-->
                        <?php echo $form->label($web_config,'scan_url'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $form->urlField($web_config,'scan_url'); ?>（输入URL）
                         <?php echo $form -> error($web_config,'scan_url'); ?> <br />
                     <!-- 扫描工具选择--> 
                         <?php echo $form->label($web_config,'choice'); ?><strong>:</strong>&nbsp;&nbsp;
                        <?php echo $form->radioButtonList($web_config,'choice',$choice,array('separator'=>'&nbsp;&nbsp;','onclick'=>'show()')); ?>
                    </p>
                    <div id="hidden1" style="display: none;">
                        <p><!--扫描网站漏洞种类-->
                            <?php echo $form->label($web_config,'scan_holelist'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $form->checkBoxList($web_config,'scan_holelist',$hole,array('separator'=>'&nbsp;&nbsp;')); ?>
                            <br /><font color="blue">(目前可扫描检测出的漏洞种类有：SQL注入漏洞，XSS漏洞。)</font>
                        </p>
                        <p><!-- 扫描深度设置-->
                            <?php echo $form->label($web_config,'scan_depth'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $form-> dropDownList($web_config,'scan_depth',$depth); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- 扫描线程数设置-->
                            <?php echo $form->label($web_config,'numofthreads'); ?><strong>:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $form->dropDownList($web_config,'numofthreads',$threads); ?>
                        </p>
                        <p align="center">
                            <input  value="开始扫描" style="width: 100px;height: 40px;"class="btn btn-default"  type="submit"/>
                        </p> 
                    </div>
                    <div id="hidden2" style="display: none;">
                         <p>
                            <?php echo $form->label($web_config,'tool'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $form->radioButtonList($web_config,'tool',$tool,array('separator'=>'&nbsp;&nbsp;')); ?>
                            <br /><b>扫描工具功能简介:</b>
                            <br /><font color="red">OpenVAS功能：</font>暴力攻击，扫描缓存溢出漏洞，扫描SNMP漏洞，扫描端口漏洞。。。
                            <br /><font color="red">Nessus功能：</font>持身份验证和未身份验证的扫描，包括网络漏洞扫描，内部和外部PCI扫描，恶意软件扫描，移动设备扫描，政策合规性审计，Web应用程序的测试，补丁审核等
                         </p> 
                         <p align="center">
                             <input  value="开始扫描" style="width: 100px;height: 40px;"class="btn btn-default" role="button" type="submit" /></p>
                    </div>
                    <div id="hidden3" style="display: none;">
                         <p>
                             <?php echo $form->label($web_config,'selfcheck'); ?><strong>:</strong>&nbsp;&nbsp;
                            <?php echo $form->checkBoxList($web_config,'selfcheck',$selfcheck,array('id'=>'selfcheck','separator'=>'&nbsp;&nbsp;')); ?>
                         </p> 
                         <p align="center">
                             <input  value="开始扫描" style="width: 100px;height: 40px;"class="btn btn-default" role="button" type="submit" /></p>
                    </div>
                    <h3>扫描工具功能简介： </h2>
                            <p>
                                <font color="red">平台漏洞扫描工具：</font>
                                <br />目前可扫描检测出的漏洞种类有：<font color="blue">SQL注入漏洞，XSS漏洞</font>。</p>
                             <p>
                                <font color="red">第三方漏洞扫描工具扫描工具包括以下两种:</font>
                                <br /><font color="blue">OpenVAS功能：</font>暴力攻击，扫描缓存溢出漏洞，扫描SNMP漏洞，扫描端口漏洞。。。
                                <br /><font color="blue">Nessus功能：</font>持身份验证和未身份验证的扫描，包括网络漏洞扫描，内部和外部PCI扫描，恶意软件扫描，移动设备扫描，政策合规性审计，Web应用程序的测试，补丁审核等
                             </p> 
                             <p>
                                <font color="red">手动进行漏洞验证的方式主要包括以下两种:</font>
                                <br /><font color="blue">控制台：</font>通过控制台，用户可自己输入一些命令，主动探测漏洞。
                                <br /><font color="blue">脚本：</font>用户可编写一定功能的脚本，探测漏洞。
                             </p> 
                    </div>
                    <?php $form = $this -> endWidget();?>
                </p>
                </div>
            </div>
            </div>
        <div class="clear"></div>   
    </div>
<script>
    window.onbeforeunload = function(event) {
        event.returnValue = "...";
    };
</script>
</div>
<script type="text/javascript">  
function show(){  
    var choice = document.getElementsByName("WebConfig[choice]");
    var radioValue = "";  
    var i;  
    //将所选的值，即为check的值拿出，比较，用户所选  
    for(i=0;i<choice.length;i++){  
        if(choice[i].checked == true){  
            radioValue = choice[i].value;    
            break;  
        }else{  
            continue;  
        }  
    } 
    document.getElementById("hidden1").style.display="none"; //此元素不会被显示
    document.getElementById("hidden2").style.display="none";
    document.getElementById("hidden3").style.display="none";
    switch(radioValue){
        case '1':
            //显示1，
            document.getElementById("hidden1").style.display=document.getElementById("hidden1").style.display==''?'none':'';//三元运算符 
            break;
        case '2':
            //显示2，
            document.getElementById("hidden2").style.display=document.getElementById("hidden2").style.display==''?'none':'';//三元运算符
            break;
        case '3':
            //显示3，
            document.getElementById("hidden3").style.display=document.getElementById("hidden3").style.display==''?'none':'';//三元运算符  
            break;
    } 
}  
</script>
<script type="text/javascript">
	day = new Date();
	id = day.getTime(); //该方法返回距1970.1.1之间的毫秒数，因此每一毫秒唯一，作为训练号
        document.getElementById('scan_id').value =Number(id); 
        //将生成的训练号赋值给目标文本框
        document.getElementById('scan_id').readOnly = true;
        document.getElementById('model').value = '自主扫描'; 
        document.getElementById('model').readOnly = true;
        document.getElementById('creator').value = '<?php  echo Yii::app()->user->name;?>';
</script>



       

          
            
        
