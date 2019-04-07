<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/26
 * Time: 14:48
 */
class AddressController{
    //用户地址
    public function select(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $ad = new AddressModel();
            $addres = $ad->select("select * from tb_address where userid='{$_GET['id']}'");
            $GLOBALS['smarty']->assign("address",$addres);
            $GLOBALS['smarty']->display("Address/address_list.html");
        }else{
            $arr=0;
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("User/user_center.html");
        }
    }
    //修改地址
    public function addressEdit(){
        if(!empty($_SESSION['user'])) {
            $GLOBALS['smarty']->assign("arr", $_SESSION['user']);
            $ad = new AddressModel();
            $adarr = $ad->select("select * from tb_address where id='{$_GET['id']}'");
            $GLOBALS['smarty']->assign("address", $adarr);
            $GLOBALS['smarty']->display("Address/address_edit.html");
        }else{
            $arr=0;
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("User/user_center.html");
        }
    }
}