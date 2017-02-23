<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
            <div id="leftContent">
                <div id="sidebar" class="left">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>攻防训练</h3><!--<i class="icon-th-large"></i>-->
                    </div>
                    <div>
                        <div id="newsTitle" class="operationcrumb">
                            <ul>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/modelConfig" ">攻防模式设置</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/roleConfig"  style="color:red;">攻防角色选择</a></li>
                                <li><a href="#">攻防环境部署</a></li>
                                <li><a href="#">攻防操作（提供调用第三方工具）</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/topo" >攻防进度显示（拓扑）</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/resultJudge">攻防结果判定</a></li>
                                <li><a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/more">更多...</a></li>
                            </ul>  
                        </div>
                    </div>                                      
                </div>
            </div>
            <div id="rightContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>攻防角色选择</h3>
                    </div>                
                    <div class="clear"></div>                     
                    <p>
                        <span style=" color: red; ">
                                 <?php                                              
                            if($state == 'success'){  
                                echo "数据库存储成功";
                        ?>
                        </span>
                    </p>
                    <p>                        
                        选择相应角色进入环境部署
                    </p>
                    <p>
                        <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/EnvironConfig" class="btn btn-default" role="button">攻击者</a>
                        具体描述...
                    </p>
                    <p>
                        <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/EnvironConfig" class="btn btn-default" role="button">防御者</a>
                        具体描述...
                    </p>  
                    <p>
                        <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/EnvironConfig" class="<?php 
                         //攻防类型 1：一攻一防；2：互相攻防；3：多人攻防   
                        if($odModel->type != 3){                            
                            echo "btn btn-info disabled";
                        }else{
                            echo "btn btn-default";
                        } ?>" role="button">攻击与防御</a>                    
                        具体描述...
                    </p>                     
                    <div id="newsContent">
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <span style="font-size: 26pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                具体描述</span>
                            <span lang="EN-US" style="font-size: 26pt; color: red; mso-bidi-font-size: 12.0pt"><o:p></o:p>
                            </span>
                        </p>
                    </div>
                    <?php 
                        }
                        else{
                    ?>
                    <div id="newsContent">
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <span style="font-size: 26pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                数据库存储失败，请重试！</span>
                            <span lang="EN-US" style="font-size: 26pt; color: red; mso-bidi-font-size: 12.0pt"><o:p></o:p>
                            </span>
                        </p>
                    </div>
                     <?php 
                        }                        
                    ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="push"></div>
</div>