<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/26
 * Time: 15:53
 */
require './controller/Controller.php';
class UserController extends Controller{
    public function select(){
        $us = new UserModel();
        $GLOBALS['smarty']->assign("arr",$us->select());
        $GLOBALS['smarty']->display("user/index.html");
    }

}