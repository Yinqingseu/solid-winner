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
                    <form>
                    <div>
                        <label class="checkbox-inline">
                            <h3>攻防模式选择</h3>
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
                            <h3>攻防角色选择</h3>
                        </label>
                        <label class="checkbox-inline">
                                <input type="radio" name="role" id="role" value="攻击者"> 攻击者
                        </label>
                        <label class="checkbox-inline">
                                <input type="radio" name="role" id="role"  value="防御者"> 防御者
                        </label>                                        
                    </div> 
                    <input type="button" class="btn btn-default"  onClick="checks()" value="下一步">
                    <input type="reset"  class="btn btn-default"  value="重置">
                    <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/configHelp" class="btn btn-default" role="button">帮助</a>
                    </form>
<script type="text/javascript">
    function checks()
    {
        var roles=document.getElementsByName("role");
        var models=document.getElementsByName("model");
        var roleValue = "";
        var modelValue = "";
        var j,i;
        for(j=0;j<roles.length;j++){
            if(roles[j].checked == true){
                roleValue = roles[j].value;  
                break;
            }else{
                continue;
            }
        }
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
        if(i >= models.length&&j >= roles.length){
            alert("你还没有选择！");
            return false;
        }
        else if(i >= models.length){
            alert("你还没有选择 模式！");
            return false;
        }
        else if(j >= roles.length){
            alert("你还没有选择 角色！");
            return false;
        }
        else{
            if(confirm("你选择的模式是："+ modelValue  +"\n你选择的角色是："+ roleValue)){                
                var addr ='<?php echo SITE_URL;?>/index.php?r=offenceDefence/detailInfo';//跳转地址，根据用户的选择出现不同的界面？
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