<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 13:20:57
         compiled from ".\template\User\resetpass_one.html" */ ?>
<?php /*%%SmartyHeaderCode:2081858dbb482dcf635-67546140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8721893f0c41afb43aa42e809b5fc14b9bf5076' => 
    array (
      0 => '.\\template\\User\\resetpass_one.html',
      1 => 1490793657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081858dbb482dcf635-67546140',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58dbb482f00289_27098700',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbb482f00289_27098700')) {function content_58dbb482f00289_27098700($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="./public/css/common.css" rel="stylesheet" type="text/css" />
    <link href="./public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="./public/skins/all.css" rel="stylesheet" type="text/css" />
    <!--找回密码-->
    <link href="./public/css/zh.css" rel="stylesheet" type="text/css" />
    <script src="./public/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="./public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
    <!--<script src="./public/js/common_js.js" type="text/javascript"></script>-->
    <script src="./public/js/footer.js" type="text/javascript"></script>
    <script src="./public/js/iCheck.js" type="text/javascript"></script>
    <script src="./public/js/custom.js" type="text/javascript"></script>
    <title>找回密码</title>
    <style>
        .show{margin:0;padding:0;width:400px;height:70px;border:0px solid #ccc;display:none;}
        .tab{margin:0;padding:0;list-style:none;width:200px;overflow:hidden;}
        .tab li{float:left;width:60px;height:30px;background:#ccc;color:#fff; text-align:center;line-height:30px;cursor:pointer; }
        .on{display:block;}
        .tab li.cur{background:#f10180;}
    </style>
</head>

<body>
<head>
    <div id="header_top">
        <div id="top">
            <div class="Inside_pages">
                <div class="Collection"><a href="?c=index&a=index" class="green">请登录</a> <a href="?c=index&a=register" class="green">免费注册</a></div>
                <div class="hd_top_manu clearfix">
                    <ul class="clearfix">
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的伊美人</a> </li>
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>(23)</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="header"  class="header page_style">
            <div class="logo"><a href="index.html"><img src="./public/images/logo.png" /></a></div>
            <!--结束图层-->
            <div class="Search">
                <div class="search_list">
                    <ul>
                        <li class="current"><a href="#">产品</a></li>
                    </ul>
                </div>
                <div class="clear search_cur">
                    <input name="searchName" id="searchName" class="search_box" onkeydown="keyDownSearch()" type="text">
                    <input name="" type="submit" value="搜 索"  class="Search_btn"/>
                </div>
                <div class="clear hotword">热门搜索词：香醋&nbsp;&nbsp;&nbsp;茶叶&nbsp;&nbsp;&nbsp;草莓&nbsp;&nbsp;&nbsp;葡萄&nbsp;&nbsp;&nbsp;菜油</div>
            </div>
            <!--购物车样式-->
            <div class="hd_Shopping_list" id="Shopping_list">
                <div class="s_cart"><a href="#">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
                <div class="dorpdown-layer">
                    <div class="spacer"></div>
                    <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
                    <ul class="p_s_list">
                        <li>
                            <div class="img"><img src="./public/images/5532506.jpg"></div>
                            <div class="content"><p class="name"><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
                            <div class="Operations">
                                <p class="Price">￥55.00</p>
                                <p><a href="#">删除</a></p></div>
                        </li>
                    </ul>
                    <div class="Shopping_style">
                        <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
                        <a href="Shop_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
                    </div>
                </div>
            </div>
        </div>
        <!--菜单栏-->
        <div class="Navigation" id="Navigation">
            <ul class="Navigation_name">
                <li><a href="Home.html">首页</a></li>
                <li><a href="#">你身边的超市</a></li>
                <li><a href="#">预售专区</a><em class="hot_icon"></em></li>
                <li><a href="products_list.html">商城</a></li>
                <li><a href="#">半小时生活圈</a></li>
                <li><a href="#">好评商户</a></li>
                <li><a href="#">热销活动</a></li>
                <li><a href="Brands.html">联系我们</a></li>
            </ul>
        </div>
        <script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
    </div>
</head>
<!--找回密码-->
<div class="page_style">
    <!--<div class="zhmm_style" style="height: 300px;width:100%;">
        <div style="height: 300px;width:500px;margin:0 auto;">
            <div class="title_name"><b>密码找回</b></div>
            <ul class="select_style clearfix tab">
                <li class="cur">邮箱找回</li>
                <li>短信找回</li>
            </ul>
            <div class="on show">
                <label class="labelname"style="position:relative;">
                    <sapn class="err" id="chkmsg" style="display: block;position:absolute;right: -110px;top:30px;color:red;"></sapn>
                    <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_1" /> <span>邮箱找回</span></label>
                <label>

                    <input name="" type="text" id="email"  class="addtext" style=" width:230px;"/>

                    <input name="" type="submit" id="sub_btn" value="发送" class=" zh_btn fs_btn"/>
                </label>
            </div>
            <div class="show">
                <label class="labelname">
                    <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_2" /> <span>手机找回</span></label>
                <label>
                    <input name="" type="text"  class="addtext" style=" width:230px;"/>
                    <input name="" type="submit"  value="获取验证码" class=" zh_btn yz_btn"/>
                </label>
            </div>
            <div class="demo"></div>
        </div>

    </div>-->

    <div class="content">
        <div class="web-width">
            <div class="for-liucheng">
                <div class="liulist for-cur"></div>
                <div class="liulist"></div>
                <div class="liulist"></div>
                <div class="liulist"></div>
                <div class="liutextbox">
                    <div class="liutext for-cur"><em>1</em><br /><strong>填写账户名</strong></div>
                    <div class="liutext"><em>2</em><br /><strong>验证身份</strong></div>
                    <div class="liutext"><em>3</em><br /><strong>设置新密码</strong></div>
                    <div class="liutext"><em>4</em><br /><strong>完成</strong></div>
                </div>
            </div><!--for-liucheng/-->
            <form class="forget-pwd" >
                <dl>
                    <dt>账户名：</dt>
                    <dd><input type="text" name="username" id="username"/><span id="usererr" style="display: none;color:#f20266;">不存在此用户名</span></dd>
                    <div class="clears"></div>
                </dl>
                <dl>
                    <dt>验证码：</dt>
                    <dd>
                        <input type="text" name="yzm" style="width: 60px;float: left" id="yzm"/>
                        <div class="yanzma" style="margin-left: -80px;">
                            <img src="?c=login&a=yzm" onclick="this.src='?c=login&a=yzm&id='+Math.random()"  width="70" height="20"/> <a  onclick="this.src='?c=login&a=yzm&id='+Math.random()">换一换</a>
                        </div>
                        <span id="yzmerr" style="display: none;">验证码错误</span>
                    </dd>
                    <div class="clears"></div>
                </dl>
                <div class="subtijiao"><input id="submit" onclick="checkform()"  value="下一步"/> </div>
            </form>
        </div><!--web-width/-->
    </div><!--content/-->


    <!--网站地图-->
    <div class="fri-link-bg clearfix">
        <div class="fri-link">
            <div class="logo left margin-r20"><img src="./public/images/fo-logo.jpg" width="152" height="81" /></div>
            <div class="left"><img src="./public/images/qd.jpg" width="90"  height="90" />
                <p>扫描下载APP</p>
            </div>
            <div class="">
                <dl>
                    <dt>新手上路</dt>
                    <dd><a href="#">售后流程</a></dd>
                    <dd><a href="#">购物流程</a></dd>
                    <dd><a href="#">订购方式</a> </dd>
                    <dd><a href="#">隐私声明 </a></dd>
                    <dd><a href="#">推荐分享说明 </a></dd>
                </dl>
                <dl>
                    <dt>配送与支付</dt>
                    <dd><a href="#">保险需求测试</a></dd>
                    <dd><a href="#">专题及活动</a></dd>
                    <dd><a href="#">挑选保险产品</a> </dd>
                    <dd><a href="#">常见问题 </a></dd>
                </dl>
                <dl>
                    <dt>售后保障</dt>
                    <dd><a href="#">保险需求测试</a></dd>
                    <dd><a href="#">专题及活动</a></dd>
                    <dd><a href="#">挑选保险产品</a> </dd>
                    <dd><a href="#">常见问题 </a></dd>
                </dl>
                <dl>
                    <dt>支付方式</dt>
                    <dd><a href="#">保险需求测试</a></dd>
                    <dd><a href="#">专题及活动</a></dd>
                    <dd><a href="#">挑选保险产品</a> </dd>
                    <dd><a href="#">常见问题 </a></dd>
                </dl>
                <dl>
                    <dt>帮助中心</dt>
                    <dd><a href="#">保险需求测试</a></dd>
                    <dd><a href="#">专题及活动</a></dd>
                    <dd><a href="#">挑选保险产品</a> </dd>
                    <dd><a href="#">常见问题 </a></dd>
                </dl>
                <dl>
                    <dt>帮助中心</dt>
                    <dd><a href="#">保险需求测试</a></dd>
                    <dd><a href="#">专题及活动</a></dd>
                    <dd><a href="#">挑选保险产品</a> </dd>
                    <dd><a href="#">常见问题 </a></dd>
                </dl>
                <dl>
                    <dt>帮助中心</dt>
                    <dd><a href="#">保险需求测试</a></dd>
                    <dd><a href="#">专题及活动</a></dd>
                    <dd><a href="#">挑选保险产品</a> </dd>
                    <dd><a href="#">常见问题 </a></dd>
                </dl>
            </div>
        </div>
    </div>
    <!--网站地图END-->
    <!--网站页脚-->
    <div class="copyright">
        <div class="copyright-bg">
            <div class="hotline">为生活充电在线 <span>招商热线：400-6067733</span> 客服热线：0571-87361599</div>
            <div class="hotline co-ph">
                <p>版权所有Copyright 2016-2017 伊美人</p>
                <p>京ICP备070359号 不良信息举报：4006561155</p>
                <p>总机电话：0571-87361534/194/195/196 客服电话：0571-87361599 传 真：86 519-85125379
                <p> E-mail:css@meili-inc.com</p>
            </div>
        </div>
    </div>
    <script>
        function checkform(){
            var user = $("#username").val();
            var yzm = $("#yzm").val();
            if(user==''&&yzm=='')
            {
                $("#username").css("border","1px solid #f20266");
                $("#yzm").css("border","1px solid #f20266");
                $("#usererr").show();
            }
            $.post("?c=resetpass&a=checkuser",
                    {
                        username:$("input[name=username]").val(),
                        yzm:$("#yzm").val()
                    },
                    function(msg){
                        if(msg==0){
                            $("#usererr").show();
                        }
                        if(msg==3){
                            $("#yzmerr").show();
                        }
                        if(msg==1){
                            document.location.href='?c=resetpass&a=resettwo';
                        }
                    },"text");
        }
        $(function(){
            $("#sub_btn").click(function(){
                var email =$("#email").val();
                var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
                if(email==''||!preg.test(email)){
                    $("#chkmsg").html("请填写正确的邮箱！");
                }else{
                    $("#sub_btn").attr("disabled","disabled").val('提交中..').css("cursor","default");
                    $.post("./controller/check.php?",{mail:email},function(msg){
                        if(msg==0){
                            $("#chkmsg").html("该邮箱尚未注册！");
                            $("#sub_btn").removeAttr("disabled").val('提交').css("cursor","pointer");
                        }else{
                            $("#sub_btn").attr("disabled","disabled").val('已发送');
                            $(".demo").html("<h3>"+msg+"</h3>");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
<?php }} ?>