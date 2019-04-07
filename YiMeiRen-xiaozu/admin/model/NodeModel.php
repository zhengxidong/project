<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/11
 * Time: 16:29
 */
class NodeModel
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
        $resData = Db::getInstance()->query("insert into tb_node values(null,'{$_POST['pid']}','{$_POST['name']}','{$_POST['title']}','{$_POST['level']}')");
        if ($resData) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($id=null){
        if(!empty($id)&&is_numeric($id)){
            if($this->check($id)){
                echo "<script>alert('有子节点不能删除');location.href='?c=node&a=select';</script>";
                return false;
            }
            else{
                return Db::getInstance()->query("delete from tb_node where id={$id}");
            }
        }
        else
        {
            return false;
        }
    }
    public function check($id=null){
        $arr =$this->select("select * from tb_node");
        foreach($arr as $value){
            if($value['pid']==$id){
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
        $use = Db::getInstance()->query("update tb_node set pid='{$_POST['pid']}',name='{$_POST['name']}',title='{$_POST['title']}',level='{$_POST['level']}' where id='{$_POST['id']}'");
        if($use){
            return true;
        }else{
            return false;
        }
    }
}