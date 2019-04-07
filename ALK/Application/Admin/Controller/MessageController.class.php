<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/14
 * Time: 17:18
 */

namespace Admin\Controller;
use Think\Controller;

class MessageController extends Controller{
    public function select(){
        $this->assign("list",D('Message')->select());
        $this->display();
    }
    public function search(){
        $arr = I('post.');
        $data['name|phone'] = array('like',"%".$arr['keywords']."%");
        $list = D('message')->where($data)->select();
        $this->assign("list",$list);
        $this->display("select");
    }
    public function delete($id){
        $data['id'] = $id;
        $bool = D('message')->where($data)->delete();
        if($bool){
            $this->success("操作成功！",U('Message/select'));
        }else{
            $this->error("操作失败！",U('Message/select'));
        }
    }
}