<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 20:53
 */
require './controller/Controller.php';
class CategoryController extends Controller{
    public function select(){
        $sel = new CategoryModel();
        require BASE."/libs/page.php";
        $page = new Page($sel->getTotal(),10);
        $GLOBALS['smarty']->assign("arr",$sel->select("select * from tb_category limit {$page->start},{$page->show}"));
        $GLOBALS['smarty']->assign("pageinfo",$page->showPage("&c=category&a=select"));
        $GLOBALS['smarty']->display("category/index.html");
    }
    public function add(){

        if(empty($_POST)){
            $sele = new CategoryModel();
            $GLOBALS['smarty']->assign("arr",$sele->select("select * from tb_category"));
            $GLOBALS['smarty']->display("category/add.html");
        }
         else{
             $sele = new CategoryModel();
             if($sele->add()){
                 echo "<script>alert('添加成功！');location.href='?c=category&a=select'</script>";
             }
             else{
                 echo "<script>alert('添加失败！');location.href='?c=category&a=select'</script>";
             }
         }
    }
    public function delete(){
          $dele = new CategoryModel();
            if($dele->delete($_GET['id'])){
                echo "<script>location.href='?c=category&a=select'</script>";
            }
            else{
                echo "<script>location.href='?c=category&a=select'</script>";
            }
        }
    public function delAll(){
        $dele = new AttrModel();
        if($dele->delAll(trim($_REQUEST['id']))){
            echo "<script>alert('操作成功！');location.href='?c=category&a=select'</script>";
        }
        else{
            echo "<script>alert('操作失败！');location.href='?c=category&a=select'</script>";
        }
    }
    public function edit(){
        $edit =  new CategoryModel();
        $GLOBALS['smarty']->assign("arr",$edit->sel());
        $GLOBALS['smarty']->assign("father",$edit->seltype());
        $GLOBALS['smarty']->display("category/edit.html");

    }
    public function update(){
           $update = new CategoryModel();
           if($update->update()){
               echo "<script>alert('操作成功！');location.href='?c=category&a=select'</script>";
           }
           else{
               echo "<script>alert('操作失败！');location.href='?c=category&a=select'</script>";
           }
    }
    public function __call($fn,$param){
        exit('no this action');
    }
}