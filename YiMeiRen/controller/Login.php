<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/5
 * Time: 20:48
 * 登录控制器
 */
class LoginController{
    public function login(){
        $GLOBALS['smarty']->display("./template/Login/login.html");
    }
    //验证码
    public function yzm(){
        require './libs/verify.php';
        $yzm = new Verify(array("font"=>BASE."/public/font/simfang.ttf"));
        $yzm->show();
    }
    //检测账号密码、 错误3次24小时内禁止登录
    public function check(){
       /* if(strtolower(trim($_POST['Code']))!=strtolower($_SESSION['yzm'])){
            echo "<script>alert('验证码有误');location.href='?c=login&c=index'</script>";
        }*/
        /*var_dump($_POST);
        exit;*/
        $user = new UserModel();

        $UserName = addslashes($_POST['username']);
        $Password = sha1(addslashes($_POST['password']));
        $errors =$user->select("select errors,errordate from tb_user where username='$UserName'");
        $timeData = time()-$errors[0]['errordate'];
        if($timeData>30&&$errors[0]['errors']>2){
            $user->query("update tb_user set errors=0 where username='{$UserName}'");
        }
        $errors = $user->select("select errors,errordate from tb_user where username='$UserName'");
        if($errors[0]['errors']>2){
            echo "<script>alert('错过超过3次，明天再登录');location.href='?c=login&c=index'</script>";
            exit;
        }
        $arr = $user->select("select * from tb_user where username='$UserName'and password='{$Password}'");
        //判断数据库是否有这个账号
        if(!empty($arr)){
            $user->query("update tb_user set errors=0 where username='{$UserName}'");
            //保存session
            $_SESSION['user'] = $arr[0];
            echo "<script>location.href='?c=index&a=index'</script>";
            exit;
        }else{
            //记录错误次数
            $sj = time();
            $user->query("update tb_user set errors=`errors`+1,errordate-{$sj} where username-'{$UserName}'")
   ;
            echo "<script>alert('账号或密码错误！');location.href='?c=login&a=login'</script>";
            exit;
        }
    }
    //检测验证码是否一致
    public function checkYzm(){
        if(strtolower(trim($_GET['yzm']))!=strtolower($_SESSION['yzm'])){
            echo 0;
        }else{
            echo 1;
        }
    }
    //退出登录
    public function loginOut(){
        unset($_SESSION['username']);
        echo "<script>location.href='?c=login&a=login'</script>";
        exit();
    }
    public function __call($fn,$param){
        exit('no this action');
    }
}