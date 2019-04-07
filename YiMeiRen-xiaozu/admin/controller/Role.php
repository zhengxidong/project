<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/8
 * Time: 20:20
 */
require './controller/Controller.php';
class RoleController extends Controller{
    public function select(){
        $sele = new RoleModel();
        $arr = $sele->select("select * from tb_Role");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display("template/role/select.html");
    }
    public function add(){
        if(empty($_POST)){
            $GLOBALS['smarty']->display("template/role/add.html");
        }else{
            $role =new RoleModel();
            if($role->add()){
                echo "<script>location.href='?c=role&a=select'</script>";
            }else{
                echo "<script>alert('操作失败！');location.href='?c=role&a=select'</script>";
            }
        }

    }
    public function delete(){
        $dele = new RoleModel();
        if($dele->delete()){
            echo "<script>location.href='?c=role&a=select'</script>";
        }
        else{
            echo "<script>alert('操作失败');location.href='?c=role&a=select'</script>";
        }
    }
    public function edit(){
        $role = new RoleModel();
        $arr = $role->edit();
        $GLOBALS['smarty']->assign("role",$arr);
        $GLOBALS['smarty']->display("template/role/edit.html");
    }
    public function update(){
        $role = new RoleModel();
        $role->update();
        echo "<script>location.href='?c=role&a=select'</script>";
    }
    public function userlist(){
    $le = new RoleModel();
        $userlist =  $le->select("select tb_admin.id,tb_admin.username from tb_admin inner join
tb_admin_role on tb_admin.id=tb_admin_role.userid inner join
tb_role on tb_admin_role.roleid=tb_role.id where tb_role.id='{$_GET['id']}'");

        $GLOBALS['smarty']->assign("arr",$userlist);
        $GLOBALS['smarty']->display("template/Role/userlist.html");
    }
}