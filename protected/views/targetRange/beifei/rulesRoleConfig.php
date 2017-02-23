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
                        <h3>靶场规则制定</h3>
                    </div>                    
                    <div class="clear"></div>
                     
                    <form>
                    <div>
                        <label class="checkbox-inline">
                            <h3>靶场模式选择</h3>
                        </label>                        
                        <label class="checkbox-inline">
                                <input type="radio" name="model" id="model" value="单人"> 单人
                        </label>
                        <label class="checkbox-inline">
                                <input type="radio" name="model" id="model"  value="多人"> 多人
                        </label>               
                        <!--name 值相同表示为同一组按钮，值可以选择一个-->
                    </div> 
                    <div class="clear"></div>
                    <div>
                        <label class="checkbox-inline">
                            <h3>靶场角色选择</h3>
                        </label>
                        <label class="checkbox-inline">
                                <input type="radio" name="role" id="role" value="攻击者"> 攻击者
                        </label>
                        <label class="checkbox-inline">
                                <input type="radio" name="role" id="role"  value="防御者"> 防御者
                        </label>                                        
                    </div> 
                    <div>
                        <label class="checkbox-inline">
                            <h3>靶场目标选择</h3>
                        </label>
                        <label class="checkbox-inline">
                                <input type="radio" name="target" id="role" value="主机"> 主机
                        </label>
                        <label class="checkbox-inline">
                                <input type="radio" name="target" id="role"  value="网站"> 网站
                        </label> 
                         <label class="checkbox-inline">
                                <input type="radio" name="target" id="role"  value="手机"> 手机
                        </label> 
                    </div>
                    <input type="button" class="btn btn-default"  onClick="checks()" value="下一步">
                    <input type="reset"  class="btn btn-default"  value="重置">
                    <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/rulesHelp" class="btn btn-default" role="button">帮助</a>
                    </form>
<script type="text/javascript">
    function checks()
    {
        var roles=document.getElementsByName("role");
        var models=document.getElementsByName("model");
        var targets = document.getElementsByName('target');
        var roleValue = "";
        var modelValue = "";
        var targetValue ="";
        var j,i,k;        
        for(i=0;i<models.length;i++)
        {           
            if(models[i].checked == true)
            {
                modelValue = models[i].value;
                break;
            }else{
                continue;
            }            
        }
        for(j=0;j<roles.length;j++){
            if(roles[j].checked == true){
                roleValue = roles[j].value;  
                break;
            }else{
                continue;
            }
        }
        for(k=0;k<targets.length;k++){
            if(targets[k].checked == true){
                targetValue = targets[k].value;  
                break;
            }else{
                continue;
            }
        }
        if(i >= models.length && j >= roles.length && k>=targets.length){
            alert("你还没有选择!");
            return false;
        }
        else if(i >= models.length || j >= roles.length || k>=targets.length){
            alert("你还没有选择完整!");
            return false;
        }                 
        else{
            if(confirm("你选择的模式是："+ modelValue  +"\n你选择的角色是："+ roleValue +"\n你选择的目标是：" + targetValue)){                
                var addr ='<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/detailInfo';//跳转地址，根据用户的选择出现不同的界面？
                window.location.href=addr;
            }
        }  
    }
</script>                    
                </div>                
            </div>           
        </div>
    </div>
    <div id="push"></div>
</div>