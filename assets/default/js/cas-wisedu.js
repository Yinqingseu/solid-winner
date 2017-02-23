(function($){
    $(document).ready(function() {
    	
    	$("#language a").bind("click",function() {
    		var b = window.location.href;
    		var c = $(this).data("lang");
    		/\?/.test(b) ? /(\?|\&)locale=([^&]+)/.test(b) ? b = b.replace(
    				/(\?|\&)locale=([^&]+)/, "$1locale=" + c) : b = b + "&locale=" + c
    				: b = b + "?locale=" + c;
    		window.location.href = b;
    	});
    	
       
      
        $("#changeCaptcha").bind("click",function(){
            $("#captchaImg").attr("src","captcha.html?ts="+new Date().getMilliseconds());
        });

        $("#username").bind("blur",function(){
            getCaptcha();
        });


        if($("#username").val()!=""){
            $("#password").focus();
        }else{
            $("#username").focus();
        }
        var casLoginForm = $("#casLoginForm") ;
        casLoginForm.submit(doLogin);
        function doLogin(){
            var username =casLoginForm.find("#username");
            if(username.val()==""){
                username.addClass("form-error");
                casLoginForm.find("#usernameError").addClass("errormsg").text($CONFIG['username.notempty']);
                username.focus();
                return false;
            }
            var password = casLoginForm.find("#password");
            if(password.val()==""){
                password.addClass("form-error");
                casLoginForm.find("#passwordError").addClass("errormsg").text($CONFIG['password.notempty']);
                password.focus();
                return false;
            }
            var captchaResponse = casLoginForm.find("#captchaResponse");
            if(captchaResponse.length>0 && captchaResponse.val()==""){
                captchaResponse.addClass("form-error");
                casLoginForm.find("#captchaError").text($CONFIG['verifycode.notempty']);
                captchaResponse.focus();
                return false;
            }
        }


        var casDynamicLoginForm = $("#casDynamicLoginForm") ;
        casDynamicLoginForm.submit(doDynamicLogin);
        function doDynamicLogin(){
            var username =casDynamicLoginForm.find("#username");
            if(username.val()==""){
                username.addClass("form-error");
                casDynamicLoginForm.find("#usernameError").addClass("errormsg").text($CONFIG['username.notempty']);
                username.focus();
                return false;
            }
            var password = casDynamicLoginForm.find("#password");
            if(password.val()==""){
                password.addClass("form-error");
                casDynamicLoginForm.find("#passwordError").addClass("errormsg").text($CONFIG['password.notempty']);
                password.focus();
                return false;
            }
        }

    });

})(jQuery);

function GetQueryString(name){
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r!=null) return unescape(r[2]); return null;
}


function getCaptcha(){
    if($.trim($("#username").val())!=""&&$("#captchaResponse").length==0){
        $.ajax("needCaptcha.html",{
            data:{username:$("#username").val()},
            cache:false,
            dataType:"text",
            success:function(data){
                if(data.indexOf("true")>-1){
                    $(".last_ipt").removeClass("last_ipt");
                    var casCaptcha = $("#cpatchaDiv");
                    casCaptcha.empty();
                    casCaptcha.html('<div class="login_ipt_row last_ipt"><label for="chk_no">验证码：</label> <input type="text" id="captchaResponse"  name = "captchaResponse" data-osk-options = "disableReturn" class = "input_medium validate[required] osk-trigger" / > </div>  <div class="login_ipt_row last">  <img id="captchaImg" src="captcha.html" alt="验证码"  title="验证码"/> <span style="cursor: pointer;color: #1dadff;" id="changeCaptcha" class="chk_text">换一张</span>  </div>');
                    $("#changeCaptcha").bind("click",function(){
                        $("#captchaImg").attr("src","captcha.html?ts="+new Date().getMilliseconds());
                    });
                    casCaptcha.fadeIn("slow");
                }
            }
        });
    }
}


/**
  * 倒计时函数
  *
  */
function countDownButton(obj, second) {
//    var buttonDefaultValue = obj.value;
    // 如果秒数还是大于0，则表示倒计时还没结束
    if (second >= 0) {
        // 按钮置为不可点击状态
        obj.disabled = true;
        // 按钮里的内容呈现倒计时状态
        obj.value = "重新获取" + '(' + second + ')';
        // 时间减一
        second--;
        // 一秒后重复执行
        setTimeout(function () {
            countDownButton(obj, second);
        }, 1000);
        // 否则，按钮重置为初始状态
    } else {
        // 按钮置未可点击状态
        obj.disabled = false;
        // 按钮里的内容恢复初始状态
        obj.value = "获取动态码";
    }
}

//发送验证码.
function sendDynamicCodeByPhone(username,authCodeTypeName) {

    $.ajax({
        type: "POST",
        url: "getDynamicCode.do",
        dataType: "json",
        data: {userName: username, authCodeTypeName: authCodeTypeName},
        success: function (data) {
            var res = data.res;
            var mobile = data.mobile;
            if (res == "success") {
                $("#sendCodeWarnMessage").text("动态口令已经发送到手机" + mobile);
            } else {
                if (res == "notmobile") {
                    alert("该用户尚未绑定手机号，无法采用动态码进行认证");
                } else {
                    alert("发送验证码失败");
                }
            }
        }
    });
}
