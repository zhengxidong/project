<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 21:09
 */
class AttrModel{
    //添加属性
    public function add(){
        $attr = addslashes($_POST['attr']);
        $resData = Db::getInstance()->query("insert into tb_attr values(null,'{$attr}',{$_POST['typeid']})");
        if($resData){
            return true;
        }
        else{
            return false;
        }
    }
    //查出所有属性
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
    //删除属性
    public function delete($id=null){
        if (!empty($id) && is_numeric($id)) {
            return $delete = Db::getInstance()->query("delete from tb_attr where id=" . $_GET['id']);
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
        $sel = Db::getInstance()->query("select * from tb_attr where id=".$_GET['id']);
        $arr =Db::getInstance()->fetchAll($sel);
        /*var_dump($arr);
        exit;*/
        if(!empty($arr)){
            //$arr不为空则返回数据
            return $arr;
        }
        else{
            return false;
        }
    }

    //更新数据
    public function update(){
        $sql = Db::getInstance()->query("update tb_attr set attr='{$_POST['attr']}',typeid='{$_POST['typeid']}' where id='{$_POST['id']}'");
        if($sql){
           return true;
        }
        else{
            return false;
        }
    }
    //获取记录总数
    public function getTotal(){
        $arr =$this->select("select count(*) total from tb_attr");
        return $arr[0]['total'];
    }
}