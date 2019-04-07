<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/27
 * Time: 23:59
 */
require './controller/Controller.php';
class CommentController extends Controller{
    public function select(){
        $co = new CommentModel();
        $coarr = $co->select("select c.id,c.comment,c.commenttime,u.username,o.goodsname from tb_user u
inner join tb_comment c on u.id=c.userid inner join tb_order o on c.orderid=o.id");
        $GLOBALS['smarty']->assign("arr",$coarr);
        $GLOBALS['smarty']->display("Comment/comment_list.html");
    }
    //搜索
    public function search(){
        //时间区间搜索
        if(!empty($_POST['sj'])&&!empty($_POST['sje']))
        {
            $co = new CommentModel();
            $coarr = $co->select("select c.id,c.comment,c.commenttime,u.username,o.goodsname from tb_user u
inner join tb_comment c on u.id=c.userid inner join tb_order o on c.orderid=o.id where {$_POST['sje']}<=commenttime and commenttime>={$_POST['sj']}");

            $GLOBALS['smarty']->assign("arr",$coarr);
            $GLOBALS['smarty']->display("Comment/comment_list.html");
        }
        //带时间区间、名称搜索
        if(!empty($_POST['sj'])&&!empty($_POST['sje'])&&!empty($_POST['name'])){
            $co = new CommentModel();
            $coarr = $co->select("select c.id,c.comment,c.commenttime,u.username,o.goodsname from tb_user u
inner join tb_comment c on u.id=c.userid inner join tb_order o on c.orderid=o.id where {$_POST['sje']}<=c.commenttime and c.commenttime>={$_POST['sj']} and o.goodsname='{$_POST['name']}'");

            $GLOBALS['smarty']->assign("arr",$coarr);
            $GLOBALS['smarty']->display("Comment/comment_list.html");
        }
        //带名称搜索
        if(!empty($_POST['name'])){
            $co = new CommentModel();
            $coarr = $co->select("select c.id,c.comment,c.commenttime,u.username,o.goodsname from tb_user u
inner join tb_comment c on u.id=c.userid inner join tb_order o on c.orderid=o.id where o.goodsname='{$_POST['name']}'");

            $GLOBALS['smarty']->assign("arr",$coarr);
            $GLOBALS['smarty']->display("Comment/comment_list.html");
        }

    }
    //删除评价
    public function delete(){
        $co = new CommentModel();
        $bool = $co->delete("delete from tb_comment where id='{$_GET['id']}'");
        if($bool){
            echo "<script>location.href='?c=comment&a=select';</script>";
        }else{
            echo "<script>alert('操作失败！');location.href='?c=comment&a=select';</script>";
        }
    }
}