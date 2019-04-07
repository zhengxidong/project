<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/11
 * Time: 18:42
 */
class LoginModel{
    public function select($sql)
    {
        $sele = Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($sele);
        if (!empty($arr)) {
            return $arr;
        } else {
            return false;
        }
    }
}