<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 17:43
 */

namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller{
    public function chuangpw(){
        $arr = I("post.");
        if(!empty($arr)){
            unset($arr['pw']);
            unset($arr['renewpass']);

            $arr['password'] = sha1($arr['password']);
            $bool = D("admin")->where(array('id'=>$arr['id']))->setField('password',$arr['password']);

            if($bool){
                unset($_SESSION['admin']);
                /*$this->redirect('Login/login');*/
                //redirect(U('Login/login'));
                $this->success("修改成功，请重新登录！",U('Login/login'));
            }else{
                $this->error("操作失败！",U('Admin/chuangpw'));
            }
        }else{
            $admin = $_SESSION['admin'];
            $this->assign("admin",$admin);
            $this->display();
        }
    }
}