<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';//Yii框架位置
$config=dirname(__FILE__).'/protected/config/main.php';//当前应用程序的主配置文件位置

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
define("APP","/index.php");
require_once($yii);
Yii::createWebApplication($config)->run();
