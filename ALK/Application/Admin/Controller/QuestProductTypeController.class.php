<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/14
 * Time: 23:48
 */

namespace Admin\Controller;
use Think\Controller;

class QuestProductTypeController extends Controller{
    public function select(){
        $this->assign("list",D('questproducttype')->select());
        $this->display();
    }
    public function add(){
        $arr = I('post.');
        if(!empty($arr)){
            $bool = D('questproducttype')->data($arr)->add();
            if($bool){
                $this->success("操作成功！",U('QuestProductType/select'));
            }else{
                $this->error("操作失败！",U('QuestProductType/select'));
            }
        }else{
            $this->display();
        }
    }
    public function edit($id){
        $data['id'] = $id;
        $this->assign("list",D('questproducttype')->where($data)->select());
        $this->display();
    }
    public function update(){
        $arr = I('post.');
        $bool = D('questproducttype')->data($arr)->save();
        if($bool){
            $this->success("操作成功！",U('QuestProductType/select'));
        }else{
            $this->error("操作失败！",U('QuestProductType/select'));
        }
    }
    public function delete($id=null){
        $data['id'] = $id;
        $bool = D('questproducttype')->where($data)->delete();
        if($bool){
            $this->success("操作成功！",U('QuestProductType/select'));
        }else{
            $this->error("操作失败！",U('QuestProductType/select'));
        }
    }
}