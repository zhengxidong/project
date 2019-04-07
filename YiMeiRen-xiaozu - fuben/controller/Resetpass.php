<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/22
 * Time: 0:01
 */
class ResetpassController{
    public function reset(){
            $GLOBALS['smarty']->display("User/resetpass_one.html");
    }
    //验证码
    public function yzm(){
        require './libs/verify.php';
        $yzm = new Verify(array("font"=>BASE."/public/font/simfang.ttf"));
        $yzm->show();
    }
    //检查是否有这个用户
    public function checkuser(){
        if(!empty($_REQUEST['username'])&&!empty($_REQUEST['yzm'])){
                if($_REQUEST['yzm']!=$_SESSION['yzm']){
                    $use = new UserModel();
                    $arr = $use->select("select * from tb_user where username='{$_REQUEST['username']}'");
                    if(!empty($arr)){
                        echo 1;
                    }else{
                        echo 0;
                    }
                }else{
                    echo 3;
                }

        }
    else{
            echo 2;
        }
    }
    public function resettwo(){
        $GLOBALS['smarty']->display("User/resetpass_two.html");
    }
    //发送邮件
    public function checkemail(){
        if(!empty($_REQUEST['email'])){
            $email = stripslashes(trim($_REQUEST['email']));
            $us = new UserModel();
            $query = $us->select("select id,username,password from `tb_user` where `email`='$email'");
            //判断是否绑定有邮箱
            if($query==false){
                echo 0;
                exit;
            }else{
                 require BASE.'/libs/class.phpmailer.php';
                try{
                    $row = $query[0];
                    $uid = $row['id'];
                     /*$token = md5($uid.$row['username'].$row['password']);*/
                    /*$url = "http://localhost/test/reset.php?email=".$email."
&token=".$token;*/
                    $captcha_code = "";
                        //生成随机数字
                    for($i=0;$i<6;$i++){
                        //设置数字
                        $fontcontent = rand(0,9);
                        $captcha_code .= $fontcontent;
                    }
                    $_SESSION['authcode'] = $captcha_code;//保存验证码
                    $yzm = $_SESSION['authcode'];

                    $getpasstime =time();                //记录时间戳
                    $time = date('Y-m-d H:i',$getpasstime); //时间戳转换为日期格式，发送当前时间
                    $mail = new PHPMailer(true);         //实例化一个邮件类
                    $mail->CharSet = "utf-8";            //设置字符编码
                    $mail->IsSMTP();                     //使用smtp协议
                    $mail->SMTPAuth = true;              //激活SMTP授权验证
                    $mail->Port     =25;                 //设置smtp端口号
                    $mail->Host     ="smtp.163.com";     //SMTP服务器地址
                    $mail->Username ="zhenxidog@163.com";//SMTP服务账号
                    $mail->Password ="Zheng123";         //SMTP服务密码
                    $mail->From     ="zhenxidog@163.com";//自己的邮箱
                    $mail->FromName ="zhenxidog@163.com";//自己的名字

                    $body = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。请输入下面的验证码
        （校验码24小时内有效）。<br/><span>".$yzm."</span>";         //写内容
                    $to = $email;
                    $mail->AddAddress($to);       //发送给谁
                    $mail->Subject ="伊美人";     //标题
                    $mail->MsgHTML($body);        //传参内容
                    $mail->IsHTML(true);          //作为HTML发送
                    $data = $mail->Send();
                    if($data==1){
                        $msg ='系统已向您的邮箱发送了一封邮件<br/>请登录到您的邮箱查看您的校验码及时重置您的密码！';
                        mysql_query("update `tb_user` set `getpasstime`='$getpasstime' where id='$uid '");//将找回密码时间存进数据库
                    }else{
                        $msg = 3;
                    }
                    echo $msg;
                    /*echo '邮件已发送';*/
                }catch (phpmailerException $e){
                    echo $e->errorMessage();
                }
            }
        }
        else{
            echo 0;
        }
    }
    //发送短信
    public function checkphone(){
        if(!empty($_REQUEST['phone'])){
            //检测是否存在此手机号
            $us = new UserModel();
            $query = $us->select("select id,username,password from `tb_user` where `phone`='{$_REQUEST['phone']}'");
            //不存在则输出0
            if($query==false){
                echo 0;
                exit;
            }
            else{
                    $username = $query[0]['username'];
                    $captcha_code = "";
                    //7>生成随机数字
                    for($i=0;$i<6;$i++){
                        //设置数字
                        $fontcontent = rand(0,9);
                        $captcha_code .= $fontcontent;
                    }
                    $_SESSION['authcode'] = $captcha_code;//保存验证码
                    $yzm = $_SESSION['authcode'];

                    require BASE.'/libs/sms.php';
                    $mobile = $_REQUEST['phone'];
                    //api key可在后台查看 短信->触发发送下面查看
                    $sms = new Sms( array('api_key' => '08ea34fa1faf3596de3c414000bb4e98' , 'use_ssl' => FALSE ) );

                    //send 单发接口，签名需在后台报备
                    $res = $sms->send($mobile, '尊敬的'.$username.',您的验证码：'.$yzm.'请尽快完成验证。【伊美人】');
                  /*  var_dump($res);
                exit;*/
                    if( $res ){
                        if( isset( $res['error'] ) &&  $res['error'] == 0 ){
                            echo '系统已向您的手机发送了一条短信<br/>请打开您的手机查看您的校验码及时重置您的密码！';
                        }
                        else{
                            echo 'failed,code:'.$res['error'].',msg:'.$res['msg'];
                        }
                    }
                    else{
                        var_dump( $sms->last_error() );
                    }
                    exit;
                }
        }
    }
    //提交对比验证码
    public function checkyzm(){
        if(!empty($_REQUEST['yzm'])){
            if($_REQUEST['yzm']==$_SESSION['authcode']){
                echo 1;
            }
            else{
                echo 0;
            }
        }
    }
    //重置密码
    public function changePassword(){
        if(empty($_REQUEST['password'])&&empty($_REQUEST['username']))
        {
            $GLOBALS['smarty']->display("User/resetpass_three.html");
        }
        else{
            $passwprd = sha1(addslashes(trim($_REQUEST['password'])));
            $use = new UserModel();
            $us = $use->query("update tb_user set password='{$passwprd}' where username='{$_REQUEST['username']}'");
            if($us){
                echo 1;
            }
            else{
                echo 0;
            }
        }
    }
    //修改成功页面
    public function success(){
        $GLOBALS['smarty']->display("User/resetpass_four.html");
    }
}