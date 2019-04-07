<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/26
 * Time: 15:09
 */
class CategoryModel{
    public function select(){
        $select = Db::getInstance()->query("select * from tb_category");
        $arr = Db::getInstance()->fetchAll($select);
        if(!empty($arr))
        {
            return $arr;
        }
        else{
            return false;
        }
    }
}