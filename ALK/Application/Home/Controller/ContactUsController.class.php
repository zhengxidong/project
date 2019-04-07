<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 13:48
 */

namespace Home\Controller;


use Think\Controller;

class ContactUsController extends Controller{
    public function contactus(){
        $this->assign("arr",D("company")->select());
        $this->display();
    }
    public function recruitment(){
        $this->assign("arr",D("recruitment")->select());
        $this->display();
    }
}