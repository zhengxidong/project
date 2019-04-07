<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/24
 * Time: 19:28
 */
class CategoryController{
    //点击分类，跳转到筛选页
    public function select(){
        $cate = new CategoryModel();
        $selegoods = $cate->select("select * from tb_category where like='{$_GET['name']}%'");
        $GLOBALS['smarty']->assign("goods",$selegoods);
        $GLOBALS['smarty']->display("Goods/goods_select.html");
    }
}