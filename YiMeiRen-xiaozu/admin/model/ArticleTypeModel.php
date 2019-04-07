<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/17
 * Time: 20:20
 */
class ArticleTypeModel{
    public function select($sql){
        $user = Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($user);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }
    public function add(){
        $time = date("Y-m-d H:i:s",time());
        $resData = Db::getInstance()->query("insert into tb_articletype values(null,'{$_POST['articletypename']}','{$time}')");
        if($resData){
            return true;
        }else{
            return false;
        }
    }
    public function delete(){
        if(!empty($_GET['id'])&&is_numeric($_GET['id'])){
            $delete = Db::getInstance()->query("delete from tb_articletype where id=".$_GET['id']);
            if($delete){
                return true;
            }else{
                return false;
            }
        }
    }
    public function edit(){
        $role =Db::getInstance()->query("select * from tb_articletype where id=".$_GET['id']);
        $arr = Db::getInstance()->fetchAll($role);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }
    public function update(){
        $time = date("Y-m-d H:i:s",time());
        $type = Db::getInstance()->query("update tb_articletype set articletypename='{$_POST['articletypename']}',articletypetime='{$time}' where id='{$_POST['id']}'");
        if($type){
            return true;
        }else{
            return false;
        }
    }
}