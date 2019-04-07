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
    }
}