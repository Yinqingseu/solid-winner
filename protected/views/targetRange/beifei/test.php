 <!DOCTYPE html>
<html>	
<head> 
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 
</head>
<body>

<p>点击这个按钮，来调用带参数的函数。</p>
<button id='test' onclick="">保存</button>
<script>
function my(name){
	alert("Welcome " + name);if(name=='true'){name='false';}else{name='true';}
	return name;}
	
flag='true';
test.onclick=function(){
flag=my(flag);
};
</script>

</body>
</html>