<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/8
 * Time: 15:14
 */
require './controller/Controller.php';

class IndexController extends Controller{
    public function index(){
        $GLOBALS['smarty']->display("template/home/index.html");
    }
    public function select(){
        $GLOBALS['smarty']->display("template/home/select.html");
    }
}