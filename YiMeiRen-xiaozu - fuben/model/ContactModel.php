<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/24
 * Time: 20:28
 */
class ContactModel{
    public function select($sql=null){
        $resData = Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($resData);
        if(!empty($arr)){
            return $arr;
        }
        else{
            return false;
        }
    }
}