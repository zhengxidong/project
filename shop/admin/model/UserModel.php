<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/26
 * Time: 15:53
 */
class UserModel{
    public function select(){
       $user = Db::getInstance()->query("select * from tb_user");
        $arr = Db::getInstance()->fetchAll($user);
        if(!empty($arr)){
            return $arr;
        }
        else{
            return false;
        }
    }
    public function loginIn(){
        $user = addslashes(trim($_POST['username']));
        $pw = sha1(addslashes(trim($_POST['password'])));
        $Sql = Db::getInstance()->query("select * from tb_user where username='{$user}' and password='{$pw}'");
        $ser =  Db::getInstance()->fetchAll($Sql);

        if(!empty($ser[0]['username']))
        {
            return $ser;
        }
        else{
            return false;
        }
    }
}