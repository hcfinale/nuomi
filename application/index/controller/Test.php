<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Test extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(){
        return $this->fetch('index');
    }
    public function massage(){
        $res = db('user')->where('id',4)->find();
        $res = json_encode($res);
        return $res;
    }
}
