<?php
namespace app\bis\controller;
use think\Controller;
class Login extends  Controller
{
	public function index()
    {
        if(request()->isPost()) {
            // 登录的逻辑
            //获取相关的数据
            $data = input('post.');
            // 通过用户名 获取 用户相关信息
            // 严格的判定
            $ret = model('BisAccount')->get(['username'=>$data['username']]);
            if(!$ret || $ret->status !=1 ) {
                $this->error('改用户不存在，获取用户未被审核通过');
            }
            //$ret->password != md5($data['password'].$ret->code)
            if($ret->password != md5($data['password'].$ret->code)) {
                $this->error('密码不正确');
            }
            db('BisAccount')->where('id',$ret->id)->setField('last_login_time', time());
            // model('BisAccount')->updateById(['last_login_time'=>time()], $ret->id);
            // 保存用户信息  bis是作用域
            session('bisAccount', $ret, 'bis');
//            dump(session('bisAccount.username'));die;
            $this->success("登录成功",url('Index/index'));
        }else {
            // 获取session
            $account = session('bisAccount', '', 'bis');
            if($account && $account->id) {
                $this->redirect(url('index/index'));
            }
            return $this->fetch();
        }
    }

    public function logout() {
        // 清除session
        session(null, 'bis');
        // 跳出
        $this->redirect('login/index');
    }
}