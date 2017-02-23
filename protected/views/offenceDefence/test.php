
<a href="javascript:void()" onclick="dispHandle(div_test)">点击此处显示或隐藏div</a>

<?php $form = $this -> beginWidget('CActiveForm',
    array(
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
    )
); 
?>     
 <?php echo $form->labelEx($odModel,'type'); ?>&nbsp;&nbsp;&nbsp;&nbsp;                                   
<?php echo $form->radioButtonList($odModel,'type',$type,array('separator'=>'&nbsp;','class'=>'type','name'=>'test_type','onclick'=>'show()' ))?>
<!--可以吧隐藏的东西放到一个div里面-->
    <?php echo $form->hiddenField($odModel,'test',array('id'=>'test3','style'=>'display:none'));?>
 <!--给属性增加id,然后可以给JS调用-->


<div id="div_test" style="float:left;border:10px;width:100%;display: none;">
<p align="center" class="MsoNormal" style="margin-top: 3px; margin-left: 5cm; text-align: left">
   <span style="font-size: 14pt; color: blue; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
       <b>多人队伍信息选择</b>
   </span>                                
</p>                            
</div>
 <?php $this->endWidget(); ?>
<script type="text/javascript">
function show(){
    var types = document.getElementsByName("test_type");//获取单选按钮的方式，不是通过id，因为这边不大好获取id，可以给单选按钮进行命名，一名称进行查找，结果是一个数组
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
        document.getElementById("test3").style.display=document.getElementById("test3").style.display==''?'none':'';//三元运算符
        document.getElementById("test3").setAttribute("type","visible");//设置隐藏内容的样式，button，text
        document.getElementById("div_test").style.display=document.getElementById("div_test").style.display==''?'none':'';//三元运算符
//        var divValue = document.getElementById("div_test").style.display;
//        if(divValue == "none"){
//            document.getElementById("div_test").style.display = "";
//        }else{
//            document.getElementById("div_test").style.display = "none";
//        }
    }
    //否则对隐藏的内容继续隐藏，如果已经是显示的情况下，则改为隐藏
    else{
        document.getElementById("test3").style.display='none';
        document.getElementById("div_test").style.display="none";//隐藏
    }
}
function dispHandle(obj) 
{
if (obj.style.display == "none")
obj.style.display = "";
else
obj.style.display = "none";

}
</script>