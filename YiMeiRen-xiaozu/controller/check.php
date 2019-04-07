<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/16
 * Time: 13:32
 */
require '../libs/db.php';
if(!empty($_REQUEST)){
    $email = stripslashes(trim($_REQUEST['mail']));
    $data = Db::getInstance()->query("select * from tb_user where email='{$email}'");
    $num = mysql_num_rows($data);//取得行数
    if($num==0){
        echo 0;
        exit;
    }else{
        $row = mysql_fetch_array($data);
        $getpasstime =time();
        $uid = $row['id'];
        $token = md5($uid.$row['username'].$row['password']);
        $url = "http://localhost/test/reset.php?email=".$email."
&token=".$token;
        $time = date('Y-m-d H:i');
        require "../libs/smtp.class.php";
        $MailServer = "smtp.163.com";
        $MailPort = 25;
        $smtpMail = "zhenxidog@163.com";
        $smtpuser = "zhenxidog@163.com";
        $smtppass = "Zheng123";
        $smtp = new Smtp($MailServer,$MailPort,$smtpuser,$smtppass,true);
        $emailType = "HTML";
        $email = $email;
        $emailTitle = "伊美人";
        $emailBody = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。asdasdasdasd请点击下面的链接重置密码
        （按钮24小时内有效）。<br/><a href='".$url."'target='_blank'>".$url."</a>";
        $rs = $smtp->sendmail($email,$smtpMail,$emailTitle,$emailBody,$emailType);
        if($rs==1){
            $msg ='系统已向您的邮箱发送了一封邮件<br/>请登录到您的邮箱及时重置您的密码！';
            mysql_query("update `t_user` set `getpasstime`='$getpasstime' where id='$uid '");
        }else{
            $msg = $rs;
        }
        echo $msg;
    }
}
