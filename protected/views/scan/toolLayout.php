
    <div id=" bread">
        <ol class="breadcrumb">
           <li><a href="<?php echo SITE_URL?>/index.php?r=user/layout">首页</a></li>
           <li class="active">工具</li>
        </ol>
    </div>
<div class="clear"></div>
<div id="wrap">
    <div id="wrapInnerTop"></div>
	<div id="mainContainer">
            <div id="mainContent">
                <div id="centerContent">
                    <div id="newsShow"><div class="clear"></div>
                         <div id="newsTitle" class="breadcrumb">
                                <h3>工具选择：</h3>
                            </div>
                   <div id="newsContent">
                            <div id = "part1">
				<p align="center" >
                                    <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="漏洞扫描工具" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/plugin'" />
                                </p>
                            </div>
                            <div id = "part1">
                                <p align="center" >
                                    <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="系统监测" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/detect'" /> 
                            </div>
                            <div id = "part1">
                                <p align="center" >
                                    <input type="button" style="font-size:30px;width:220px;height:80px;" class="btn btn-default" role="button" value="手动验证" onclick ="location.href='<?php echo SITE_URL;?>/index.php?r=scan/selfcheck'" /> 
                                </p>
                            </div>
                        </div> 
                    </div>
            </div>
    </div>
</div></div>
