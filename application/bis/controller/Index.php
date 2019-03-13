<?php
namespace app\bis\controller;

use think\Session;
class Index extends Base
{
    public function index()
    {
//        if (request()->time() - session('bisAccount.last_login_time') > 2*60){
//            $this->redirect('bis/login/index');
//        }
        return $this->fetch('index',[
            'title' => 'o2o平台-商户中心',
        ]);
    }
    public function info(){
        // $res= send_mail("691301630@qq.com","蒋斌","邮箱提醒","蒋斌您的邮箱已经被盗，如果不是本人操作，请重置你的密码");
        $thinkphp = [
            'one'   =>  'think',
            'two'   =>  'php',
        ];
        Session::set('name',$thinkphp,'bis');
        if (Session::has('name')){
            return Session::get('name')."欢迎管理员";
        }else{
            return "欢迎光临".Session::get('name.one');;
        }
    }
}