<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
       
        return 'rpc hello,环境配置好喽！';
 
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
