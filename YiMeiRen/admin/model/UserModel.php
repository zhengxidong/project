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
        var_dump($_POST);
        exit;
    }
}