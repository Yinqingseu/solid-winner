<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
        <div id="mainContent">
            <div id="leftContent">
                <div id="sidebar" class="left">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>靶场训练</h3><!--<i class="icon-th-large"></i>-->
                    </div>
                    <div>
                        <div id="newsTitle" class="operationcrumb">
                            <ul>
                                <li style="color:red;">靶场基本配置</li>
                                <li style="color:#337ab7;">靶场操作</li>
                                <li style="color:#337ab7;">靶场结果</li>
                            </ul>   
                        </div>
                    </div>                                     
                </div>
            </div>
            <div id="rightContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>实验信息</h3>
                    </div>                    
                    <div class="clear"></div>                       
                    <div id="newsContent">
                        <p align="center" class="MsoNormal" style="margin: 0cm 0cm 0pt; text-align: center">
                            <span style="font-size: 26pt; color: red; font-family: 宋体; mso-bidi-font-size: 12.0pt; mso-ascii-font-family: 'times new roman'; mso-hansi-font-family: 'times new roman'">
                                实验信息展示，表格展示。。。。。。。</span>
                            <span lang="EN-US" style="font-size: 26pt; color: red; mso-bidi-font-size: 12.0pt"><o:p></o:p>
                            </span>
                        </p>                        
                    </div>
                    <div>                                                                                                       
                        <table class="table table-bordered" border="1" width="100%">
                            <caption><h3>实验信息列表</h3></caption>
                            <tbody>
                                <tr style="font-weight: bold;" align="center">                                    
                                 
                                    <td>模式</td>
                                    <td>目标</td>
                                    <td>靶场规则名称</td>
                                    <td>实验名称</td>
                                    <td>团队名称</td> <!--判断，如果单人就不显示这一列，以及对应的数据-->
                                    <td>对手信息</td>                                
                                    <td>环境配置</td>
                                </tr>
                                <tr id="product1" align="center">
                                     <?php 
                                        foreach($trInfos as $value){
                                            
                                        }
                                        ?>
                                                                    
                                    
                                    <td><?php 
                                        if($value['type'] == 1){ 
                                            echo "单人";
                                            
                                        }else{
                                            echo "多人";
                                        }
                                        ?>
                                    </td>
                                    <td><?php 
                                        if($value['target'] == 1){ 
                                            echo "主机";
                                            
                                        }else if($value['target'] == 2){
                                            echo "网站";
                                        }else{
                                            echo "手机";
                                        }
                                        ?>
                                    </td>
                                    <td>规则名称</td>
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
                                <tr>
                                    <td colspan="7" align="center">
                                        <input type="button" class="btn btn-default"  onClick="firm()" value="修改">                                                                            
                                        <a href="<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/operation" class="btn btn-default" role="button">开始操作</a>    <!--跳转到开始操作的第一步，介绍操作-->                        
                                    </td>
                                </tr>                                  
                            </tbody>
<script type="text/javascript">
    function firm(){
        //利用对话框返回的值 （true 或者 false）
        if(confirm("确定返回进行修改？")){
            var addr ='<?php echo SITE_URL;?>/index.php?r=targetRangeCombat/rulesConfig';//跳转地址，根据用户的选择出现不同的界面？
            window.location.href=addr;
        }
    }
</script>
                        </table>
                    </div>                   
                </div>                
            </div>           
        </div>
    </div>
    <div id="push"></div>
</div>
