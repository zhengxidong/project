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
        $GLOBALS['smarty']->display("template/User/member_list.html");
    }
    public function add(){
        if(empty($_POST)){
            $role = new RoleModel();
            $arr = $role->select("select * from tb_role");
            $GLOBALS['smarty']->assign("role",$arr);
            $GLOBALS['smarty']->display("template/User/member_add.html");
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
        $role = new RoleModel();
        $arr = $role->select("select * from tb_role");
        $GLOBALS['smarty']->assign("role",$arr);
        $ed = new UserModel();
        $arr =$ed->select("select * from tb_user where id={$_GET['id']}");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display("template/User/member_edit.html");
    }
    public function update(){
        $role = new UserModel();
        $role->update();
        echo "<script>location.href='?c=user&a=select'</script>";
    }
}