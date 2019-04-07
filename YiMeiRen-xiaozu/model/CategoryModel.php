<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/18
 * Time: 16:48
 */
class CategoryModel{
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