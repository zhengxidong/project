<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/8
 * Time: 15:33
 */
class UserController{
    public function userlist(){
        $sel = new UserModel();
        $arr = $sel->select("select * from tb_user");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display("template/User/userlist.html");
    }
    public function select(){
        $sel = new UserModel();
        $arr = $sel->select("select * from tb_user");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display("template/User/userlist.html");
    }
    public function add(){
        $use = new UserModel();
        $use->add();
    }
}