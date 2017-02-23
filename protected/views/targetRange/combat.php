    <div id="wrap">
        <div id="wrapInnerTop"></div>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL;?>/index.php?r=targetRange/index">首页</a></li>
            <li class="active">靶场实战</li>
        </ol>
        <div id="mainContainer">
            <div id="mainContent">
                <div id="newsShow">
                    <div id="newsTitle">
                        <h2>靶场实战</h2>
                    </div>                    
                    <div class="clear"></div>
                    <div id="newsContent">
                        <h3>主要包括以下内容：</h3>
                        <!--靶场配置介绍-->
                        <div>
                            <p align="center" style="margin: 0cm 0cm 0pt; text-align: left">
                            <span style="font-size: 14pt; color: red; font-family: 宋体;">靶场配置：</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" class="btn btn-default" id="ConfigInfoBt" value="点击查看" onClick="showInfos('ConfigInfoBt','ConfigInfo')" />                                                         
                            </p>
                            <div id="ConfigInfo" align="center" style="display: none; margin: 0cm 0cm 0pt; text-align: left">
                                <table class="table table-bordered" border="1" width="100%" style='vertical-align: middle;text-align: center;'>
                                    <caption><h2 style="font-size: 16pt; color: #000000; font-family: 宋体;">靶场配置包含</h2></caption>
                                    <tbody >
                                        <tr style="font-weight: bold;font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'" >
                                            <td>序号</td>
                                            <td>配置参数</td>
                                            <td>具体描述</td>
                                        </tr>
                                        <!--实战来源选择-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>1</td>
                                            <td style='vertical-align: middle;text-align: center;'>实战来源</td>
                                            <td align="left">
                                                <span>
                                                    1、实验来源分为老师布置的作业与自主实战<br>
                                                    2、如果是老师作业，根据作业号进行查找
                                                </span>
                                            </td>                                           
                                        </tr>
                                        <!--实验命名-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>2</td>

                                            <td style='vertical-align: middle;text-align: center;'>实战命名</td>
                                            <td align="left">
                                                <span>
                                                    1、对当前的操作进行命名，且名称不可重复<br>
                                                    2、方便日后在数据库中的查找
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
                        <!--靶场操作介绍-->
                        <div>
                            <p align="center" style="margin: 0cm 0cm 0pt; text-align: left">
                            <span style="font-size: 14pt; color: red; font-family: 宋体;">靶场操作：</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" class="btn btn-default" id="OperationInfoBt" value="点击查看" onClick="showInfos('OperationInfoBt','OperationInfo')" />                                                         
                            </p>
                            <div id="OperationInfo" style="display: none">
                                <table class="table table-bordered" border="1" width="100%" style='vertical-align: middle;text-align: center;'>
                                    <caption><h2 style="font-size: 16pt; color: #000000; font-family: 宋体;">靶场操作包含</h2></caption>
                                    <tbody >
                                        <tr style="font-weight: bold;font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'" >
                                            <td>序号</td>
                                            <td>功能</td>
                                            <td>具体描述</td>
                                        </tr>
                                        <!--实时信息-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>1</td>
                                            <td style='vertical-align: middle;text-align: center;'>实时信息</td>
                                            <td align="left">
                                                <span>
                                                    1、展示目前网络拓扑结构中已经攻击成功的节点，用显著颜色标注<br>
                                                    2、能够展示用户操作的内容，即用户操作日志
                                                </span>
                                            </td>                                           
                                        </tr>
                                        <!--工具-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>2</td>
                                            <td style='vertical-align: middle;text-align: center;'>工具</td>
                                            <td align="left">
                                                <span>
                                                    提供工具列表，标注是平台自身工具软件还是使用第三方接口调用的工具软件
                                                </span>
                                            </td>                                           
                                        </tr>       
                                        <!--控制台-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>3</td>
                                            <td style='vertical-align: middle;text-align: center;'>控制台</td>
                                            <td align="left">
                                                <span>
                                                    1、shell操作系统网路命令行<br>
                                                    2、脚本编写<br>                                                    
                                                </span>
                                            </td>                                           
                                        </tr>
                                        <!--团队信息共享-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>4</td>
                                            <td style='vertical-align: middle;text-align: center;'>团队信息共享</td>
                                            <td align="left">
                                                <span>
                                                    共享团队成员之间操作信息
                                                </span>
                                            </td>                                           
                                        </tr>
                                        <!--提示信息-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>5</td>
                                            <td style='vertical-align: middle;text-align: center;'>提示信息</td>
                                            <td align="left">
                                                <span>
                                                    1、靶场计时函数计算用户开始操作后用时<br>
                                                    2、获胜或失败提醒，终止实战
                                                </span>
                                            </td>                                           
                                        </tr>                                        
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;font-weight: bold;">
                                            <td>备注</td>                                                                                       
                                            <td colspan="2" style="color:red;">可以调用攻防实验平台自身工具，或者使用平台提供的第三方工具</td>                                           
                                        </tr>
                                    </tbody>
                                </table>                                 
                            </div>                            
                        </div>
                        <!--靶场结果介绍-->
                        <div>
                            <p align="center" style="margin: 0cm 0cm 0pt; text-align: left">
                            <span style="font-size: 14pt; color: red; font-family: 宋体;">靶场结果：</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" class="btn btn-default" id="ResultInfoBt" value="点击查看" onClick="showInfos('ResultInfoBt','ResultInfo')" />                                                         
                            </p>
                            <div id="ResultInfo" style="display: none">
                                <table class="table table-bordered" border="1" width="100%" style='vertical-align: middle;text-align: center;'>
                                    <caption><h2 style="font-size: 16pt; color: #000000; font-family: 宋体;">靶场操作包含</h2></caption>
                                    <tbody >
                                        <tr style="font-weight: bold;font-size: 14pt; color: #000000; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'" >
                                            <td>序号</td>
                                            <td>功能</td>
                                            <td>具体描述</td>
                                        </tr>
                                        <!--报表-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>1</td>
                                            <td style='vertical-align: middle;text-align: center;'>报表</td>
                                            <td align="left">
                                                <span>
                                                    1、展示当次操作结果<br>
                                                    2、生成报表提供下载
                                                </span>
                                            </td>                                           
                                        </tr>
                                        <!--其他-->
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;"> 
                                            <td style='vertical-align: middle;text-align: center;'>2</td>
                                            <td style='vertical-align: middle;text-align: center;'>其他</td>
                                            <td align="left">
                                                <span>
                                                    ......
                                                </span>
                                            </td>                                           
                                        </tr>                                                                                       
                                        <tr style="font-size: 14pt; color: #000000; font-family: 宋体;font-weight: bold;">
                                            <td>备注</td>                                                                                       
                                            <td colspan="2" style="color:red;">可以查询历史报表与下载</td>                                           
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                            
                        </div>                        
                        <!--靶场流程图-->
                        <div>
                            <p align="center" style="margin: 0cm 0cm 0pt; text-align: left">
                            <span style="font-size: 14pt; color: red; font-family: 宋体;">靶场流程图：</span>
                            &nbsp;
                            <input type="button" class="btn btn-default" id="FlowDiagramBt" value="点击查看" onClick="showInfos('FlowDiagramBt','FlowDiagram')" />                                                         
                            </p>
                            <div id="FlowDiagram" align="center" style="display: none;border:10px;margin-left:auto;margin-right:auto;max-width: 90%;">                                
                                <img src="<?php echo IMG_URL;?>trFlowDiagram.png"  border="10px"/>   
                            </div>                              
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="push"></div>
        <p align="center">
            <input type="button" class="btn btn-default"  onClick="firm()" value="开始配置">                          
        </p>
    </div>
<script type="text/javascript">
    /**
     * showDeatail  点击按钮展示隐藏介绍信息，使网页的布局更加精简
     * @param {var} sourceButtion 点击的按钮id
     * @param {var} targetContent 需要展示的目标内容id  
     * @returns 属性的更改
     * @author 徐婧
     * @since 2017-01-10
     */
    function showInfos(souceButtion,targetContent){
        document.getElementById(targetContent).style.display=document.getElementById(targetContent).style.display==''?'none':'';//三元运算符
        document.getElementById(souceButtion).value = document.getElementById(souceButtion).value=='点击查看'?'收起':'点击查看';//将按钮的value值更改
    }
    /**
     * firm 确定跳转的弹窗
     * @returns 弹窗确定是否跳转
     * @author 徐婧
     * @since 2017-01-10
     */
    function firm() {  
        //利用对话框返回的值 （true 或者 false）  
        if (confirm("已阅读完基本说明，确定开始配置？")) {  
            var addr ='<?php echo SITE_URL;?>/index.php?r=targetRange/taskOrigin';//跳转地址，根据用户的选择出现不同的界面？
            window.location.href=addr;
        } 
    }
</script>
