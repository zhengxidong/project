<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 20:53
 */
require './controller/Controller.php';
class AttrController extends Controller{
    public function select(){
        $sel = new AttrModel();
        require BASE."/libs/page.php";
        $page = new Page($sel->getTotal(),10);
        if(isset($_GET['id'])){
            $GLOBALS['smarty']->assign("arr",$sel->select("select a.*,t.type from tb_attr a inner join tb_type t on a.typeid=t.id where t.id={$_GET['id']} limit {$page->start},{$page->show}"));
        }else{
            $GLOBALS['smarty']->assign("arr",$sel->select("select * from tb_attr limit {$page->start},{$page->show}"));
        }
        $attr ='attr';
        $delAll = 'delAll';
        $GLOBALS['smarty']->assign("attr",$attr);
        $GLOBALS['smarty']->assign("delAll",$delAll);
        $GLOBALS['smarty']->assign("pageinfo",$page->showPage("&c=attr&a=select"));
        $GLOBALS['smarty']->display("attr/Attr_list.html");
    }
    public function add(){
        if(empty($_POST)){
            $type = new TypeModel();
            $GLOBALS['smarty']->assign("arr",$type->select("select * from tb_type"));
            $GLOBALS['smarty']->display("attr/Attr_add.html");
        }
         else{
             $type = new AttrModel();
             if($type->add()){
                 echo "<script>location.href='?c=attr&a=select'</script>";
             }
             else{
                 echo "<script>alert('操作失败！');location.href='?c=attr&a=select'</script>";
             }
         }
    }
    public function delete(){
          $dele = new AttrModel();
            if($dele->delete($_GET['id'])){
                echo "<script>location.href='?c=attr&a=select'</script>";
            }
            else{
                echo "<script>alert('操作失败！');location.href='?c=attr&a=select'</script>";
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
        //取出属性
        $edit =  new AttrModel();
        //取出属性上级类型
        $type = new TypeModel();
        $GLOBALS['smarty']->assign("typearr",$type->select("select * from tb_type"));
        $GLOBALS['smarty']->assign("arr",$edit->sel());
        $GLOBALS['smarty']->display("attr/Attr_edit.html");
    }

    public function update(){
           $update = new AttrModel();
           if($update->update()){
               echo "<script>location.href='?c=attr&a=select'</script>";
           }
           else{
               echo "<script>alert('操作失败！');location.href='?c=attr&a=select'</script>";
           }
    }
    public function __call($fn,$param){
        exit('no this action');
    }
}