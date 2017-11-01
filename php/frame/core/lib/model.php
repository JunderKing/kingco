<?php
namespace core\lib;
use core\lib\conf;
use Medoo\Medoo;

//class model extends \PDO
//{
    //public function __construct()
    //{
        //$database = conf::all('database');
        //try {
            //parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
        //} catch (\PDOException $e) {
            //echo '<br>Database exception<br>';
            //p($e->getMessage());
        //}
    //}
//}

class model extends Medoo
{
    public function __construct()
    {
        $option = conf::all('database');
        parent::__construct(array(
            'database_type' => $option['DATABASE'],
            'database_name' => $option['DBNAME'],
            'server' => $option['HOST'],
            'username' => $option['USERNAME'],
            'password' => $option['PASSWD']
        ));
    }
}
