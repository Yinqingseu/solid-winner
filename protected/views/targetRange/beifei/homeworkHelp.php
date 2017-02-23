    <div id="wrap">
        <div id="wrapInnerTop"></div>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/index">首页</a></li>
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/combat">靶场实战</a></li>
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/rulesConfig">靶场配置</a></li>            
            <li class="active">靶场配置帮助</li>
        </ol>        
        <div id="mainContainer">
            <div id="mainContent">
                <!--<div id="rightContent">-->
                    <div id="newsShow">
                        <div id="newsTitle">
                            <h2>靶场教师作业配置帮助</h2>
                        </div>                    
                        <div class="clear"></div>
                        <div id="newsContent">
                            <!--靶场配置介绍-->
                            <div>
                                <div id="ConfigInfo" align="center" style="margin: 0cm 0cm 0pt; text-align: left">
                                    <table class="table table-bordered" border="1" width="100%" style='vertical-align: middle;text-align: center;'>
                                        <caption><h2 style="font-size: 16pt; color: #000000; font-family: 宋体;">靶场配置包含</h2></caption>
                                        <tbody >
                                            <tr style="font-weight: bold;font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'" >
                                                <td>序号</td>
                                                <td>配置参数</td>
                                                <td>具体描述</td>
                                            </tr>
                                            <!--实战命名-->
                                            <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                                <td style='vertical-align: middle;text-align: center;'>1</td>
                                                <td style='vertical-align: middle;text-align: center;'>实战命名</td>
                                                <td align="left">
                                                    <span>
                                                        1、对当前的操作进行命名，且名称不可重复<br>
                                                        2、方便日后在数据库中的查找
                                                    </span>
                                                </td>                                           
                                            </tr>
                                            <!--实验来源选择-->
                                            <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                                <td style='vertical-align: middle;text-align: center;'>2</td>
                                                <td style='vertical-align: middle;text-align: center;'>实战来源</td>
                                                <td align="left">
                                                    <span>
                                                        1、实验来源分为老师布置的作业与自主实战<br>
                                                        2、如果是老师作业，根据作业号进行查找
                                                    </span>
                                                </td>                                           
                                            </tr>       
                                            <!--模式选择-->
                                            <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                                <td style='vertical-align: middle;text-align: center;'>3</td>
                                                <td style='vertical-align: middle;text-align: center;'>模式选择</td>
                                                <td align="left">
                                                    <span>
                                                        1、包括单人攻防与多人（不超过3人）多人团队形式的实战<br>
                                                        2、多人组队根据实验来源进行配置<br> 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;老师作业，队伍名称固定<br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;自主实战，队伍名称可自由命名 
                                                    </span>
                                                </td>                                           
                                            </tr>
                                            <!--目标选择-->
                                            <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                                <td style='vertical-align: middle;text-align: center;'>4</td>
                                                <td style='vertical-align: middle;text-align: center;'>目标选择</td>
                                                <td align="left">
                                                    <span>
                                                        1、提供靶场攻击目标：主机，网站，手机等<br>
                                                        2、目标必要的基本信息，比如IP地址，操作系统类型等
                                                    </span>
                                                </td>                                           
                                            </tr>
                                            <!--目标选择-->
                                            <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                                <td style='vertical-align: middle;text-align: center;'>5</td>
                                                <td style='vertical-align: middle;text-align: center;'>目标选择</td>
                                                <td align="left">
                                                    <span>
                                                        选择任务，最终成绩判定在时间的基础上考察目标任务的完成情况
                                                    </span>
                                                </td>                                           
                                            </tr>
                                            <tr style="font-size: 14pt; color: #000000; font-family: 宋体;font-weight: bold;">
                                                <td>备注</td>                                                                                       
                                                <td colspan="2" style="color:red;">需要配置上述基本参数后，才可进行靶场操作！</td>                                           
                                            </tr>
                                        </tbody>
                                    </table>                                                                                            
                                </div>                            
                            </div>
                        </div>                        
                        <p align="center">
                            <a href="<?php echo SITE_URL;?>/index.php?r=targetRange/homeworkConfig" class="btn btn-default" role="button">返回</a>                 
                        </p>
                    </div>
                <!--</div>-->
                <div class="clear"></div>
            </div>
        </div>
        <div id="push"></div>
    </div>
