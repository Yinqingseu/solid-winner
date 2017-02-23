 <?php foreach($configInfos as $v){ ?>    
<div id="main_menu">
        <div id="main_menu_padded">
            <ul class="menuBlocks">
                <li onclick="window.location='<?php echo SITE_URL;?>/index.php?r=penetration/index&trainId=<?php echo $v->train_id?>&trainModel=<?php echo $v->train_model?>'" class="">
                <center><strong><a href="<?php echo SITE_URL;?>/index.php?r=penetration/index&trainId=<?php echo $v->train_id?>&trainModel=<?php echo $v->train_model?>">训练漏洞</a></strong></center></li>
                <li onclick="window.location='#'" class=""><a href="#">暴力破解</a></li>
                <li onclick="window.location='#'" class=""><a href="#">命令行注入</a></li>
                <li onclick="window.location='#'" class=""><a href="#">CSRF</a></li>
                <li onclick="window.location='#'" class=""><a href="#">文件包含</a></li>
                <li onclick="window.location='#'" class=""><a href="#">文件上传</a></li>
                <li onclick="window.location='<?php echo SITE_URL;?>/index.php?r=penetration/sqli&trainId=<?php echo $v->train_id?>&trainModel=<?php echo $v->train_model?>'" ><a href="#">SQL注入</a></li>
                <li onclick="window.location='#'" class=""><a href="#">SQL注入(盲注)</a></li>
                <li onclick="window.location='#'" class=""><a href="#">XSS 漏洞(反射型)</a></li>
                <li onclick="window.location='#'" class=""><a href="#">XSS 漏洞(存储型)</a></li>
            </ul>
        </div>
</div>
<div id="main_body">				
   <div class="body_padded">
	<h1>欢迎进行渗透测试！</h1>
	<hr />
	<br />
	<h2>简介</h2>
	<p>用户可以通过提供的漏洞，对系统进行渗透测试训练，需要注意的是，系统中有声明的漏洞，但也可能存在未声明的漏洞。鼓励用户尝试、发现尽可能多的漏洞。</p>
	<p>在每个漏洞的页面底端会有一对帮助按钮，使用它你可以查看漏洞源码和渗透方法。同时对每个漏洞也提供了对应的相关链接，供用户进行深入学习。</p>
	<hr />
	<br />
	<h2>更多训练资源</h2>
	<ul>
		<li><a href="http://www.itsecgames.com/" target="_blank">bWAPP</a></li>
		<li><a href="http://sourceforge.net/projects/mutillidae/files/mutillidae-project/" target="_blank">NOWASP</a> (<a href="http://www.irongeek.com/i.php?page=mutillidae/mutillidae-deliberately-vulnerable-php-owasp-top-10" target="_blank">Mutillidae</a>)</li>
		<li><a href="https://www.owasp.org/index.php/OWASP_Broken_Web_Applications_Project" target="_blank">OWASP Broken Web Applications Project</a></li>
	</ul>
	<hr />
</div>
<br /><br />
</div>
<div class="clear"></div>
<div id="system_info">
    <div align="left">
        <pre style="color: black;width:180px;height:190px;">
        <table width="120">
            <caption align="top"> <b>训练配置信息</b></caption>
            <tr><td><em>训练用户:</em></td> <td ><?php echo Yii::app()->user->name; ?></td> </tr>
            <tr><td><em>训练ID号:</em></td> <td><?php echo $v->train_id; ?></td> </tr>
            <tr><td><em>训练模式:</em></td> <td> <?php  
                $model = $v->train_model;
            if($model == 2) 
                echo "教师作业</td> </tr>";
            else
                echo "自主训练</td> </tr>"; ?> 
             <tr><td><em>训练名称:</em> </td><td><?php echo $v->train_name; ?></td> </tr>
             <?php if($model ==2){
                 echo  "<tr><td><em>作业要求:</em></td><td>". $v->requirements."</td> </tr>";
                 echo  '<tr><td><em>发布日期:</em></td><td>'. $v->deliver_date.'</td> </tr>';
                 echo  '<tr><td><em>截止日期:</em></td><td>'. $v->deadline.' </td> </tr>';
                 echo  '<tr><td><em>教师:</em></td><td>'. $v->teacher.'</td> </tr>';
             } ?>
             <tr><td><em>难度级别:</em></td><td> <?php echo $level; ?></td> </tr>
         </table>
         </pre>
 <?php } ?>
        <?php $form = $this -> beginWidget('CActiveForm');?> 
           <?php echo $form->hiddenField($recordModel,'start_time');?>
           <p align="left">
                <br /><input id="submitBt" type="submit" class="btn btn-default" role="button" value="结束训练"  />
           </p>
        <?php $form = $this -> endWidget();?>
    </div>
</div>
<script type="text/javascript">
 var startTime = '<?php date_default_timezone_set("Asia/Shanghai");
 echo date("Y-m-d H:i:s");?>';  
 document.getElementById('RecordSelftestPenetration_start_time').value = startTime;    
</script>