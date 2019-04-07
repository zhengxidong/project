<?php /* Smarty version Smarty-3.1.14, created on 2017-03-08 09:01:53
         compiled from ".\template\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3190658bfc706cb34b2-47102884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb65d196dad7a92ce0c4c972755abffcafeb2a35' => 
    array (
      0 => '.\\template\\Login\\login.html',
      1 => 1488963712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3190658bfc706cb34b2-47102884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58bfc706d00ed0_66969233',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfc706d00ed0_66969233')) {function content_58bfc706d00ed0_66969233($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="./public/css/login.css"/>
	</head>
	<body>
		<div id="append"></div>
		<div class="full_sc">
			<div class="head_cent head_cwo ClearFix">
				<div class="h_logo">
					<a href="">
						<img src="./public/images/logo.png" height="68"/>
					</a>
				</div>
				<div class="h_right">
					<img src="./public/images/top_center.jpg"/>
				</div>
			</div>
		</div>
		<div class="w980 ClearFix">
			<div class="logo_box ClearFix">
				<div class="login_b_l ClearFix">
					<a href="" title="日光生活">
						<img style="width: 560px;height: 360px;" src="./public/images/logo_img.jpg" alt="日光生活"/>
					</a>
				</div>
				<div class="login_b_r ClearFix">
					<div class="loginul ClearFix">
						<div class="login_h2 ClearFix">
							<h2>登录快乐购</h2>
							<div class="lognrtop">
								还没有快乐购账号<a href="?c=index&a=register">快速注册</a>
							</div>
						</div>
						<div class="co">
							<div class="from">
								<form id="" action="?c=login&a=check" method="post">
									<div class="item">
									<input class="itxt" name="username" placeholder="已验证手机/邮箱/用户名" value="" >
									    <div class="err_box">
                                            <div class="err_msg2" style="display: none;">登录名可能是您的手机号、邮箱或用户名
                                            </div>
                                        </div>
									</div>
									<div class="item">
                                        <input class="itxt" placeholder="请输入密码" name="password" id="password" type="password">
                                        <div class="err_box">
                                            <div class="err_msg2" style="display: none;">您的密码可能为字母、数字或符号的组合</div>
                                        </div>
									</div>
									<div class="item">
										<input placeholder="验证码" id="tt" onkeyup="send(this.value);" size="10" name="Code" class="itxt itxt_yzm onfocustxt" tabindex="3" type="text">
                                        <img src="?c=login&a=yzm" alt="" onclick="this.src='?c=login&a=yzm&id='+Math.random()"
                                             style="float: right;display: block;margin-right: 15px;"/>
                                        <div class="err_box">
                                            <div class="err_msg2" style="display: none;" id="error_captcha">请输入右侧验证码，不区分大小写</div>
                                            <img src="./public/images/duihao.png" id="captcha" width="20" height="20" alt="" style="display: none;"/>
                                        </div>
									</div>
									<div class="item item4">
										<div class="safe ClearFix">
                                            <span>
                                           <!-- <input tabindex="4" class="jdcheckbox" name="autoLogin" id="autoLogin" checked="checked" type="checkbox">
                                            <label for="autoLogin">记住用户名</label>-->
                                            </span>
                                            <span class="forget-pw-safe">
                                                <a target="_blank" class="" href="">忘记密码？</a>
                                            </span>
										</div>
									</div>
									<div class="item">
										<div class="login-btn">
                                            <input tabindex="6" id="loginsubmit" class="btn-img btn-entry" type="submit" value="立即登录"></input>
                                       </div>
									</div>
								</form>
							</div>
							<div class="container">
								<h5>您可以使用以下账号登录</h5>
								<ul>
									<li>
										<a class="li_q" href="" title="QQ"></a>
									</li>
									<li>
										<a class="li_w" href="" title="微博"></a>
									</li>
									<li>
										<a class="li_z" href="" title="支付宝"></a>
									</li>
									<li>
										<a class="li_t" href="" title="淘宝"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <script type="text/javascript" src="./public/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        function send(data){
            xmlhttp.open("get","?c=login&a=checkYzm&yzm="+data,true);
            xmlhttp.send(null);
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState==4&&xmlhttp.status==200){
                    var captcha = document.getElementById("captcha");
                    var error_captcha = document.getElementById("error_captcha");
                    if(xmlhttp.responseText==0)
                    {
                        captcha.style.display="none";
                        error_captcha.style.display="block";
                    }else{

                        captcha.style.display="block";
                        error_captcha.style.display="none";
                    }
                }
            }
        }
        function $(data){
            return document.getElementById(data);
        }
        /*$(function(){

            $("#tt").blur(function(){
                        $.ajax({
                         url:"login.php?c=login&a=checkYzm",
                         data:{username:$(this).val()},
                         dateType:"text",
                         type:"post",
                         success:function(msg){
                         if(msg==1){
                             $("#captcha").style.display="block";
                             $("#error_captcha").style.display="none";
                         }else{
                             $("#error_captcha").style.display="block";
                             $("#captcha").style.display="none";
                         }
                         },
                         error:function(){
                         alert('error');
                         }
                });
         });

});*/
    </script>
	</body>
</html>
<?php }} ?>