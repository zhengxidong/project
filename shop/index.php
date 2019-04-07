<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/25
 * Time: 18:01
 */

define("BASE",__DIR__);
require './config/config.php';
spl_autoload_register(function($class){
    require_once './libs/db.php';
    require "./model/".$class.".php";
});
/*require_once './libs/db.php';
require './model/CategoryModel.php';*/
$controller = isset($_GET['c'])?$_GET['c']:"Index";
$action = isset($_GET['a'])?$_GET['a']:"index";
if(file_exists("./controller/".$controller.".php")){
    require "./controller/".$controller.".php";
}else{
    exit('no this controller');
}
$class = ucfirst($controller)."Controller";
$obj = new $class();
$obj->$action();
