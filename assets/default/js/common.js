function isNumber(oNum) {
    if (!oNum) return false;
    var strP = /^\d+(\.\d+)?$/;
    if (!strP.test(oNum)) return false;
    try {
        if (parseFloat(oNum) != oNum) return false;
    }
    catch (ex) {
        return false;
    }
    return true;
}

$.fn.numberLimit = function() {  
    $(this).css("ime-mode", "disabled");  
    this.bind("keypress",function(e) {  
    	var code = (e.keyCode ? e.keyCode : e.which);  //兼容火狐 IE   
        if(!$.browser.msie&&(e.keyCode==0x8))  //火狐下不能使用退格键  
        {  
             return ;  
        }  
        return code >= 48 && code<= 57;   
    });  
    this.bind("blur", function() {  
        if (this.value.lastIndexOf(".") == (this.value.length - 1)) {  
            this.value = this.value.substr(0, this.value.length - 1);  
        } else if (isNaN(this.value)) {  
            this.value = "";  
        }  
    });  
    this.bind("paste", function() {  
        var s = clipboardData.getData('text');  
        if (!/\D/.test(s));  
        value = s.replace(/^0*/, '');  
        return false;  
    });  
    this.bind("dragenter", function() {  
        return false;  
    });  
    this.bind("keyup", function() {  
    if (/(^0+)/.test(this.value)) {  
        this.value = this.value.replace(/^0*/, '');  
        }  
    });  
};

$.fn.digitLimit = function() {  
    $(this).css("ime-mode", "disabled");  
    this.bind("keypress",function(e) {  
    	if (event.keyCode == 46) {
			if (this.value.indexOf(".") != -1) {
				return false;
			}
		} else {
			return event.keyCode >= 46 && event.keyCode <= 57;
		}   
    });  
    this.bind("blur", function() {  
        if (this.value.lastIndexOf(".") == (this.value.length - 1)) {  
            this.value = this.value.substr(0, this.value.length - 1);  
        } else if (isNaN(this.value)) {  
            this.value = "";  
        }  
    });  
    this.bind("paste", function() {  
        var s = clipboardData.getData('text');  
        if (!/\D/.test(s));  
        value = s.replace(/^0*/, '0');  
        return false;  
    });  
    this.bind("dragenter", function() {  
        return false;  
    });  
    this.bind("keyup", function() {  
    if (/(^0+)/.test(this.value)) {  
        this.value = this.value.replace(/^0*/, '0');  
        }  
    });  
};

function getSelectPos(obj) {
    var esrc = document.getElementById(obj);
    if (esrc == null) {
        esrc = event.srcElement;
    }
    var rtextRange = esrc.createTextRange();
    rtextRange.moveStart('character', esrc.value.length);
    rtextRange.collapse(true);
    rtextRange.select();
}

function formatJsonDate(value) {
    if (value) {
        return eval("new " + value.substr(1, value.length - 2));
    }
}

function formatJsDate(value) {
    if (value) {
        return new Date(value).format('yyyy年MM月dd日');
    }
}

function getCheckedValue(labelName){
	var retValues = "";
    $("[name='" + labelName + "']").each(function() {
    	if($(this).attr('checked')){
        	retValues += $(this).val() + ",";
    	}
    })
    if (retValues.length > 0) {
    	retValues = retValues.substring(0, retValues.length - 1);
    }

    return retValues;
}

function setAllCheckStatus(labelName, selected){
    if (selected) {
        $("[name='" + labelName + "']").each(function() {
            $(this).attr('checked', true);
        })
    } else {
        $("[name='" + labelName + "']").each(function() {
            $(this).attr('checked', false);
        })
    }
}

function formatDayOfWeek(dayOfWeek){
	switch(parseInt(dayOfWeek)){
	case 1:
		return "星期一";
	case 2:
		return "星期二";
	case 3:
		return "星期三";
	case 4:
		return "星期四";
	case 5:
		return "星期五";
	case 6:
		return "星期六";
	case 7:
		return "星期天";
	}
	
	return "";
}

function S4() {
   return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
}
function guid() {
   return (S4()+S4()+"-"+S4()+"-"+S4()+"-"+S4()+"-"+S4()+S4()+S4());
}

function getOsVersion(){
	var ua = window.navigator.userAgent; 
	var osVersion = ua.split(";")[2]; 
	var osV = osVersion.substr(osVersion.length-3,3); 
	
	switch(osV) 
	{ 
		case "5.0": 
			return "Windows 2000"; 
		case "5.1": 
			return "Windows XP"; 
		case "5.2": 
			return "Windows 2003"; 
		case "6.0": 
			return "Windows Vista"; 
		case "6.1": 
			return "Windows 7"; 
		default: 
			return "Others";
	}
}

function getOsVersionBit(){
	var ua = window.navigator.userAgent; 
	var osVersion = ua.split(";")[2]; 
	var osV = osVersion.substr(osVersion.length-3,3); 
	
	var bit = "32";
	if(ua.indexOf("win64")>=0||ua.indexOf("wow64")>=0||ua.indexOf("WOW64")>=0||ua.indexOf("WIN64")>=0){
		bit = "64";
	}
	
	return bit;
}