<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/8
 * Time: 15:33
 */
require './controller/Controller.php';
class UserController extends Controller{
    public function select(){
        $sel = new UserModel();
        $arr = $sel->select("select * from tb_user");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display("template/user/select.html");
    }
    //搜索
    public function search(){
        $sj = strtotime($_POST['sj']);
        $sjtwo = strtotime($_POST['sjtwo']);
        $co = new UserModel();
        //时间区间搜索
        if(!empty($_POST['sj'])&&!empty($_POST['sjtwo']))
        {
            $coarr = $co->select("select * from tb_user where {$sjtwo}<=regtime and regtime>={$sj}");
            $GLOBALS['smarty']->assign("arr",$coarr);
            $GLOBALS['smarty']->display("user/select.html");
        }
        //带时间区间、名称搜索
        if(!empty($_POST['sj'])&&!empty($_POST['sjtwo'])&&!empty($_POST['name'])){
            $coarr = $co->select("select * from tb_user where {$sjtwo}<=regtime and regtime>={$sj} and username='{$_POST['name']}'");
            $GLOBALS['smarty']->assign("arr",$coarr);
            $GLOBALS['smarty']->display("user/select.html");
        }
        //带名称搜索
        if(!empty($_POST['name'])){
            $coarr = $co->select("select * from tb_user where username='{$_POST['name']}'");
            $GLOBALS['smarty']->assign("arr",$coarr);
            $GLOBALS['smarty']->display("user/select.html");
        }

    }
    public function add(){
        if(empty($_POST)){
            $GLOBALS['smarty']->display("template/user/add.html");
        }
        else{
            $sele = new UserModel();
            if($sele->add()){
                echo "<script>location.href='?c=user&a=select'</script>";
            }
            else{
                echo "<script>alert('操作失败');location.href='?c=user&a=select'</script>";
            }

        }
    }
    public function delete(){
        $dele =new UserModel();
        if($dele->delete()){
            echo "<script>location.href='?c=user&a=select'</script>";
        }
        else{
            echo "<script>alert('操作失败');location.href='?c=user&a=select'</script>";
        }
    }
    public function edit(){
        $ed = new UserModel();
        $arr =$ed->select("select * from tb_user where id={$_GET['id']}");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display("template/user/edit.html");
    }
    public function update(){
        $role = new UserModel();
        $role->update();
        echo "<script>location.href='?c=user&a=select'</script>";
    }
}