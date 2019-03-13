<?php
namespace app\admin\controller;

use think\Controller;
class Index extends  Controller
{
    public function index(){
        return $this->fetch();
    }
	public function test() {
        dump(\Map::getLngLat('北京昌平沙河地铁'));
		return 'singwa';
	}
    public function map() {
        return \Map::staticimage('南京市南京南站');
    }
    public function welcome() {
        // \phpmailer\Email::send('691301630@qq.com','tp5-emaiil','sucess-hala');
        //return '发送邮件成功';
        //return $this->fetch();
        //$arr = array('A' => "java",'B' => "web",'C' => "ui",'D' => "python",'E' => "it",'F' => "cisco",'G' => "huawei",'H' => "redhat");
        //return json_encode($arr);
        // $json = '{"A":"java","B":"web","C":"ui","D":"python","E":"it","F":"cisco","G":"huawei","H":"redhat"}';
        // dump(json_decode($json,true));
        //return json_decode($json,true);
        session('name','欢迎来到o2o主后台首页!');
        return session('name');
    }
    public function sms(){
        return $this->fetch();
    }
    public function smsmassage(){
        //dump(input('post.'));
        $code = input('post.code');
        $phone = input('post.phone');
        
        //演示短信接口的使用
        $ms=new \Sms();
        //模板短信
        $result=$ms->sendTplMsg("JSM42416-0001","$phone","@1@=$code");
        $xml = simplexml_load_string($result);
        if ($xml->mt->status=="0")
        {   //成功则返回
            session('smscode',$code);
            //return $code;
        }else{
            //echo  $xml->mt->status;
            echo  $xml->mt->msg;
            //echo "发送失败";
        }
    }
    public function sendsms(){
        $res = input('post.');
        $smscode = session('smscode');
        if((string)$res['yzm'] != $smscode){
            echo "发送失败，程序无法再执行咯";
            exit;
        }elseif((string)$res['yzm'] == $smscode){
            
            echo "发送验证码，验证核对成功";
        }else
        echo "验证码验证失败";
        
    }
}
