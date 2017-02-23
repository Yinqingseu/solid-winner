
<div class="clear"></div>
<div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li><a href="<?php echo SITE_URL?>/index.php?r=scan/tool">工具</a></li>
           <li class="active">手动验证</li>
        </ol>
    </div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
    <div id="mainContainer">
            <div id="mainContent">
                <div id="newsShow">
                    <div id="newsTitle" class="breadcrumb">
                        <h3>手动验证</h3>
                    </div>
                    <div class="clear"></div>
                    <div id="newsContent">
                        <div id="div2">
                            <label >未知漏洞验证工具：</label> <br />
                            <div id = "divCenter">
                                <p>
                                <input type="button" style="font-size:17px;width:100px;height:40px;" 
                                       class="btn btn-default" role="button" value="插件" 
                                onclick ="location.href='#'" title="跳转到插件功能，选择目标插件安装在平台上供用户使用" />
                                </p>
                                <p>
                                <input type="button" style="font-size:17px;width:100px;height:40px;"
                                       class="btn btn-default" role="button" value="控制台" 
                                       onclick ="location.href='#'" title="提供cmd功能窗口，供用户使用" />
                                </p>
                                <p>
                                 <input type="button" style="font-size:17px;width:100px;height:40px;" 
                                        class="btn btn-default" role="button" value="脚本" 
                                        onclick ="location.href='#'" title="提供脚本输入窗口作用于平台，供用户使用" />
                                </p>
                            </div>
                            <p align="center">
                               确定新漏洞的存在， <a href="<?php echo SITE_URL;?>/index.php?r=scan/holeup" target="_blank">上传发现的未知漏洞</a>到系统漏洞库中。
                            </p>
                        </div>
                    </div>
                </div>
                    <div class="clear"></div>
    </div>
</div>
</div>




