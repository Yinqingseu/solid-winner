<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
    <title>网络攻防实验平台--漏洞扫描</title>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-menu.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap-responsive.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>doc.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>main.css" />
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>common.js"></script>
    <script language="javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>bootstrap/bootstrap-ie.js"></script>
    <script src="<?php echo JS_URL;?>jquery.min.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript">$().ready(
    function(){
        $('#slideshow').cycle({fx:      'scrollHorz',timeout:  0,prev:    '#prev',next:    '#next',pager:   '#pagination',speed: 800,timeout: 6000,cleartype:  true,slideExpr: '.item',pagerAnchorBuilder: pagerFactory});
    function pagerFactory(idx, slide) {if(idx >= 8){return;}return '<li><a href="#"  class="nav_button"><span>'+(idx+1)+'</span></a></li>';};});
    function show_select(input,btn,option,value){var inputobj = document.getElementById(input);var btnobj = document.getElementById(btn);var optionobj = document.getElementById(option);var valueobj = document.getElementById(value);optionobj.style.display = (optionobj.style.display=="")?"none":"";for (var i=0;i<optionobj.childNodes.length;i++){optionobj.focus();optionobj.childNodes[i].onclick = (function(){inputobj.innerHTML = this.innerHTML;valueobj.value = this.innerHTML;optionobj.style.display = (optionobj.style.display=="")?"none":"";});}}
    </script>
    <script type="text/javascript">
    function Time()
    {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    // add a zero in front of numbers<10
    m=checkTime(m);
    s=checkTime(s);
    document.getElementById('timeshow').value=h+":"+m+":"+s;
    t=setTimeout('Time()',500);
    }

    function checkTime(i)
    {
    if (i<10) 
      {i="0" + i}
      return i
    }
    </script>
    </head>

<body onload="Time()">
    <ul id="board">
          <li><a href="<?php echo SITE_URL?>/index.php?r=user/infoedit">欢迎您：<?php  echo Yii::app()->user->name;?></a></li>   
          <li><a href="<?php echo SITE_URL?>/index.php?r=user/login" >退出登录</a></li>
  </ul>
<div id=" bread">
    <ol class="breadcrumb">
       <li>首页</li>
       <li>漏洞扫描</li>
       <li class="active">网站扫描</li>
    </ol>
</div>
<div class="clear"></div>
<div id="wrap" >
<div id="wrapInnerTop"></div>
<div id="mainContainer">
    <div id="mainContent">
        <div id="newsShow">
            <div id="newsTitle" class="breadcrumb">
                <h3>网站漏洞扫描实时展示</h3>
            </div>
            <div class="clear"></div>
            <div id="newsContent" >
                <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                   <span style="font-size: 14pt;color:red;  font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                       <div id="div2">
                       <?php foreach($configInfos as $v){ ?>
                       <ul style="font-size: 14pt;color:red;  font-family: 宋体;">
                           <div id = "tdnoborder" align="left">
                            <pre style="color: black;width:700px;height:80px;">
                            <table  cellpadding="0" cellspacing="0" >
                                <caption align="top"> <b>扫描配置信息</b></caption>
                                <tr>
                                    <td><b>扫描ID号:</b></td> <td><?php echo $v->scan_id; ?></td> 
                                    <td><b>扫描用户:</b></td> <td><?php echo Yii::app()->user->name; ?>&nbsp;&nbsp;</td> 
                                    <td><b>扫描模式:</b></td> <td><?php 
                                            echo '教师作业&nbsp;&nbsp;';
                                        ?></td> 
                                 <td><b>扫描名称:</b> </td><td><?php echo $v->scan_name; ?></td>
                                </tr>
                                 <tr>
                                     <td><b>扫描网站:</b></td><td> <?php echo  $v->scan_url;?></td></tr>
                                 <tr><td><b>扫描工具:</b></td><td> <?php echo  $choice;?></td> 
                                 <?php switch($v->choice){
                                        case 1:
                                            $key = explode(',',$v->scan_holelist);
                                            $len = count($key); //获取复选框个数
                                            if($len==1){//存储在数据库中的值作为键值，获取对应的value
                                                $key = number_format ($key[0]);
                                            echo  "<tr><td><b>扫描漏洞:</b></td><td>".$hole[$key]."&nbsp;&nbsp;</td> ";}
                                            else{
                                            echo  "<td><b>扫描漏洞:</b></td><td>".$hole[1].','.$hole[2]."&nbsp;&nbsp;</td> ";}
                                            
                                            echo  '<td><b>扫描深度:</b></td><td>'. $v->scan_depth.'</td> ';
                                            echo  '<td><b>扫描并发线程数:</b></td><td>'. $v->numofthreads.' </td> </tr>';
                                        break;
                                        case 2:
                                            if($v->tool == 1){
                                                $tools = 'OpenVAS';
                                                
                                            }else{
                                                 $tools = 'Nessus';
                                             }  
                                            echo  "<td><b>第三方漏洞工具:</b></td><td>". $tools."</td> </tr>";
                                        break;
                                        case 3:
                                            $key = explode(',',$v->selfcheck);
                                            $len = count($key);
                                            if($len==1){  //存储在数据库中的值作为键值，获取对应的value
                                                $key = number_format($key[0]);      
                                                echo  "<td><b>手动验证工具:</b></td><td>".$selfcheck[$key]."</td> </tr>";}
                                            else{
                                                echo  "<td><b>手动验证工具:</b></td><td>".$selfcheck[1].','.$selfcheck[2]."</td> </tr>";
                                            }
                                        break;     
                                    } ?>
                             </table></pre> </div>
                           <li>扫描开始时间：<?php   echo $startTime;
                             ?></li><br />
                           <li>当前时间： <input type="text" id="timeshow" style="border:0px;background-color:transparent;" />
                           </li><br />
                            <li>功能1：实时显示扫描结果，扫描时间，扫描进度</li><br />
                            <li>功能2：实时显示系统监测数据、系统性能评估参数</li><br />
                            <?php } ?>
                            <p>
                                <input type="button" class="btn btn-default" role="button" value="暂停扫描"  title="此按钮实现扫描的暂停" onclick ="" />
                            </p> 
                       </ul>
                           <?php $form = $this -> beginWidget('CActiveForm');?>  
                           <?php echo $form->hiddenField($recordModel,'asFlag',array("value"=>FALSE)); ?> <!--标记答案的状态-->
                            <?php echo $form->label($recordModel,'answer');?><br />
                            <?php echo $form->textArea($recordModel,'answer',array('style'=>'width:700px;height:180px;'));?>
                            <font style="color: red;"><?php echo $form->error($recordModel,'answer');?></font>
                            <?php echo $form->hiddenField($recordModel,'start_time');?>
                            <p align="center">
                                <input id="submitBt" type="submit" class="btn btn-default" role="button" value="提交"  />
                                <input id="resetBt" class="btn btn-default"  value="清空重置" type="button" onclick="allReset()">
                            </p>
                            <?php $form = $this -> endWidget();?>
                       </div>
                   </span>
                </p>
            </div>
        </div>
        </div>
    <div class="clear"></div>  
</div>
</div>
<script type="text/javascript">
 var startTime = '<?php date_default_timezone_set("Asia/Shanghai");
 echo date("Y-m-d H:i:s");?>';  
 document.getElementById('RecordHomeworkWebScan_start_time').value = startTime;    

 /*
 *  读取作业内容并展示在网页上
 */
var sflag =  '<?php echo $sflag;?>'; //标记作业状态：1：已完成；0：未完成； 
if(sflag == '1'){
    var answer = '<?php foreach ($recordInfos as $v)
        echo $v->answer;?>'
    document.getElementById('RecordHomeworkWebScan_answer').value = answer;
}

/*
 *  作业答案内容清空重置按钮
 */
function allReset(){
    var  answerText = document.getElementById("RecordHomeworkWebScan_answer");
    answerText.value = ""; //文本框内容清空
 }
 
/*
 *  游客状态提示登录
 */
var  userid = '<?php echo Yii::app()->user->id;?>';
 if(userid == ''){
    var choice = confirm("您当前为游客状态，请先登录。");
    if(choice){
        window.location.href='<?php echo SITE_URL;?>/index.php?r=user/login';
    }   
  }    
</script>


 <div id="footContainer">
            <div id="footContent">
                <script type="text/javascript">
                        $("#foot li:last-child a").attr("target", "_blank");
                </script>
                <p>东南大学-网络攻防实验平台</p>
            </div>
        </div>
        <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
        try {
        var pageTracker = _gat._getTracker("UA-11987146-2");
        pageTracker._trackPageview();
        } catch(err) {}
        </script>

    </body>
</html>



       
           
          
            
            
        



















