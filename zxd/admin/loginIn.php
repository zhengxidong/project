<?php 
header("Content-type:text/html;charset=utf-8;");
session_start();
if(!empty($_POST))
{
    $user = addslashes(trim($_POST['username']));
    $pw = sha1(addslashes(trim($_POST['password'])));
    require '../connect.php';
    $Sql = "select * from zxd_tem_tb_user where username='{$user}' and password='{$pw}'";
    $use = mysql_query($Sql);
    $arr = mysql_fetch_assoc($use);
    if(!empty($arr['username']))
    {
        $_SESSION['admin'] = $arr['username'];
        echo "<script>alert('登录成功');location.href='index.php';</script>";
    }
    else
    {
        echo "<script>alert('账号或密码错误！');location.href='login.php';</script>";
    }
    
}
else
{
   /* $error = "账号或密码错误";
    $_SESSION['error'] = $error;*/
     echo "<script>alert('账号或密码错误！');location.href='login.php';</script>";
    /* header("location:login.php");*/
}
?>