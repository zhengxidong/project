<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/6
 * Time: 18:51
 */
class UserModel{
    public function select($sql=null){
        $id = $_GET['id'];
        $resData = Db::getInstance()->query("select * from tb_user where id='{$id}'");
        $arr = Db::getInstance()->fetchAll($resData);
        if(!empty($arr)){
            return $arr;
        }
        else{
            return false;
        }
    }
    public function query($sql=null){
        $boolData = Db::getInstance()->query($sql);
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
    public function update(){

        $sql = Db::getInstance()->query("update tb_category set name='{$_POST['name']}',father='{$_POST['father']}',type='{$_POST['type']}' where id='{$_POST['id']}'");
        if($sql){
            return true;
        }
        else{
            return false;
        }
    }
}