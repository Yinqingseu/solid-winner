<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';//  /../根目录
$config=dirname(__FILE__).'/protected/config/main.php';//protected与index同级目录,  /./上一级目录

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);//在生产环境中删除此行
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);



require_once (dirname(__FILE__).'/protected/config/constant.php');//引入已经定义好的系统常量，以及CSS,JS,IMG等文件的路径
require_once(dirname(__FILE__).'/protected/config/globle.php');//加载全局函数库  

require_once($yii);
Yii::createWebApplication($config)->run();
