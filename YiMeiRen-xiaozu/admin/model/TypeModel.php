<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 21:09
 */
class TypeModel{
    public function add(){
        $type = addslashes($_POST['type']);
        $resData = Db::getInstance()->query("insert into tb_type values(null,'{$type}')");
        if($resData){
            return true;
        }
        else{
            return false;
        }
    }
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
    public function delete($id=null){
        if (!empty($id) && is_numeric($id)) {
            return $delete = Db::getInstance()->query("delete from tb_type where id=" . $_GET['id']);
        }
        else{
            return false;
        }
    }
    public function delAll($data){

        if (!empty($data)) {

            return $delete = Db::getInstance()->query("delete from tb_attr where id in(" . trim($_REQUEST['id']).")");
        }
        else{
            return false;
        }
    }
    //查出对应id的信息
    public function sel(){
        $sel = Db::getInstance()->query("select * from tb_type where id=".$_GET['id']);
        $arr =Db::getInstance()->fetchAll($sel);
        if(!empty($arr)){
            //$arr不为空则返回数据
            return $arr;
        }
        else{
            return false;
        }
    }
    public function update(){
        $sql = Db::getInstance()->query("update tb_type set type='{$_POST['type']}' where id='{$_POST['id']}'");
        if($sql){
           return true;
        }
        else{
            return false;
        }
    }
    //获取记录总数
    public function getTotal(){
        $arr =$this->select("select count(*) total from tb_type");
        return $arr[0]['total'];
    }
}