<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/2
 * Time: 15:35
 */
class LoginController{
    public function index(){
        $GLOBALS['smarty']->display("Login/login.html");
    }
    public function yzm(){
        require '../libs/verify.php';
        $yzm = new Verify(array("font"=>BASE."/public/font/simfang.ttf"));
        $yzm->show();
    }
    public function check(){
        //检查验证码
        if(strtolower(trim($_POST['Code']))!=strtolower($_SESSION['yzm']))
        {
            echo "<script>alert('验证码有误');location.href='?c=login&a=index'</script>";
            exit();
        }
        $admin = new AdminModel();
        $UserName = addslashes($_POST['username']);
        $Password = sha1(addslashes($_POST['password']));

        $errors = $admin->select("select errors,errordate from tb_admin where username='{$UserName}'");
        $timeData =time()-$errors[0]['errordate'];
        if($timeData>30&&$errors[0]['errors']>2){
            $admin->query("update tb_user set errors=0 where username='{$UserName}''");
        }
        $errors =$admin->select("select errors,errordate from tb_admin where username='$UserName'");
        if($errors[0]['errors']>2){
            echo "<script>alert('错误超过3次，明天再登登录');location.href='?c=login&a=index'</script>";
            exit;
        }
        $arr = $admin->select("select * from tb_admin where username='{$UserName}'and password='{$Password}'");
        if(!empty($arr)){
            $admin->query("update tb_admin set errors=0 where username='{$UserName}'");
            $_SESSION['admin'] = $arr[0]['username'];
            echo "<script>location.href='?c=index&a=index'</script>";
            exit;
        }else{
            //记录错误次数
            $sj = time();
            $admin->query("update tb_admin set errors=`errors`+1,errordate={$sj} where username='{$UserName}'");
            echo "<script>alert('帐号或密码有误');location.href='?c=login&a=index'</script>";
            exit;
        }
    }
    public  function loginOut(){
        unset($_SESSION['admin']);
        echo "<script>location.href='?c=Login&a=index'</script>";
        exit();
    }
    public function __call($fn,$param){
        exit('no this action');
    }
}