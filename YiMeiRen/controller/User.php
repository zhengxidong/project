<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/9
 * Time: 15:47
 * 用户控制器
 */
class UserController{
    public function usercenter(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $GLOBALS['smarty']->display("User/user_center.html");
        }else{
            $arr=0;
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("User/user_center.html");
        }
    }
    public function userinfo(){
        if(!empty($_SESSION['user'])){
            $use = new UserModel();
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $GLOBALS['smarty']->assign("use",$use->select());
            $GLOBALS['smarty']->display("User/user_info.html");
        }else{
            $arr=0;
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("User/user_info.html");
        }
    }
    public function update(){

    }
}