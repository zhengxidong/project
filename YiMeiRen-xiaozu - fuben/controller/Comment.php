<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/28
 * Time: 14:36
 */
class CommentController{
    //评价
    public function select(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            //查出要评价的商品
            $gs = new GoodsModel();
            $gsarr = $gs->select("select * from tb_goods where id='{$_GET['goodsid']}'");
            $GLOBALS['smarty']->assign("goods",$gsarr);
            //查出哪个用户评价
            $us = new UserModel();
            $userarr = $us->select("select * from tb_user where id='{$_GET['userid']}'");
            $GLOBALS['smarty']->assign("user",$userarr);
            $GLOBALS['smarty']->display("Comment/user_comment.html");
        }
    }
    //添加评价
    public function addComment(){
        if(!empty($_POST)){
            //添加评价
            $co = new CommentModel();
            $time = date("Y-m-d H:i:s",time());
            $data =$co->add("insert into tb_comment(id,comment,commenttime,orderid,userid) values(null,'{$_POST['comment']}','{$time}','{$_POST['orderid']}','{$_POST['userid']}')");
            if($data){
                echo "<script>location.href='?c=order&a=myorder&id={$_POST['userid']}';</script>";
            }else{
                echo "<script>alert('操作失败');location.href='?c=order&a=myorder';</script>";
            }
        }
    }
}