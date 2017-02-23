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
                            <h2>靶场教师作业配置</h2>
                        </div>                    
                        <div class="clear"></div>


                        

                        <input name="Submit" value="完成配置" class="btn btn-default" type="submit" onclick="submitFirm()">                        
                        <input type="reset"  class="btn btn-default"  value="重置" onclick="reset()">
                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRange/homeworkHelp" class="btn btn-default" role="button">帮助</a>
                    </div> 
                <!--</div>   rightContent注释--> 
            </div>
        </div>
        <div id="push"></div>
    </div>
<script type="text/javascript">
function showType(){
    var types = document.getElementsByName("TargetRange[type]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
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
    var targets = document.getElementsByName("TargetRange[target]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
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
    var teamTypes = document.getElementsByName("TargetRange[team_type]");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
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

function submitFirm(){
    //利用对话框返回的值 （true 或者 false）  
    if (confirm("完成配置，开始靶场操作？")) {        
    } 
}
</script>