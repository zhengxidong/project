<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 11:55
 */

namespace Home\Controller;
use Think\Controller;

class NewsController extends Controller{
    public function news(){

        $count = D('news')->count();
        /*$Page = new \Think\Page($count,3);*/
        $Page = getpage($count,3);//count总记录，每页显示3条
        $list = D("news")->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign("arr",$list);
        $this->assign('page',$Page->show());
        $this->display();
    }
    public function newsdetail($id=null){
        $arr = D("news")->where(array('id'=>$id))->find();
        $this->assign("arr",$arr);
        $this->display();
    }
}