<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/9
 * Time: 15:47
 */
class UserController{
    //用户中心
    public function usercenter(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $GLOBALS['smarty']->display("User/user_center.html");
        }else{
            $arr=0;
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("User/user_center.html");
        }

    }
    //用户信息
    public function userinfo(){
        if(!empty($_SESSION['user'])){
            $use = new UserModel();
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);

            $GLOBALS['smarty']->assign("use",$use->select("select * from tb_user where id={$_GET['id']}"));
            $GLOBALS['smarty']->display("User/user_info2.html");
        }else{
            $arr=0;
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("User/user_info.html");
        }
    }
    //更新用户信息
    public function updateinfo(){
        //判断是否上传头像
        if(!empty($_FILES['wj']['name']))
        {
            $use = new UserModel();
            $usarr = $use->select("select * from tb_user where id='{$_POST['id']}'");
            if(file_exists($usarr[0]['avatar'])){
                unlink($usarr[0]['avatar']);
            }
            else{
                require BASE.'/libs/upload.php';
                $up = new Upload();
                $up->dir = './public/upload/userimg/';
                $up->sc();
                $path = $up->getLastFile();
                $pa =implode("",$path);

                $data = $use->update("update tb_user set username='{$_POST['username']}',
actualname='{$_POST['actualname']}',
birthday='{$_POST['birthday']}',
sex='{$_POST['sex']}',email='{$_POST['email']}',
phone='{$_POST['phone']}',avatar='{$pa}' where id='{$_POST['id']}'");
                if($data){
                    echo "<script>location.href='?c=user&a=userinfo&id={$_POST['id']}';</script>";
                }
                else{
                    echo "<script>alert('操作失败');location.href='?c=user&usercenter&id={$_POST['id']}';</script>";
                }
            }

        }
        else{
            echo 1;
            exit;
            $use = new UserModel();
            $data = $use->update("update tb_user set username='{$_POST['username']}',
actualname='{$_POST['actualname']}',
birthday='{$_POST['birthday']}',
sex='{$_POST['sex']}',email='{$_POST['email']}',
phone='{$_POST['phone']}' where id='{$_POST['id']}'");
            $id = $_POST['id'];
            if($data){
                echo "<script>location.href='?c=user&a=userinfo&id={$id}';</script>";
            }
            else{
                echo "<script>alert('操作失败');location.href='?c=user&usercenter&id={$_POST['id']}';</script>";
            }
        }

    }
    //安全中心
    public function security(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $GLOBALS['smarty']->display("User/security_center.html");
        }
    }
    //安全中心，手机验证修改密码
    public function reset(){
        if(empty($_POST)){
            if(!empty($_SESSION['user'])){
                $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
                $GLOBALS['smarty']->display("User/user_reset.html");
            }
        }
    }
    //发送短信
    public function checkphone(){
        if(!empty($_REQUEST['phone'])){
            $username = $_REQUEST['username'];
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
        if(empty($_REQUEST['newpwd'])&&empty($_REQUEST['username']))
        {
            $GLOBALS['smarty']->display("User/resetpass_three.html");
        }
        else{
            $passwprd = sha1(addslashes(trim($_REQUEST['newpwd'])));
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
    //安全中心，原密码修改密码
    public function resetoldpassword(){
        if(empty($_POST)){
            if(!empty($_SESSION['user'])){
                $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
                $GLOBALS['smarty']->display("User/user_resetoldpassword.html");
            }
        }
        else{
            $newpwd = sha1(addslashes(trim($_REQUEST['newpwd'])));
            $jiupassword = sha1(addslashes(trim($_REQUEST['jiupassword'])));
            $use = new UserModel();
            $us = $use->select("select id,username,password from `tb_user` where `id`='{$_REQUEST['id']}'");
            if($us[0]['password']==$jiupassword)
            {
                $use->query("update tb_user set password='{$newpwd}' where id='{$_REQUEST['id']}'");
                echo 1;
            }
            else{
                echo 0;
            }

        }
    }



    //绑定邮箱
    public function bindemail(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $GLOBALS['smarty']->display("User/user_bindemail.html");
        }

    }
    //发送验证邮箱
    public function checkemail(){
        if(!empty($_REQUEST['email'])){
            $email = stripslashes(trim($_REQUEST['email']));
            $us = new UserModel();
            $query = $us->select("select id,username,password from `tb_user` where `email`='$email'");
            //判断是否绑定有邮箱
            if($query==false){
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

                    $body = "亲爱的".$row['username']."：<br/>您在".$time."提交了找回密码请求。请输入下面的验证码
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
                }catch (phpmailerException $e){
                    echo $e->errorMessage();
                }
                echo 1;
            }else{
                echo 0;
            }
        }
        else{
            echo 0;
        }
    }
    //比对邮箱验证码，对则将邮箱录入数据库，反之提示错误
    public function checkemailyzm(){
        if(!empty($_REQUEST['yzm'])){
            if(!empty($_REQUEST['email'])){
                if($_REQUEST['yzm']==$_SESSION['authcode']){
                    $us = new UserModel();
                    $email = $_REQUEST['email'];
                    $us->query("update tb_user set email='{$email}' where id='{$_REQUEST['id']}'");
                    echo 1;
                }
                else{
                    echo 0;
                }
            }

        }
    }


    //绑定手机
    public function bindphone(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $GLOBALS['smarty']->display("User/user_bindphone.html");
        }
    }
    //发送短信验证码，绑定手机
    public function getphoneyzm(){
        if(!empty($_REQUEST['phone'])){
            $username = $_REQUEST['username'];
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
    //比对手机验证码，对则将邮箱录入数据库，反之提示错误
    public function checkphoneyzm(){
        if(!empty($_REQUEST['yzm'])){
            if(!empty($_REQUEST['phone'])){
                if($_REQUEST['yzm']==$_SESSION['authcode']){
                    $us = new UserModel();
                    $phone = $_REQUEST['phone'];
                    $us->query("update tb_user set phone='{$phone}' where id='{$_REQUEST['id']}'");
                    $_SESSION['user']['phone'] = $_REQUEST['phone'];
                    echo 1;
                }
                else{
                    echo 0;
                }
            }

        }
    }

    //修改绑定手机
    public function chuangphone(){
        if(!empty($_SESSION['user'])){
            $GLOBALS['smarty']->assign("arr",$_SESSION['user']);
            $GLOBALS['smarty']->display("User/user_chuangphone.html");
        }
    }
    //发送短信验证码，绑定手机
    public function phoneyzm(){
        if(!empty($_REQUEST['phone'])){
            $username = $_REQUEST['username'];
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