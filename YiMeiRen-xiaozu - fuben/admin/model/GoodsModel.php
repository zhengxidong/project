<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/26
 * Time: 21:07
 */
class GoodsModel{
    public function select($sql){
        $goods = Db::getInstance()->query($sql);
        $goodsarr = Db::getInstance()->fetchAll($goods);
        if(!empty($goodsarr)){
            return $goodsarr;
        }else{
            return false;
        }
    }
    public function delete($id=null){
        if(!empty($id)&&is_numeric($id)){
            return Db::getInstance()->query("delete from tb_goods where id={$id}");
        }else{
            return false;
        }
    }
    public function query($sql){
        $booldata = Db::getInstance()->query("$sql");
        if($booldata){
            return true;
        }else{
            return false;
        }
    }
}