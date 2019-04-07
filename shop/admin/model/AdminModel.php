<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/2
 * Time: 17:29
 */
class AdminModel{
    public function select($sql){
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
        $boolData = Db::getInstance()->query("$sql");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
}