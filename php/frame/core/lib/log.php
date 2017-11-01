<?php
namespace core\lib;
use core\lib\conf;

class log
{
    static $class;
    //1. 确定日志的储存方式
    //2. 写日志

    public static function init()
    {
        //确定储存方式
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    public static function log($name, $file = 'log')
    {
        self::$class->log($name, $file);
    }
}
