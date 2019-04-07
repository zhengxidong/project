<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/26
 * Time: 14:49
 */
class IndexController{
    public function index(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $GLOBALS['smarty']->display("template/index.html");
        }
        else{
            $arr=0;
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("template/index.html");
        }

    }
    public function login(){
        $GLOBALS['smarty']->display("./Login/login/html");
    }
    public function register()
    {
        $GLOBALS['smarty']->display("template/register.html");
    }
    public function add(){

        $username = stripslashes(trim($_POST['username']));
        $user = new UserModel();
        $arr = $user->select("select id from tb_user where username='{$username}'");
        if($arr==1){
            echo "<script>alert('用户名已存在，请换个其他的用户名');location.href='?c=index&a=register'</script>";;

        }
        $password = (trim($_POST['password']));
        $againpassword =(trim($_POST['againPassword']));
        if($password==$againpassword){
            $pw= sha1($password);
        }
        else{
            echo "<script>alert('密码不一致，请重新输入');location.href='?c=index&a=register'</script>";
        }
        $email = trim($_POST['email']);
        $regtime = time();
        $token =sha1($username.$password.$regtime);
        $token_exptime =time()+60*60*24;
        $sql = "insert into `tb_user` (`id`,`username`,`password`,`times`,`roleid`,`errors`,`errordate`,`token`,`token_exptime`,`status`,`regtime`,`email`) values (null,'$username','$pw',null,null,0,0,'$token','$token_exptime',0,'$regtime','$email')";
        $user->query($sql);

        if(mysql_insert_id()){
            require "./libs/smtp.class.php";
            $MailServer = "smtp.163.com";
            $MailPort = 25;
            $smtpMail = "zhenxidog@163.com";
            $smtpuser = "zhenxidog@163.com";
            $smtppass = "Zheng123";


            $smtp = new Smtp($MailServer,$MailPort,$smtpuser,$smtppass,true);
            $smtp->debug = false;
            $mailType = "HTML";
            $email = $email;
            $emailTitle = "伊人商城用户账号激活";
            $contenttime = date("Y-m-d",time());
            $content = "<div style='background-color:#ECECEC; padding: 35px;'>
                            <table cellpadding='0' align='center' style='width: 600px; margin: 0px auto; text-align: left; position: relative; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; font-size: 14px; font-family:微软雅黑, 黑体; line-height: 1.5; box-shadow: rgb(153, 153, 153) 0px 0px 5px; border-collapse: collapse; background-position: initial initial; background-repeat: initial initial;background:#fff;'>
                            <tbody>
                            <tr>
                            <th valign='middle' style='height: 25px; line-height: 25px; padding: 15px 35px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #C46200; background-color: #f10180; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;'>
                            <font face='微软雅黑' size='5' style='color: rgb(255, 255, 255); '>YiRen! （伊人商城）</font>
                            </th>
                            </tr>
                            <tr>
                            <td>
                            <div style='padding:25px 35px 40px; background-color:#fff;'>
                            <h2 style='margin: 5px 0px; '><font color='#333333' style='line-height: 20px; '><font style='line-height: 22px; ' size='4'>亲爱的".$username."：</font></font></h2>
                            <p>感谢您在我站注册了新帐号！
                            请点击链接激活您的帐号。<a href='http://localhost/Clothing/?c=index&a=active&verify=".$token."' target='_blank'>http://localhost/Clothing/?c=index&a=active&verify=".$token."</a>
                            如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。
                            如果此次激活请求非你本人所发，请忽略本邮件。</p>
                            <p align='right'>YiRen! 官方团队</p>
                            <p align='right'>".$contenttime."</p>
                            </div>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            </div>";
            $emailBody =$content;
            /*$emailBody = "亲爱的".$username.":<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。
            <br/><a href='http://localhost/Clothing/?c=index&a=active&verify=".$token."' target='_blank'>http://localhost/Clothing/?c=index&a=active&verify=".$token."</a>
            <br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。
            <br/>如果此次激活请求非你本人所发，请忽略本邮件。
            <br/><p style='text-align:right'>-------- 快乐购商城 敬上</p>";*/
            /*var_dump($email,$smtpMail,$emailTitle,$emailBody,$mailType);
            exit;*/
            $rs = $smtp->sendmail($email,$smtpMail,$emailTitle,$emailBody,$mailType);
            if($rs==true){
                echo '<script>alert("恭喜您，注册成功！请在24小时内登录到您的邮箱及时激活您的帐号！");window.history.go(-1);</script>';
            }
            else{
                echo '<script>alert("注册失败，请重新注册！");window.history.go(-1);</script>';
            }
        }
    }
    public function active(){
        $verify = stripslashes(trim($_GET['verify']));
        $nowtime = time();
        $user = new UserModel();
        $row = $user->select("select id,token_exptime from tb_user where status='0' and `token`='$verify'");
        /*$row = $user->query($sele);*/
        if($row[0]){
            if($nowtime>$row[0]['token_exptime']){
                $msg = '您的激活码有效期已过，请重新注册您的帐号重新发送激活邮件.';
            }
            else{
                $user->select("update tb_user set status=1 where id=".$row[0]['id']);
                if(mysql_affected_rows()!=1) die(0);
                $msg = '激活成功!';
                header("refresh:3;url=http://localhost/Clothing/");
                print('正在跳转，请稍等。。。<br>三秒自动跳转到YiRem');
            }
        }
        else{
            $msg = '激活失败';
        }
        echo $msg;
    }
    public function contact(){
        $GLOBALS['smarty']->display("template/contact.html");
    }
}