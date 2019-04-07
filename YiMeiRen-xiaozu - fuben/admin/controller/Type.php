<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 20:53
 */
require './controller/Controller.php';
class TypeController extends Controller{
    public function select(){
        $sel = new TypeModel();
        require BASE."/libs/page.php";
        $page = new Page($sel->getTotal(),10);
        $GLOBALS['smarty']->assign("arr",$sel->select("select * from tb_type limit {$page->start},{$page->show}"));
        $GLOBALS['smarty']->assign("pageinfo",$page->showPage("&c=type&a=select"));
        $GLOBALS['smarty']->display("type/type_list.html");
    }
    public function add(){
        if(empty($_POST)){
            $sele = new TypeModel();
            $GLOBALS['smarty']->assign("arr",$sele->select("select * from tb_type"));
            $GLOBALS['smarty']->display("type/type_add.html");
        }
         else{
             $sele = new TypeModel();
             if($sele->add()){
                 echo "<script>location.href='?c=type&a=select'</script>";
             }
             else{
                 echo "<script>alert('操作失败！');location.href='?c=type&a=select'</script>";
             }
         }
    }
    public function delete(){
          $dele = new TypeModel();
            if($dele->delete($_GET['id'])){
                echo "<script>location.href='?c=type&a=select'</script>";
            }
            else{
                echo "<script>alert('操作失败！');location.href='?c=category&a=select'</script>";
            }
        }
    public function delAll(){
        $dele = new AttrModel();
        if($dele->delAll(trim($_REQUEST['id']))){
            echo "<script>location.href='?c=attr&a=select'</script>";
        }
        else{
            echo "<script>alert('操作失败！');location.href='?c=attr&a=select'</script>";
        }
    }
    public function edit(){
        $edit =  new TypeModel();
        $GLOBALS['smarty']->assign("arr",$edit->sel());
        $GLOBALS['smarty']->display("type/type_edit.html");

    }
    public function update(){
           $update = new TypeModel();
           if($update->update()){
               echo "<script>location.href='?c=type&a=select'</script>";
           }
           else{
               echo "<script>alert('操作失败！');location.href='?c=type&a=select'</script>";
           }
    }
    public function __call($fn,$param){
        exit('no this action');
    }
}