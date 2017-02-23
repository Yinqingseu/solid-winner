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
                <li onclick="window.location='<?php echo SITE_URL;?>/index.php?r=penetration/sqli'" class="selected"><a href="#">SQL注入</a></li>
                <li onclick="window.location='#'" class=""><a href="#">SQL注入(盲注)</a></li>
                <li onclick="window.location='#'" class=""><a href="#">XSS 漏洞(反射型)</a></li>
                <li onclick="window.location='#'" class=""><a href="#">XSS 漏洞(存储型)</a></li>
            </ul>
        </div>
</div>

<div id="main_body">				
    <div class="body_padded">
        <h1>漏洞: SQL注入</h1>

        <div class="vulnerable_code_area">点击此处 <a href="#" onClick="javascript:popUp('session-input.php');return false;">更改ID号</a>.
        </div>
        <h2>更多信息</h2>
        <ul>
            <li><a href="http://www.securiteam.com/securityreviews/5DP0N1P76E.html" target="_blank">http://www.securiteam.com/securityreviews/5DP0N1P76E.html</a></li>
            <li><a href="https://en.wikipedia.org/wiki/SQL_injection" target="_blank">https://en.wikipedia.org/wiki/SQL_injection</a></li>
            <li><a href="http://ferruh.mavituna.com/sql-injection-cheatsheet-oku/" target="_blank">http://ferruh.mavituna.com/sql-injection-cheatsheet-oku/</a></li>
            <li><a href="http://pentestmonkey.net/cheat-sheet/sql-injection/mysql-sql-injection-cheat-sheet" target="_blank">http://pentestmonkey.net/cheat-sheet/sql-injection/mysql-sql-injection-cheat-sheet</a></li>
            <li><a href="https://www.owasp.org/index.php/SQL_Injection" target="_blank">https://www.owasp.org/index.php/SQL_Injection</a></li>
            <li><a href="http://bobby-tables.com/" target="_blank">http://bobby-tables.com/</a></li>
        </ul>
    </div>
    <br /><br />
</div>
<div class="clear">
</div>
<div id="system_info">
        <input type="button" value="查看帮助" class="popup_button" onClick=""> 
        <input type="button" value="查看源码" class="popup_button" onClick="javascript:popUp( '<?php echo SITE_URL;?>/index.php?r=trainholesinfo/viewsource&train_level=<?php echo $v->train_level; ?>&hole=sqli' )"> 
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
         <br /><input type="button"class="btn btn-default" role="button"  value="结束训练" onclick ="Warn('<?php echo SITE_URL;?>/index.php?r=train/over&id=<?php echo $v->train_id; ?>&model=<?php echo $v->train_model;?>&name=<?php echo $v->train_name;?>');" />        

 <?php } ?>
    </div>
</div>