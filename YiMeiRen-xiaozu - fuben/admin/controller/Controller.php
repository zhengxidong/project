<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/2
 * Time: 17:36
 */
class Controller{
    public function __construct(){
        if(empty($_SESSION['admin'])){
            echo "<script>location.href='?c=login&a=index'</script>";
            exit();
        }
        //权限检测
        if($_SESSION['admin']!="admin")
        {
            $c = strtolower($_GET['c']);//转换为小写
            $a = strtolower($_GET['a']);
            var_dump($_SESSION['qx']);
            exit;
            isset($_SESSION['qx'][$c][$a])?"":exit('没有权限');
        }
    }
}