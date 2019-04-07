<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/11
 * Time: 15:02
 */
class AdminModel
{
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
    public function add()
    {
        $pw = sha1($_POST['password']);
        $resData = Db::getInstance()->query("insert into tb_admin(id,username,password) values(null,'{$_POST['username']}','{$pw}')");
        $adminid = mysql_insert_id();

        $roleid = $_POST['roleid'];
        $roleData = Db::getInstance()->query("insert into tb_admin_role values(null,'{$adminid}','{$roleid}')");
        if ($resData&&$roleData) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($id=null)
    {
        if (!empty($id)&&is_numeric($id))
        {
            Db::getInstance()->query("delete from tb_admin where id=".$_GET['id']);
            if($this->checkjilu($id))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else{
            return false;
        }
    }
    public function checkjilu($id=null){
        $rr = Db::getInstance()->query("select * from tb_admin_role");
        $ar = Db::getInstance()->fetchAll($rr);
        foreach($ar as $value){
            if($value['userid']==$id){
                $adr = $value['id'];
               $bool = Db::getInstance()->query("delete from tb_admin_role where id={$adr}");
                if($bool){
                    return true;
                }
                return true;
                break;
            }
        }
        return false;
    }
    public function edit($sql){
        $node =Db::getInstance()->query($sql);
        $arr =Db::getInstance()->fetchAll($node);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }
    public function update(){
        $use = Db::getInstance()->query("update tb_admin set username='{$_POST['username']}',password='{$_POST['password']}' where id='{$_POST['id']}'");
        if($use){
            return true;
        }else{
            return false;
        }
    }
}