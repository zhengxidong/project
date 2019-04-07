<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/11
 * Time: 18:39
 */
class LoginController{
    public function index(){
        $GLOBALS['smarty']->display("template/Login/login.html");
    }
    public function yzm(){
        require '../libs/verify.php';
        $yzm = new Verify(array("font"=>BASE."/public/font/simfang.ttf"));
        $yzm->show();
    }
    public function check(){
        //检测验证码
        if(strtolower(trim($_POST['Code']))!=strtolower($_SESSION['yzm']))
        {
            echo "<script>alert('验证码有误');location.href='?c=login&a=index'</script>";
            exit();
        }
        $admin = new LoginModel();
        $UserName = addslashes($_POST['username']);
        $Password = sha1(addslashes($_POST['password']));
        $arr = $admin->select("select * from tb_admin where username='{$UserName}'and password='{$Password}'");
        if(!empty($arr)){
            $_SESSION['admin'] = $arr[0]['username'];
            /*$this->getQxData($arr[0]['id']);*/

            if($_SESSION['admin']=='admin')
            {
                echo "<script>location.href='?c=index&a=index'</script>";
            }else{
                $this->getQxData($arr[0]['id']);
                echo "<script>location.href='?c=index&a=index'</script>";
            }
            echo "<script>location.href='?c=index&a=index'</script>";
        }
        else{
            echo "<script>alert('帐号或密码有误');location.href='?c=login&a=index'</script>";
        }
    }
    public function getQxData($adminid){
        $log = new LoginModel();
        $resData= $log->select("select n.id,n.pid,n.name,a.username from tb_admin a inner join tb_admin_role ar on a.id=ar.userid
inner join tb_role r on ar.roleid=r.id
inner join tb_role_node rn on r.id=rn.roleid
inner join tb_node n on rn.nodeid=n.id where a.id=".$adminid);

        $arrx = $this->jiagong($resData);
        $_SESSION['qx'] = $arrx;
    }
    public function jiagong($arr,$pid=1){
        $list = array();
        foreach($arr as $value){
            if($value['pid']==$pid){
                $list[$value['name']] = $this->jiagong($arr,$value['id']);
            }
        }
        return $list;
    }
    //退出
    public function logout(){
        unset($_SESSION['admin']);
        echo "<script>location.href='?c=Login&a=index'</script>";
        exit;
    }
}