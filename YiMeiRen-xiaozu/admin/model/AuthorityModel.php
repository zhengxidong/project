<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/11
 * Time: 15:03
 */
class AuthorityModel{
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

    public function add($sql)
    {
        $resData = Db::getInstance()->query($sql);
        if ($resData) {
            return true;
        } else {
            return false;
        }
    }
}