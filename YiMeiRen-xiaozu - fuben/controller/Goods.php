<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/19
 * Time: 14:05
 */
class GoodsController{
    public function detail(){
        $id = $_REQUEST['id'];
        $goods = new GoodsModel();
        $sql = "select * from tb_goods where id={$id}";
        $arr = $goods->select($sql);
        $GLOBALS['smarty']->assign("arrx",$arr);
        //小图
        $microimg = explode(",",$arr[0]['microimg']);
        array_pop($microimg);
        $GLOBALS['smarty']->assign("microimg",$microimg);
        //正常图
        $normallimg = explode(",",$arr[0]['normalimg']);
        array_pop($normallimg);
        //取对应的属性参数
        $sqlx = "select * from tb_attr t inner join tb_value v on t.id=v.attrid where v.goodsid={$id}";
        $arrx =$goods->select($sqlx);

        $GLOBALS['smarty']->assign("normallimg",$normallimg);
        $GLOBALS['smarty']->assign("arry",$arrx);
        $GLOBALS['smarty']->display("Goods/details.html");
    }
    public function addcart(){
        $good = new GoodsModel();
        $arr = $good->select("select * from tb_goods where id={$_GET['id']}");
        $tt = array();
        foreach($arr as $value)
        {
            $tt[] = $value;
        }
        var_dump($tt);
        exit;
        require BASE."/libs/car.php";
        $car = new Car();
        $cararr = $car->addItem($arr);

        if($car){
            $GLOBALS['smarty']->assign("arr",$cararr);
            $GLOBALS['smarty']->display("Goods/cart.html");
        }else{
            echo "加入失败<script>location.href='?c=index&a=index';</script>";
        }

    }
    //筛选页
    public function select(){
        $cate = new CategoryModel();
        $selegoods = $cate->select("select * from tb_goods where categoryid='{$_GET['id']}'");
        $GLOBALS['smarty']->assign("goods",$selegoods);
        $GLOBALS['smarty']->display("Goods/goods_filter.html");
    }
    //商品搜索
    public function search(){
        var_dump($_REQUEST['searchName']);
        exit;
        $cate = new CategoryModel();
        $selegoods = $cate->select("select * from tb_goods where goodsname like '{$_GET['searchName']}%'");
        $GLOBALS['smarty']->assign("goods",$selegoods);
        $GLOBALS['smarty']->display("Goods/goods_filter.html");
    }
}