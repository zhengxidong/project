<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 18:01
 */
session_start();
//单入口
define("BASE","../");
require BASE.'/config/config.php';
//自动加载模型
spl_autoload_register(function($class){
    require_once '../libs/db.php';
    require "./model/".$class.".php";

});

$controller = isset($_GET['c'])?$_GET['c']:"Index";
$action = isset($_GET['a'])?$_GET['a']:"index";
//判断控制器文件是否存在
if(file_exists("./controller/".$controller.".php")){
    require "./controller/".$controller.".php";
}else{
    exit('no this controller');
}
$class = ucfirst($controller)."Controller";
//实例化控制器-然后调用方法
$obj = new $class();
$obj->$action();
