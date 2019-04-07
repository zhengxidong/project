<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/6
 * Time: 18:51
 */
class AddressModel{
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
    public function query($sql=null){
        $boolData = Db::getInstance()->query($sql);
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
    public function update($sql){
        $booldata= Db::getInstance()->query($sql);
        if($booldata){
            return true;
        }
        else{
            return false;
        }
    }
}