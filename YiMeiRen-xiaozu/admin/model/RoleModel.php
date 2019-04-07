<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/8
 * Time: 20:17
 */
class RoleModel{
    public function select($sql){
        $user = Db::getInstance()->query($sql);
        $arr =Db::getInstance()->fetchAll($user);
        if(!empty($arr)){
            return $arr;
        }
        else{
            return false;
        }
    }
    public function add(){
        $resData = Db::getInstance()->query("insert into tb_role values(null,'{$_POST['rolename']}','{$_POST['description']}')");
        if($resData){
            return true;
        }else{
            return false;
        }
    }
    public function delete(){
        if(!empty($_GET['id'])&&is_numeric($_GET['id']))
        {
            $delete = Db::getInstance()->query("delete from tb_role where id=".$_GET['id']);
            if($delete){
                return true;
            }else{
                return false;
            }
        }
    }
    public function edit(){
        $role =Db::getInstance()->query("select * from tb_role where id=".$_GET['id']);
        $arr =Db::getInstance()->fetchAll($role);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }
    public function update(){
        $use = Db::getInstance()->query("update tb_role set rolename='{$_POST['rolename']}',description='{$_POST['description']}' where id='{$_POST['id']}'");
        if($use){
            return true;
        }else{
            return false;
        }
    }
}