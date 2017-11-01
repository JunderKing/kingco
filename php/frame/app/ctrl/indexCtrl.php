<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $this->assign('data', 'Hello frame');
        $this->display('index.html');
        //p('IndexController<br>');
        //$model = new \core\lib\model();
        //$sql = 'select * from test';
        //$ret = $model->query($sql);
        //$result = $ret->fetchAll();
        //var_dump($result);
        //$data = 'Hello world';
        //$this->assign('data', $data);
        //$this->display('index.html');

        $testTable = new \app\model\test();
        //$ret = $model->select('test', '*');
        $ret = $testTable->lists();
        dump($ret);
    }

    public function test()
    {
        $data = 'test';
        $this->assign('data', $data);
        $this->display('test.html');
    }
}
