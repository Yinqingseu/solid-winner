<html>
<head>

</head>

<body onload="startTime()">
    
    <input id="txt" type="text">
</body>
<script type="text/javascript">
function startTime()
{
var today=new Date()
var h=today.getHours()
var m=today.getMinutes()
var s=today.getSeconds()
// add a zero in front of numbers<10
m=checkTime(m)
s=checkTime(s)
document.getElementById('txt').value=h+":"+m+":"+s
t=setTimeout('startTime()',500) //未来的某时执行代码
}

function checkTime(i)
{
if (i<10) 
  {i="0" + i}
  return i
}
</script>
</html>
