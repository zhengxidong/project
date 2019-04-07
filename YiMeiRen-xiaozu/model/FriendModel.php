<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/27
 * Time: 15:17
 */

class FriendModel{

    public function select(){
        $resData = Db::getInstance()->query("select * from tb_friendlink");
        $arr = Db::getInstance()->fetchAll($resData);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }



}