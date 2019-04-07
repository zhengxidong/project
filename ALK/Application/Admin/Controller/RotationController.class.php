<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/14
 * Time: 19:55
 */

namespace Admin\Controller;
use Think\Controller;

class RotationController extends Controller{
    public function select(){
        $this->assign("list",D('pic')->select());
        $this->display();
    }
    public function add(){
        $arr = I('post.');
        if(!empty($arr)){
            $up = new \Think\Upload();
            $up->rootPath = './Public/Upload/Rotation/';
            $info = $up->uploadOne($_FILES['picpath']);
            $path =$info['savepath'].$info['savename'];
            $arr['picpath'] = $path;
            $bool = D('pic')->data($arr)->add();
            if($bool){
                $this->success("操作成功！",U('Rotation/select'));
            }else{
                $this->success("操作成功！",U('Rotation/select'));
            }
        }else{
            $this->display();
        }
    }
    public function delete($id){
        $arr =D('pic')->where('id'==$id)->find();
        $path = "./Public/Upload/Rotation/".$arr['picpath'];
        if(file_exists($path)){
            unlink($path);
        }
        $bool = D('pic')->where('id'==$id)->delete();
        if($bool){
            $this->success("操作成功！",U('Rotation/select'));
        }else{
            $this->error("操作失败！",U('Rotation/select'));
        }
    }
}