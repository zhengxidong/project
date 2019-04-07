<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/27
 * Time: 23:13
 */
class CommentModel{
    public function select($sql){
        $co = Db::getInstance()->query($sql);
        $arr =Db::getInstance()->fetchAll($co);
        if(!empty($arr)){
            return $arr;
        }
        else{
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
    public function add($sql){
        $booldata = Db::getInstance()->query($sql);
        if($booldata){
            return true;
        }else{
            return false;
        }
    }
}