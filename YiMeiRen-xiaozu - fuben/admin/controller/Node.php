<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/11
 * Time: 16:29
 */
require './controller/Controller.php';
class NodeController extends Controller{
    public function add(){
        if(!empty($_POST)){
            $node = new NodeModel();
            if($node->add()){
                echo "<script>location.href='?c=node&a=select'</script>";
            }else{
                echo "<script>alert('操作失败！');location.href='?c=node&a=select'</script>";
            }
        }else{
            $node = new NodeModel();
            $GLOBALS['smarty']->assign("arr",$node->select("select * from tb_node"));
            $GLOBALS['smarty']->display("template/Node/node_add.html");
        }
    }
    public function select(){
        $sele = new NodeModel();
        $sql ="select * from tb_node";
        $arr = $sele->select($sql);
        $GLOBALS['smarty']->assign("node",$arr);
        $GLOBALS['smarty']->display("template/node/node_list.html");
    }
    public function delete(){
        $dele = new NodeModel();
        if($dele->delete($_GET['id'])){
            echo "<script>location.href='?c=node&a=select';</script>";
        }
        else{
            echo "<script>alert('删除失败');location.href='?c=node&a=select';</script>";
        }
    }
    public function edit(){
        $node = new NodeModel();
        $arr = $node->edit("select * from tb_node");
        $node = $node->edit("select * from tb_node where id={$_GET['id']}");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->assign("node",$node);
        $GLOBALS['smarty']->display("template/Node/node_edit.html");
    }
    public function update(){
        $node = new NodeModel();
        $node->update();
        echo "<script>location.href='?c=node&a=select'</script>";
    }
}