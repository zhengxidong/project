<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/14
 * Time: 20:49
 */

namespace Admin\Controller;
use Think\Controller;

class QuestProductController extends Controller{
    public function select(){
        $sql = "select q.id,q.content,a.name from alk_tb_questproduct q
inner join alk_tb_questproducttype a on q.questproducttypeid=a.id";
        $this->assign("list",M()->query($sql));
        $this->display();
    }
    public function add(){
        $arr = I('post.');
        if(!empty($arr)){
            $bool = D('questproduct')->data($arr)->add();
            if($bool){
                $this->success("操作成功！",U('QuestProduct/select'));
            }else{
                $this->error("操作失败！",U('QuestProduct/select'));
            }
        }else{
            $this->assign("typelist",D('questproducttype')->select());
            $this->display();
        }

    }
    public function edit($id){
        $this->assign("typelist",D('questproducttype')->select());
        $data['id'] = $id;
        $this->assign("list",D('questproduct')->where($data)->select());
        $this->display();
    }
    public function update(){
        $arr = I('post.');
        $bool = D('questproduct')->data($arr)->save();
        if($bool){
            $this->success("操作成功！",U('QuestProduct/select'));
        }else{
            $this->error("操作失败！",U('QuestProduct/select'));
        }
    }
    public function delete($id=null){
        $data['id'] = $id;
        $bool = D('questproduct')->where($data)->delete();
        if($bool){
            $this->success("操作成功！",U('QuestProduct/select'));
        }else{
            $this->error("操作失败！",U('QuestProduct/select'));
        }
    }
}