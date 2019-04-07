<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 18:31
 */
require './controller/Controller.php';
class IndexController extends Controller{
     public function index(){
         $GLOBALS['smarty']->display("template/index.html");
     }

   /* public function category(){
        $sel = new CategoryModel();
        require BASE."/libs/page.php";
        $page = new Page($sel->getTotal(),3);
        $GLOBALS['smarty']->assign("arr",$sel->select("select * from tb_category limit {$page->start},{$page->show}"));
        $GLOBALS['smarty']->assign("pageinfo",$page->showPage("&c=category&a=select"));
        $GLOBALS['smarty']->display("template/category/index.html");
    }*/
    public function login(){
        $GLOBALS['smarty']->display("login.html");
    }
    public function loginIn(){
        if(!empty($_POST))
        {
            $us = new UserModel();
            $user = $us->loginIn();
            /*var_dump($user);
            exit;*/
            if(!empty($user))
            {
                $isUser = 1;
                $GLOBALS['smarty']->assign("isUser",$isUser);
                $GLOBALS['smarty']->display("index.html");
                echo "<script>alert('登录成功');location.href='?c=index&a=index';</script>";
            }
            else
            {
                echo "<script>alert('账号或密码错误！');location.href='?c=index&a=login';</script>";
            }

        }
        else
        {
            echo "<script>alert('账号或密码！');location.href='?c=index&a=login';</script>";
        }
    }
}