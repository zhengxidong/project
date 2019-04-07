<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/15
 * Time: 16:53
 */

namespace Admin\Controller;
use Think\Controller;

/**
 * Class ColumnController
 * @package Admin\Controller
 * 栏目
 */
class ColumnController extends Controller{
    public function select(){
        $this->assign("list",D('Column')->select());
        $this->display();
    }
    public function add(){
        $arr = I('post.');
        if(!empty($arr)){
            $bool = D('column')->data($arr)->add();
            if($bool){
                $this->success("操作成功！",U('Column/select'));
            }else{
                $this->error("操作失败！",U('Column/select'));
            }
        }else{
            $this->display();
        }
    }
    public function edit($id){
        $this->assign("list",D('column')->where('id'==$id)->select());
        $this->display();
    }
    public function update(){
        $arr = I('post.');
        $bool = D('column')->data($arr)->save();
        if($bool){
            $this->success("操作成功！",U('Column/select'));
        }else{
            $this->error("操作失败！",U('Column/select'));
        }
    }
    public function delete($id=null){
        $bool = D('column')->where(array('id'=>$id))->delete();

        if($bool){
            $this->success("操作成功！",U('Column/select'));
        }else{
            $this->error("操作失败！",U('Column/select'));
        }
    }
    //删除全部
    public function delall($id=null){
        $arr['id'] =array("in",$id);
        $bool = D("column")->where($arr)->delete();
        if($bool){
            $this->success("操作成功！",U('Column/select'));
        }else{
            $this->error("操作失败！",U('Column/select'));
        }
    }
}