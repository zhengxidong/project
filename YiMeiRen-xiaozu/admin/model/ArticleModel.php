<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/20
 * Time: 16:41
 */
class ArticleModel{
    public function select($sql){
        $user = Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($user);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }
    public function add($sql){

        $resData = Db::getInstance()->query($sql);
        if($resData){
            return true;
        }else{
            return false;
        }
    }
    public function delete(){
        if(!empty($_GET['id'])&&is_numeric($_GET['id'])){
            $delete = Db::getInstance()->query("delete from tb_article where id=".$_GET['id']);
            if($delete){
                return true;
            }else{
                return false;
            }
        }
    }
    public function edit(){
        $role =Db::getInstance()->query("select * from tb_article where id=".$_GET['id']);
        $arr = Db::getInstance()->fetchAll($role);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }
    public function update(){
        $time = date("Y-m-d H:i:s",time());
        $type = Db::getInstance()->query("update tb_article set articletitle='{$_POST['articletitle']}',
articlecontent='{$_POST['articlecontent']}',
articletypeid='{$_POST['articletypeid']}',
adminid='{$_POST['adminid']}',
articletime='{$time}' where id='{$_POST['id']}'");
        if($type){
            return true;
        }else{
            return false;
        }
    }
}