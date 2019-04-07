<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/28
 * Time: 14:37
 */
class OrderController{
    //用户订单
    public function myorder(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $goos = new GoodsModel();
            $orderarr = $goos->select("select * from tb_order where userid='{$_GET['id']}'");
            /*var_dump($orderarr);
            exit;*/
            $GLOBALS['smarty']->assign("order",$orderarr);
            //查出评价
            $co = new CommentModel();
            $coarr = $co->select("select * from tb_comment");
            $GLOBALS['smarty']->assign("comment",$coarr);
            $GLOBALS['smarty']->display("Order/user_order.html");
        }
    }
}