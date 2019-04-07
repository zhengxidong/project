<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/27
 * Time: 15:17
 */

class FriendModel{
    public function add($pith=null){
        $web= addslashes($_POST['website']);
        $boolData = Db::getInstance()->query("insert into tb_friendlink values(null,'{$pith}','{$web}')");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }

    public function select($sql){
        $resData = Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($resData);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }

    public function delete($id=null){
        if(!empty($id)&&is_numeric($id)){
            if($this->check($id)){
                echo "<script>alert('有子类不能删除');location.href='?c=category&a=select'</script>";
                return false;
            }else{
                return  Db::getInstance()->query("delete from tb_category where id={$id}");
            }
        }else{
            return false;
        }
    }

}