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
                                <li style="color:#337ab7;">攻防基本配置</li>
                                <li style="color:#337ab7;">攻防操作</li>
                                <li style="color:red;">攻防结果</li>
                            </ul>
                        </div>
                    </div>                                     
                </div>
            </div>
            <div id="rightContent">
                <div id="newsShow">                    
                    <div id="newsTitle" class="breadcrumb">
                        <h3>攻防本次实验信息</h3>
                    </div>                    
                    <div class="clear"></div>
                    <div id="newsContent">
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <span style="font-size: 26pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                此次实验完整信息，展示如绘制图片或表格</span>
                        </p>                        
                        <div>
                            <table class="table table-bordered" border="1" width="100%">
                                <caption><h3>实验信息列表</h3></caption>
                                <tbody>
                                <tr style="font-weight: bold;" align="center">
                                    <td>角色</td> 
                                    <td>模式</td>
                                    <td>实验名称</td>
                                    <td>团队名称</td> <!--判断，如果单人就不显示这一列，以及对应的数据-->
                                    <td>对手信息</td>                                
                                    <td>环境配置</td>
                                </tr>
                                <tr id="product1" align="center">                        
                                    <!--数据表表单项名称-->
                                    <?php 
                                        foreach($odInfos as $value){
                                            
                                        }
                                        ?>
                                    <td>
                                        <?php 
                                        if($value['role'] == 1){ 
                                            echo "攻击者";
                                            
                                        }else{
                                            echo "防御者";
                                        }
                                        ?>
                                    </td>
                                    <td><?php 
                                        if($value['type'] == 1){ 
                                            echo "单人";
                                            
                                        }else{
                                            echo "多人";
                                        }
                                        ?>
                                    </td> 
                                    <td>
                                        <?php  
                                        if($value['name'] == null){
                                            echo '系统默认';
                                        }else{
                                            echo $value['name'];
                                        }
                                        ?>
                                    </td> 
                                    <td>test团队</td>
                                    <td>opponent info</td>                        
                                    <td>已有环境</td>
                                </tr>                                                            
                            </tbody>
                            </table>
                        </div>
                        <div class="clear"></div>
                        <div>
                            <table class="table table-bordered" border="1" width="100%">
                                <caption><h3>结果信息列表</h3></caption>
                                <tbody style="font-weight: bold;" align="center">
                                    <tr>
                                        <td>操作起止时间</td> 
                                        <td>2016年12月1日19:15--2016年12月1日21:15</td>                               
                                    </tr>                                
                                    <tr>                                                            
                                        <td>攻防操作信息</td>
                                        <td><a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/showHistoryOperation">查看操作历史</a>
                                        </td>                        
                                    </tr>
                                    <tr>                        
                                        <td>操作成果</td>                 
                                        <td>嗅探出对方的开放端口，绘制网络拓扑图</td>
                                    </tr>
                                    <tr>                        
                                        <td>团队操作</td>                                      
                                        <td><a href="#">查看队友操作信息</a></td>
                                    </tr>  
                                    <tr>                        
                                        <td>结果</td>                                      
                                        <td><a href="#">90</a></td><!--可以查看评分细则-->
                                    </tr>
                                    <tr>                        
                                        <td>操作评价</td>                                      
                                        <td><a href="#">Good Job!</a></td><!--可以查看评分细则-->
                                    </tr>
                                    <tr>                        
                                        <td>报表操作</td>                                      
                                        <td>
                                            <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/generateDownload">生成并下载</a>  
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                                               
                        <p align="center">
<!--                            <a href="#" class="btn btn-default" role="button"></a>                            -->
                            <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/layout" class="btn btn-default" role="button">返回</a>                            
                        </p>
                    </div>                    
                </div>                
            </div>
        </div>
    </div>  
    <div id="push"></div>
</div>