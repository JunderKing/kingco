<?php
//入口文件
//1. 定义常量
//2. 加载函数库
//3. 启动框架
define('IMOOC', substr(__DIR__, 0, -5));
define('CORE', IMOOC.'/core');
define('APP', IMOOC.'/app');
define('MODULE', 'app');

include_once IMOOC."/vendor/autoload.php";
date_default_timezone_set('PRC');

define('DEBUG', true);

if (DEBUG) {
    $whoops = new \Whoops\Run;
    $errorTitle = 'Kinco Frameword Error';
    $option = new \Whoops\Handler\PrettyPageHandler;
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error', 'on');
} else {
    ini_set('display_error', 'off');
}

include_once CORE.'/common/function.php';

include_once CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();
