<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/11
 * Time: 20:47
 */

namespace Home\Controller;
use Think\Controller;

class CompanyController extends Controller{
    public function company(){
        $c = new \Home\Model\CompanyModel();
        $this->assign("arr",$arr = $c->select());
        $this->display();
    }
}