<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/11
 * Time: 15:01
 */
require './controller/Controller.php';
class AdminController extends Controller{
    public function add(){
        //如果为空，把角色附加到视图
        if(empty($_POST)){
            $sele = new RoleModel();
            $arr = $sele->select("select * from tb_Role");

            $GLOBALS['smarty']->assign("role",$arr);
            $GLOBALS['smarty']->display("template/Admin/admin_add.html");
        }else{
            //不为空，将数据入库
            $role =new AdminModel();
            if($role->add()){
                echo "<script>location.href='?c=admin&a=select'</script>";
            }else{
                echo "<script>alert('操作失败！');location.href='?c=admin&a=select'</script>";
            }
        }
    }
    //查出所有管理员
    public function select(){
        $sele = new AdminModel();
        $sql ="select a.id,a.username,r.rolename from tb_admin a inner join tb_admin_role ar on a.id=ar.userid inner join tb_role r on ar.roleid=r.id";
        $arr = $sele->select($sql);

        $GLOBALS['smarty']->assign("admin",$arr);
        $GLOBALS['smarty']->display("template/Admin/admin_list.html");
    }
    public function delete(){
        require BASE.'/libs/db.php';
        $dele = new AdminModel();
        if($dele->delete($_GET['id'])){
            echo "<script>location.href='?c=admin&a=select';</script>";
        }
        else{
            echo "<script>alert('删除失败');location.href='?c=admin&a=select';</script>";
        }
    }
    public function edit(){
        $node = new AdminModel();
        $role = new RoleModel();
        $arrx = $role->select("select * from tb_role");
        $arr = $node->edit("select * from tb_admin where id={$_GET['id']}");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->assign("role",$arrx);
        $GLOBALS['smarty']->display("template/Admin/admin_edit.html");
    }
    public function update(){
        $adm = new AdminModel();
        $adm->update();
        echo "<script>location.href='?c=admin&a=select'</script>";
    }
}