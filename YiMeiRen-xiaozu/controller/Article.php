<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/21
 * Time: 21:26
 */
class ArticleController{
    public function select(){
        $GLOBALS['smarty']->display("User/article_detail.html");
    }
}