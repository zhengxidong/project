<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/8
 * Time: 18:01
 */
class UserModel{
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
        /*var_dump($_POST);
        exit;*/
        $username = $_POST['username'];
        $pw = sha1($_POST['password']);
        $sex = $_POST['sex'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $islocked = $_POST['islocked'];
        $roleid = $_POST['roleid'];
        $address =$_POST['address'];

        $resData = Db::getInstance()->query("insert into tb_user(id,username,password,roleid,email,phone,sex,address,islocked) values(null,'{$username}','{$pw}','{$roleid}','{$email}','{$phone}','{$sex}','{$address}','{$islocked}')");
        if($resData){
            return true;
        }else{
            return false;
        }
    }
    public function delete(){
        if(!empty($_GET['id'])&&is_numeric($_GET['id']))
        {
            $delete = Db::getInstance()->query("delete from tb_user where id=".$_GET['id']);
            if($delete){
                return true;
            }else{
                return false;
            }
        }
    }
    public function edit(){
        $role =Db::getInstance()->query("select * from tb_user where id=".$_GET['id']);
        $arr =Db::getInstance()->fetchAll($role);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }
    public function update(){
        $use = Db::getInstance()->query("
update tb_user set username='{$_POST['username']}',
sex='{$_POST['sex']}',phone='{$_POST['phone']}',email='{$_POST['email']}',islocked='{$_POST['islocked']}',roleid='{$_POST['roleid']}',
address='{$_POST['address']}' where id='{$_POST['id']}'");
        if($use){
            return true;
        }else{
            return false;
        }
    }
}