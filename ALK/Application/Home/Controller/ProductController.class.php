<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 15:54
 */

namespace Home\Controller;


use Think\Controller;

class ProductController extends Controller{
    public function select(){
        $count = D('product')->count();
        $Page = getpage($count,6);//count总数，每页显示6条
        $this->assign("arr",D("product")->limit($Page->firstRow.','.$Page->listRows)->select());
        $this->assign("page",$Page->show());
        $this->display();
    }
    public function productsdetail($id=null){
        $this->assign("arr",D('product')->where(array('id'=>$id))->find());
        $this->display();
    }
}