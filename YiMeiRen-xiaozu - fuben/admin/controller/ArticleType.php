<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/17
 * Time: 20:20
 */
require './controller/Controller.php';
class ArticleTypeController extends Controller{
    public function select(){
        $type = new ArticleTypeModel();
        $typearr = $type->select("select * from tb_articletype");
        $GLOBALS['smarty']->assign("arr",$typearr);
        $GLOBALS['smarty']->display("Articletype/articletype_list.html");
    }
    public function add(){
        if(!empty($_POST)){
            $type = new ArticleTypeModel();
            if($type->add()){
                echo "<script>location.href='?c=articletype&a=select'</script>";
            }
            else{
                echo "<script>alert('操作失败');location.href='?c=articletype&a=select'</script>";
            }
        }else{
            $GLOBALS['smarty']->display("articletype/articletype_add.html");
        }

    }
    public function delete(){
           $type = new ArticleTypeModel();
           if($type->delete()){
               echo "<script>location.href='?c=articletype&a=select'</script>";
           }else{
               echo "<script>alert('操作失败');location.href='?c=articletype&a=select'</script>";
           }

    }
    public function edit(){
         $type =new ArticleTypeModel();
         $arr = $type->edit();
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display("articletype/articletype_edit.html");
    }
    public function update(){
        $type = new ArticleTypeModel();
        if($type->update()){
            echo "<script>location.href='?c=articletype&a=select'</script>";
        }
        else{
            echo "<script>alert('操作失败');location.href='?c=articletype&a=select'</script>";
        }
    }
}