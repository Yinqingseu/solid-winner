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
                                <li style="color:red;">攻防基本配置</li>
                                <li style="color:#337ab7;">攻防操作</li>
                                <li style="color:#337ab7;">攻防结果</li>
                            </ul> 
                        </div>
                    </div>                                     
                </div>
            </div>
            <div id="rightContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>查看队伍信息</h3>
                    </div>                    
                    <div class="clear"></div>                       
                    <div>                                                                                                       
                        <table class="table table-bordered" border="1" width="100%">
                            <caption><h3>队伍信息列表</h3></caption>
                            <tbody>
                                <tr style="font-weight: bold;" align="center">
                                    <td>序号</td> 
                                    <td>队伍名称</td>  
                                    <td>队伍人数</td>
                                    <td>缺少人数</td>
                                    <td>队伍成绩</td> 
                                    <td>操作</td>                                
                                </tr>
                                <tr id="product1" align="center">                        
                                    <!--数据表表单项名称-->
                                    <td>1</td>
                                    <td>test</td>
                                    <td>5</td>
                                    <td>2</td>   
                                    <td>98.5</td> 
                                    <td>
                                        <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/applyTeam">
                                            申请
                                        </a>
                                    </td>                        
                                </tr>
                                <!--最后要删掉的，目前展示时显示多行，不从数据库读取-->
                                <tr id="product2" align="center">                        
                                    <!--数据表表单项名称-->
                                    <td>2</td>
                                    <td>test2</td>
                                    <td>6</td>
                                    <td>3</td>   
                                    <td>89.5</td> 
                                    <td>
                                        <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/applyTeam">
                                            申请
                                        </a>
                                    </td>                        
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>
                            <a href="<?php echo SITE_URL;?>/index.php?r=offenceDefence/detailInfo" class="btn btn-default" role="button">返回</a>                            
                    </p>
                </div>                
            </div>           
        </div>
    </div>
    <div id="push"></div>
</div>