<?php
namespace core\lib;
use core\lib\conf;

class route
{
    public $ctrl;
    public $action;
    
    public function __construct()
    {
        // xxx.com/index/index
        // 1. 隐藏index.php
        // 2. 获取URL参数部分
        // 3. 返回对应控制器和方法
        //
        if ($_SERVER['REQUEST_URI']) {
            ///index/index
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/', substr($path, 16));
            $this->ctrl = conf::get('CTRL', 'route');
            $this->action = conf::get('ACTION', 'route');
            if (isset($patharr[0]) && $patharr[0]) {
                $this->ctrl = $patharr[0];
                unset($patharr[0]);
            }
            if (isset($patharr[1]) && $patharr[1]) {
                $this->action = $patharr[1];
                unset($patharr[1]);
            }
            //url多余部分转换成GET
            $count = count($patharr) + 2;
            $i = 2;
            while($i < $count - 1){
                $_GET[$patharr[$i]] = $patharr[$i + 1];
                $i = $i + 2;
            }
        } else {
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}
