<html>
<head>

<?php
$abspath="D:/www/websafe/test_bs.py"; #注意使用绝对路径
$output = shell_exec($abspath);
$array = explode(',',$output);

passthru($program);
?>

</head>
</html>