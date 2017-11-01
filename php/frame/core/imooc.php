<?php

namespace core;

class imooc
{
    public static $classMap = array();
    public $assign;

    public static function run()
    {
        \core\lib\log::init();
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP."/ctrl/$ctrlClass".'Ctrl.php';
        $ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if (is_file($ctrlFile)) {
            include_once $ctrlFile;
            $ctrl = new $ctrlClass;
            $ctrl->$action();
            \core\lib\log::log('ctrl:'.$ctrlClass.'    '.'action:'.$action);
        } else {
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    public static function load($class)
    {
        //自动加载类库
        // new \core\route();
        // $class = '\core\route';
        //IMOOC.'/core/courte.php';
        if (isset($classMap[$class])) {
            return true;
        }
        $class = str_replace('\\', '/', $class);
        $file = IMOOC.'/'.$class.'.php';
        if (is_file($file)) {
            include_once $file;
            self::$classMap[$class] = $class;
        } else {
            return false;
        }
    }

    public function assign($key, $value)
    {
        $this->assign[$key] = $value;
    }

    public function display($file)
    {
        $file = APP.'/view/'.$file;
        if (is_file($file)) {
            //extract($this->assign);
            //include_once $file;
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/view');
            $twig = new \Twig_Environment($loader, array(
                'cache' => IMOOC.'/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate('index.html');
            $template->display($this->assign ? $this->assign : array());
        }
    }
}
