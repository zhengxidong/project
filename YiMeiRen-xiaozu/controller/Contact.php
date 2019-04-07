<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/24
 * Time: 20:27
 */
class ContactController{
    public function select(){
        $co = new ContactModel();
        $co->select("select * from tb_contact");
        $GLOBALS['smarty']->assign("contact",$co->select("select * from tb_contact"));
        $GLOBALS['smarty']->display("Contact/contact.html");
    }
}