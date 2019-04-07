<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/11
 * Time: 21:46
 */

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    public function check(){
        $arr = I("post.");
        $username = $arr['name'];
        $pw = sha1($arr['password']);
        $lg = M("admin")->where(array('username'=>$username,'password'=>$pw))->find();

        if(!empty($lg)){
            $_SESSION['admin'] = $lg;
            /*$this->redirect('Index/index');*/
            $this->success("登录成功！",U('Admin/Index/index'));
        }else{
            $this->error("登录失败！",U('Login/login'));
        }
    }
    public function logout(){
        unset($_SESSION['admin']);
        $this->success("正在退出。。。",U('Login/login'));
    }
}