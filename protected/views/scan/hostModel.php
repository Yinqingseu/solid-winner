<div id=" bread">
    <ol class="breadcrumb">
        <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
        <li><a href="<?php echo SITE_URL?>/index.php?r=scan/typechoose">漏洞扫描</a></li>
        <li>应用软件</li>
       <li class="active">模式选择</li>
    </ol>
</div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
            <div id="newsShow">
            <div class="clear"></div>
            <div id="newsContent" >
                <div id = "divtrain" style="height:280px;">
                    <p align="center" >
                        <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="自主扫描" 
                               onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/hostscan'" /> </p>
                    <br />
                    <p align="center" >
                        <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="教师作业"
                               onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=homework/scan&id=3'" /> </p> 
                </div>
                <h3>主要包括以下内容：</h3>
                <p align="center" style="margin: 0cm 0cm 0pt; text-align: left">  
               <span style="font-size: 14pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                  自主训练：</span>
               <span style="font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                   用于用于自主进行漏洞扫描。</span>                               
                </p>
                <p align="center" style="margin: 0cm 0cm 0pt; text-align: left">  
               <span style="font-size: 14pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                  教师作业：</span>
               <span style="font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                   教师布置对应的作业号，学生填入作业号进行相关漏洞扫描以完成教师布置的作业。</span>                               
                </p>
            </div>
            </div>
            </div>
            <div class="clear"></div>
    </div>
</div>
