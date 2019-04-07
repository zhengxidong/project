<?php /* Smarty version Smarty-3.1.14, created on 2017-03-30 14:09:01
         compiled from "template\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1111558dbb58a17d4d0-69840610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063e3552166c7f2c9f03fa2fa5c1773614891830' => 
    array (
      0 => 'template\\register.html',
      1 => 1490877173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1111558dbb58a17d4d0-69840610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58dbb58a2d9f49_53862511',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbb58a2d9f49_53862511')) {function content_58dbb58a2d9f49_53862511($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>伊美人网站注册</title>
		<link rel="stylesheet" type="text/css" href="./public/css/login.css"/>
        <script type="text/javascript" src="./public/js/jquery-2.1.1.min.js"></script>
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
					<a href="" title="出发">
						<img src="./public/images/register.jpg" alt="出发"/>
					</a>
				</div>
				<div class="login_b_r ClearFix">
					<div class="loginul ClearFix">
					    <div class="login_h2 ClearFix">
						    <h2>用户注册</h2>
						    <div class="lognrtop">
								已有账号<a href="?c=login&a=login">在此登录</a>
							</div>
						</div>
					  <div class="co"> 
                        <div class="form">
                        <form id="register_form">
                            <div class="item">
                                <input placeholder="请输入用户名" class="itxt"  name="username" id="name"  type="text">
                                <span class="xing" id="username">&nbsp;&nbsp;*</span>
                                <img class="dui" id="error_dui" src="./public/images/duihao.png" alt="" style="display:none;" width="20" height="20"/>
                                <div class="err_box">
                                    <div class="err_msg2" style="display: none;" id="error_username">用户名由数字和字母组成</div>
                                </div>
                            </div>
                            <div class="item items">
                                <input placeholder="号码" class="itxt"  name="email" id="email" type="text">
                                <span class="xing" id="emailxing">&nbsp;&nbsp;*</span>
                                <img class="dui" id="error_eamildui" src="./public/images/duihao.png" alt="" style="display:none;" width="20" height="20"/>
                                <div class="err_box">
                                    <div class="err_msg2" style="display: none;" id="error_email">请输入正确的号码</div>
                                </div>
                            </div>
                            <div class="item items">
                                <input placeholder="验证码" maxlength="6" tabindex="3" class="itxt itxt_yzm onfocustxt" name="mobile_code" id="mobile_code" type="text">
                                <a class="ncm-btn ml5" tabindex="2">
                    		        <span id="sending" style="display:none">正在</span>
                    		        <span class="send_success_tips" style="display: none;">
                    		        <strong id="show_times" class="red mr5"></strong>秒后再次获取</span><div id="hide_times">获取短信验证码</div>
                            	</a>
                                <div class="err_box">
                                    <div class="err_msg2" id="yzm_err" style="display: none;">请输入发送给您手机上的验证码</div>
                                </div>
                            </div>
                            <div class="item item2">
                                <input placeholder="请输入密码" class="itxt" name="password" id="paw1" type="password">
                                <span class="xing" id="pw">&nbsp;&nbsp;*</span>
                                <img class="dui" id="error_pwdui" src="./public/images/duihao.png" alt="" style="display:none;" width="20" height="20"/>
                                <div class="err_box">
                                    <div class="err_msg2" style="display: none;" id="error_password">请输入您的密码,您的密码可能为字母、数字或符号组合</div>
                                </div>
                                <span class="r" id="ruo" style="margin-left: 55px;"></span>
                                <span class="r" id="zhong" ></span>
                                <span class="r" id="qiang" ></span></td>
                            </div>
                            <div class="item item2">
                                <input placeholder="请再次输入密码" class="itxt"  name="againPassword" id="password_confirm" type="password">
                                <span class="xing" id="againpw">&nbsp;&nbsp;*</span>
                                <img class="dui" id="error_apwdui" src="./public/images/duihao.png" alt="" style="display:none;" width="20" height="20"/>
                                <div class="err_box">
                                    <div class="err_msg2" style="display: none;" id="error_password_confirm">密码不一致，请重新输入。</div>
                                </div>
                            </div>
                           <!-- <div class="item item3">
                                <input placeholder="验证码" autocomplete="off" tabindex="6" maxlength="4" size="10" class="itxt itxt_yzm" name="Code" id="code" type="text">
                                <div class="err_box">
                                    <div class="err_msg2" style="display: none;" id="error_captcha">请输入右侧验证码</div>
                                </div>
                            </div>-->
                            <div class="item item5">
                                <div class="login-btn">
                                    <input id="loginsubmit" tabindex="7" class="btn-img btn-entry" value="立即注册"></input>
                                </div>
                                <div class="agree">
                                   <!-- <input class="jdcheckbox" tabindex="8" name="agree" id="agree" checked="checked" type="checkbox">-->
                                    <label for="autoLogin">注册即表示同意伊美人<span><a href="" target="_blank">《用户服务协议》</a></span>条款</label>
                                </div>
                            </div>
                        </form>
                        </div>
					   </div>
					</div>
				</div>
			</div>
		</div>
    <script>
        $(function(){
            $("#name").blur(function(){
                var user=/^[A-Za-z0-9]{6,}$/;
                if(!user.test($(this).val())){
                    $("#error_username").show();
                }
                else{
                    $("#error_dui").show();
                    $("#username").hide();
                    $("#error_username").hide();
                }
            });
            $("#email").blur(function(){
                /*var em =/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;*/
                var em =/^1[34578]\d{9}$/;
                if(!em.test($(this).val())){
                    $("#error_email").show();
                }
                else{
                    $("#error_eamildui").show();
                    $("#emailxing").hide();
                    $("#error_email").hide();
                }
            }).focus(function(){
                $("#error_eamildui").hide();
                $("#emailxing").show();
                $("#error_email").hide();
                $("#email").css({"display":"block","color":"#000","border":"1px solid #333"});
            });
            var paw1=document.getElementById("paw1");
            if(navigator.userAgent.toLowerCase().indexOf("ie")!=-1)
            {
                paw1.attachEvent("oninput",checkpaw);
            }
            else
            {
                paw1.addEventListener("input",checkpaw,false);
            }
            function checkpaw()
            {
                var paw=paw1.value;
                if (paw.length<6||paw.length>15)
                {
                    document.getElementById("ruo").style.backgroundColor="";
                    document.getElementById("ruo").innerHTML="";
                    document.getElementById("zhong").style.backgroundColor="";
                    document.getElementById("zhong").innerHTML="";
                    document.getElementById("qiang").style.backgroundColor="";
                    document.getElementById("qiang").innerHTML="";

                    $("error_password").show();
                    return false;
                }
                else{
                    $("error_pwdui").show();
                }
                var s=	/^\d+$/;//数字
                var zm=/^[a-zA-Z]+$/;//字母
                var tszf=/^[@#$%^&]+$/;//特殊字符
                var ZS=/^(?!\d+$)(?![a-zA-Z]+$)[a-zA-Z\d]+$/;//字母、数字
                var ZF=/^(?![a-zA-Z]+$)(?![@#$%^&]+$)[a-zA-Z@#$%^&]+$/;//字母、特殊字符
                var SF=/^(?!\d+)(?![@#$%^&]+$)[\d@#$%^&]+$/;//数字、特殊字符
                var ZSF=/^(?![a-zA-Z]+$)(?!\d+$)(?![!@#$%^&*]+$)(?![a-zA-Z\d]+$)(?![a-zA-Z!@#$%^&*]+$)(?![\d!@#$%^&*]+$)[a-zA-Z\d!@#$%^&*]+$/;//数字、字母、特殊字符
                if(s.test(paw)||zm.test(paw)||tszf.test(paw))
                {
                    document.getElementById("ruo").style.backgroundColor="red";
                    document.getElementById("ruo").innerHTML="弱";
                    document.getElementById("ruo").style.color="#fff";
                    document.getElementById("zhong").innerHTML="";
                    document.getElementById("zhong").style.backgroundColor="#fff";
                    document.getElementById("qiang").style.backgroundColor="#fff";
                    document.getElementById("qiang").innerHTML="";
                }
                else if(ZS.test(paw)||ZF.test(paw)||SF.test(paw))
                {
                    document.getElementById("zhong").style.backgroundColor="yellow";
                    document.getElementById("zhong").innerHTML="中";
                    document.getElementById("zhong").style.color="#fff";
                    document.getElementById("ruo").innerHTML="";
                    document.getElementById("ruo").style.backgroundColor="yellow";
                    document.getElementById("qiang").style.backgroundColor="#fff";
                    document.getElementById("qiang").innerHTML="";
                }
                else if (ZSF.test(paw))
                {
                    document.getElementById("qiang").style.backgroundColor="blue";
                    document.getElementById("qiang").innerHTML="强";
                    document.getElementById("qiang").style.color="#fff";
                    document.getElementById("ruo").innerHTML="";
                    document.getElementById("ruo").style.backgroundColor="blue";
                    document.getElementById("zhong").style.backgroundColor="blue";
                    document.getElementById("zhong").innerHTML="";
                }
            }
            $("#password_confirm").keyup(function(){
                var $pw1 =$("#paw1").val();
                var $pw2 =$("#password_confirm").val();

                if($pw1!=$pw2){
                    $("#error_password_confirm").show();
                }
                else{
                    $("#error_apwdui").show();
                    $("#againpw").hide();
                    $("#error_password_confirm").hide();
                }
            });
        });
        //获取验证码
        $("#hide_times").click(function(){
            var phone = $("#email").val();
            $.post("?c=index&a=checkphone", {phone:phone}, function (msg) {
                var data = 60;
                var tag = setInterval(function(){
                    $("#show_times").html(data);
                    data--;
                });
                if(data<0){
                    $("#hide_times").html("获取校验码");
                    clearInterval(tag);
                }
                if (msg == 0) {
                    $("#error_email").html("该手机号码可以注册！");
                    /*$("#fsphone").removeAttr("disabled").val('获取验证码').css("cursor", "pointer");*/
                } else {
                    $("#error_email").html("该手机号已注册");
                }
            });
        });
        //提交表单数据
        $("#loginsubmit").click(function(){
            var username = $("#name").val();
            var yzm = $("#mobile_code").val();
            var phone = $("#email").val();
            var pw = $("#paw1").val();
            $.post("?c=index&a=checkyzm", {username:username,yzm: yzm,phone:phone,pw:pw}, function (msg) {
                if (msg == 0) {
                    $("#yzm_err").html("验证码错误！");
                    $("#mobile_code").css("border","1px solid #f20266");
                }
                if(msg==1){
                    window.location.href='?c=index&a=index';
                }
                if(msg==3){
                    $("#error_username").html("该用户已注册");
                    $("#error_username").css({"display":"block","color":"#f10180"});
                }
                if(msg==4){
                    $("#email").css({"display":"block","color":"#f10180","border":"1px solid #f10180"});
                    $("#error_email").html("该手机已注册");
                    $("#error_email").css({"display":"block","color":"#f10180"});
                }
            });
        })
    </script>
	</body>
</html>
<?php }} ?>