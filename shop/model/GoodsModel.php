<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/18
 * Time: 23:28
 */
class GoodsModel{
    public  function select($sql){
        $select = Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($select);
        if(!empty($arr)){
            return $arr;
        }
        else{
            return false;
        }
    }
}