<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 18:20
 */

namespace Admin\Controller;
use Think\Controller;

class ProductController extends Controller{
    public function select(){
        $count = D('product')->count();
        $Page = getpage($count,3);
        $list = D('product')->Order("id desc")->limit($Page->firstRow.",".$Page->listRows)->select();
        $this->assign("list",$list);
        $this->assign("page",$Page->show());
        $this->display();
    }
    public function add(){
        $arr = I('post.');
        if(!empty($arr)){
            $up = new \Think\Upload();
            $up->rootPath = "./Public/Upload/Product/";
            $info = $up->uploadOne($_FILES['picpath']);
            $path = $info['savepath'].$info['savename'];
            $arr['picpath'] = $path;
            $bool = D('product')->data($arr)->add();
            if($bool){
                $this->success("操作成功！",U('Product/select'));
            }else{
                $this->error("操作失败！",U('Product/select'));
            }
        }else{
            $this->display();
        }
    }
    public function edit($id){
        $data['id'] = $id;
        D('product')->where($data)->find();
        $this->assign("list",D('product')->where($data)->find());
        $this->display();
    }
    public function update(){
        $arr = I('post.');
        $data['id'] = $arr['id'];
        $p = D('product')->where($data)->field("picpath")->select();
        if(!empty($_FILES['picpath']['name'])){
            //删除本地图片
            $yuanpath = "./Public/Upload/Product/".$p[0]['picpath'];
            if(file_exists($yuanpath)){
                unlink($yuanpath);
            }
            //上传图片
            $up = new \Think\Upload();
            $up->rootPath = "./Public/Upload/Product/";
            $info = $up->uploadOne($_FILES['picpath']);
            $path = $info['savepath'].$info['savename'];
            //数据入库
            $arr['picpath'] = $path;
            $data['id'] = $arr['id'];
            $bool = D('product')->where($data)->data($arr)->save();
            if($bool){
                $this->success("操作成功！",U('Product/select'));
            }else{
                $this->error("操作失败！",U('Product/select'));
            }
        }else{
            $arr['picpath'] = $p;
            $bool = D('product')->data($arr)->save();
            if($bool){
                $this->success("操作成功！",U('Product/select'));
            }else{
                $this->error("操作失败！",U('Product/select'));
            }
        }
    }
    public function delete($id=null){
        $data['id'] = $id;
        //删除本地图片
        $p = D('product')->where($data)->field("picpath")->select();
        $yuanpath = "./Public/Upload/Product/".$p[0]['picpath'];
        if(file_exists($yuanpath)){
            unlink($yuanpath);
        }
        $bool = D('product')->where($data)->delete();
        if($bool){
            $this->success("操作成功！",U('Product/select'));
        }else{
            $this->error("操作失败！",U('Product/select'));
        }
    }
}