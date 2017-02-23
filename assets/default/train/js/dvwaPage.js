/* Help popup */

function popUp(URL) {
	day = new Date();
	id = day.getTime();
	eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=500,height=300,left = 540,top = 250');");
}

/* Form validation */

function validate_required(field,alerttxt)
{
with (field) {
  if (value==null||value=="") {
    alert(alerttxt);return false;
  }
  else {
    return true;
  }
 }
}

function validate_form(thisform) {
with (thisform) {

  // Guestbook form
  if (validate_required(txtName,"Name can not be empty.")==false)
  {txtName.focus();return false;}
  
  if (validate_required(mtxMessage,"Message can not be empty.")==false)
  {mtxMessage.focus();return false;}
  
  }
}

//殷青添加
//弹窗询问，是否结束当前训练，确定后跳转到指定页面
function Warn(URL){
      var result = confirm('确定结束训练？');
      if(result){
           eval("location.href=URL"); //eval()函数执行字符中的javascript代码
  }
 }

