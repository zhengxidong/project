<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/11
 * Time: 23:55
 */

namespace Admin\Controller;
use Think\Controller;

class NewsController extends Controller{
    public function select(){
        $n = new \Admin\Model\NewsModel();
        $count = $n->count();
        $Page = getpage($count,3);
        $list = $n->Order('id desc')->limit($Page->firstRow.",".$Page->listRows)->select();
        $this->assign("arr",$list);
        $this->assign("page",$Page->show());
        $this->display();
    }
    public function add(){
        $arr = I("post.");
        if(!empty($arr)){
            $up = new \Think\Upload();
            $up->rootPath = './Public/Upload/newsimg/';
            $info = $up->uploadOne($_FILES['newspath']);
            $path = $info['savepath'].$info['savename'];
            $arr['newspath'] = $path;
            $arr['newsdate'] = time();
            $n = new \Admin\Model\NewsModel();
            $bool = $n->data($arr)->add();
            if($bool){
                $this->success("操作成功！",U('News/select'));
            }else{
                $this->error("操作失败！",U('News/select'));
            }
        }else{
            $this->display();
        }
    }
    public function edit($id){
        $n = new \Admin\Model\NewsModel();
        $this->assign("arr",$n->where(array('id'=>$id))->find());
        $this->display();
    }
    public function update(){
        $arr = I("post.");
        $n = new \Admin\Model\NewsModel();
        //根据id取出原图片路径
        $p = $n->where(array('id'=>$arr['id']))->field('newspath')->select();
        //如果上传有图片,就执行图片和其他信息更新
        if(!empty($_FILES['newspath']['name'])){
            //删除本地图片
            $yuanpath = "./Public/Upload/newsimg/".$p[0]['newspath'];
            if(file_exists($yuanpath)){
                unlink($yuanpath);
            }
            //上传新图片
            $up = new \Think\Upload();
            $up->rootPath = './Public/Upload/newsimg/';
            $info = $up->uploadOne($_FILES['newspath']);
            $path = $info['savepath'].$info['savename'];
            //数据入库
            $arr['newspath'] = $path;
            $arr['newsdate'] = time();
            $bool = $n->where(array('id'=>$arr['id']))->data($arr)->save();
            if($bool){
                $this->success("操作成功",U('News/select'));
            }else{
                $this->error("操作失败",U('News/select'));
            }
        }
        //没有上传新图片，执行信息更新
        else{
            $n = new \Admin\Model\NewsModel();
            $arr['newsdate'] = time();
            $arr['newspath'] = $p;
            $bool = $n->where(array('id'=>$arr['id']))->data($arr)->save();
            if($bool){
                $this->success("操作成功",U('News/select'));
            }else{
                $this->error("操作失败",U('News/select'));
            }
        }

    }
    public function delete($id=null){
        $p = D('news')->where(array('id'=>$id))->field('newspath')->select();
        $path = "./Public/Upload/newspath/".$p;
        if(file_exists($path)){
            unlink($path);
        }
        $bool = D('news')->where(array('id'=>$id))->delete();
        if($bool){
            $this->success("删除成功！",U('News/select'));
        }else{
            $this->error("删除失败！",U('News/select'));
        }
    }
}