<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 21:09
 */
class CategoryModel{
    //添加
    public function add(){
        /*var_dump($_POST);
        exit;*/
        $name = addslashes($_POST['name']);
        $type = addslashes($_POST['type']);
        $resData = Db::getInstance()->query("insert into tb_category values(null,'{$name}','{$_POST['father']}','{$type}')");
        if($resData){
            return true;
        }
        else{
            return false;
        }
    }
    //查出所有分类
    public  function select($sql){
        $select = Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($select);
        /*var_dump($arr);
        exit;*/
        if(!empty($arr)){
            return $arr;
        }
        else{
            return false;
        }
    }
    //删除分类
    public function delete($id=null){
        if (!empty($id) && is_numeric($id)) {
            if ($this->check($id)){
                echo "<script>alert('有子类不能删除');location.href='?c=category&a=select'</script>";
            return false;
        }else{
                return $delete = Db::getInstance()->query("delete from tb_category where id=" . $_GET['id']);
            }
    }
        else{
            return false;
        }
    }
    //检查分类下是否有子类
    public function check($id=null){
        $arr = $this->select("select * from tb_category");
            foreach($arr as $value){
            if($value['father']==$id)
            {
                return true;
                break;
            }
        }
        return false;
    }

    public function delAll($data){

        if (!empty($data)) {

            return $delete = Db::getInstance()->query("delete from tb_attr where id in(" . trim($_REQUEST['id']).")");
        }
        else{
            return false;
        }
    }
    public function sel(){
        $sel = Db::getInstance()->query("select * from tb_category where id=".$_GET['id']);
        $arr =Db::getInstance()->fetchAll($sel);
        if(!empty($arr)){
            return $arr;
        }
        else{
            return false;
        }
    }
    //获取所有类别
    public function seltype(){
        $selft = Db::getInstance()->query("select * from tb_category");
        $arrfather =Db::getInstance()->fetchAll($selft);
        if(!empty($arrfather)){
            return $arrfather;
        }
        else{
            return false;
        }
    }
    //更新数据
    public function update(){
        $sql = Db::getInstance()->query("update tb_category set name='{$_POST['name']}',father='{$_POST['father']}',type='{$_POST['type']}' where id='{$_POST['id']}'");
        if($sql){
           return true;
        }
        else{
            return false;
        }
    }

    public function getTotal(){
        $arr =$this->select("select count(*) total from tb_category");
        return $arr[0]['total'];
    }
}