<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 16:49:06
         compiled from "template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1426858da0599002173-93380926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc2c8c13204242ac649637da6b1a05aab91bf5a' => 
    array (
      0 => 'template\\index.html',
      1 => 1490806140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426858da0599002173-93380926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58da059956ac26_57937071',
  'variables' => 
  array (
    'arr' => 0,
    'category' => 0,
    'value' => 0,
    'val' => 0,
    'va' => 0,
    'goods' => 0,
    'arrx' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da059956ac26_57937071')) {function content_58da059956ac26_57937071($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_jq')) include 'D:\\wamp\\www\\MyProject\\YiMeiRen-xiaozu\\libs\\plugins\\modifier.jq.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./public/css/common.css" rel="stylesheet" type="text/css" />
<link href="./public/css/style.css" rel="stylesheet" type="text/css" />
<script src="./public/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="./public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="./public/js/common_js.js" type="text/javascript"></script>
<script src="./public/js/footer.js" type="text/javascript"></script>
<title>伊美人</title>
</head>

<body>
<head>
 <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
        <?php if ($_smarty_tpl->tpl_vars['arr']->value==0){?>
        <div class="Collection"><a href="?c=login&a=login" class="green">请登录</a> <a href="?c=index&a=register" class="green">免费注册</a></div>
        <?php }else{ ?>
        <div class="Collection"><a href="?c=user&a=usercenter&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="green">欢迎，<?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
</a><a href="?c=login&a=loginOut">退出</a></div>
        <?php }?>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
          <?php if ($_smarty_tpl->tpl_vars['arr']->value['id']==''){?>
          <?php }else{ ?>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="?c=user&a=usercenter&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">个人中心</a> </li>
          <?php }?>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <!--<li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>(23)</b></a></li>-->
	  </ul>
	</div>
    </div>
  </div>
  <div id="header"  class="header page_style">
  <div class="logo"><a href="index.html">
   <img src="./public/images/logo.png" />
  </a></div>
  <!--结束图层-->
  <div class="Search">
        <div class="search_list">
            <ul>
                <li class="current"><a href="#">商品</a></li>
            </ul>
        </div>
      <form action="?c=goods&a=search" method="post">
        <div class="clear search_cur">
           <input name="searchName" id="searchName" class="search_box" onkeydown="keyDownSearch()" type="text">
           <input type="submit" value="搜 索"  class="Search_btn"/>
        </div>
      </form>
        <div class="clear hotword">热门搜索词：<a href="">衣服</a>&nbsp;|&nbsp;<a href="">连衣裙</a>&nbsp;|&nbsp;<a href="">牛仔衫</a>&nbsp;|&nbsp;<a
                href="">内衣</a>&nbsp;|&nbsp;<a href="">裤子</a>&nbsp;|&nbsp;<a href="">针织衫</a>&nbsp;|&nbsp;<a href="">蕾丝连衣裙</a></div>
</div>
 <!--购物车样式-->
 <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><a href="#">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
	 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
	 <ul class="p_s_list">	   
		<li>
		    <div class="img"><img src=""></div>
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
            <li class="hour"><span class="bg_muen"></span><a href="#">半小时生活圈</a></li>
			<li><a href="#">你身边的超市</a></li>
			<li><a href="#">预售专区</a><em class="hot_icon"></em></li>
			<li><a href="products_list.html">商城</a></li>
			<li><a href="#">好评商户</a></li>
			<li><a href="#">热销活动</a></li>
			<li><a href="Brands.html">联系我们</a></li>
		 </ul>			 
		</div>
	<script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
    </div>
</head>
<!--广告幻灯片样式-->
   	<div id="slideBox" class="slideBox">
			<div class="hd">
				<ul class="smallUl"></ul>
			</div>
				<div class="bd">
					<ul>
						<li><a href="#" target="_blank"><div style="background:url(./public/AD/lunbo1.jpg) no-repeat; background-position:center; width:1050px; height:340px;border-radius: 10px;"></div></a></li>
						<li><a href="#" target="_blank"><div style="background:url(./public/AD/lunbo2.jpg) no-repeat; background-position:center ; width:1050px; height:340px;border-radius: 10px;"></div></a></li>
						<li><a href="#" target="_blank"><div style="background:url(./public/AD/lunbo3.jpg) no-repeat rgb(226, 155, 197); background-position:center; width:1050px; height:340px;border-radius: 10px;"></div></a></li>
	                    <li><a href="#" target="_blank"><div style="background:url(./public/AD/lunbo4.jpg) no-repeat #f7ddea; background-position:center; width:1050px; height:340px;border-radius: 10px;"></div></a></li>
	                    <li><a href="#" target="_blank"><div style="background:url(./public/AD/lunbo5.jpg) no-repeat  #F60; background-position:center; width:1050px; height:340px;border-radius: 10px;"></div></a></li>
					</ul>
				</div>
			<!-- 下面是前/后按钮-->
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>

		</div>
		<script type="text/javascript">
		jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true});
		</script>
 </div>

<!--内容样式-->
<div id="mian">
 <div class="clearfix marginbottom">
 <!--产品分类样式-->
  <div class="Menu_style" id="allSortOuterbox">
   <div class="title_name"><em></em>所有商品分类</div>
   <div class="content hd_allsort_out_box_new">
    <ul class="Menu_list">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['value']->value['father']==0){?>
      <li class="name">
		<div class="Menu_name"><a href="?c=goods&a=select&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a> <span>&lt;</span></div>
		<div class="link_name">
		  <p>
              <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['value']->value['id']==$_smarty_tpl->tpl_vars['val']->value['father']){?>
          <a href="?c=goods&a=select&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a>&nbsp;&nbsp;/
              <?php }?>
              <?php } ?>
          </p>
		</div>

		<div class="menv_Detail">
		 <div class="cat_pannel clearfix">
		    <div class="hd_sort_list">
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['id']==$_smarty_tpl->tpl_vars['val']->value['father']){?>
		    <dl class="clearfix" data-tpc="1">
			 <dt><a href="?c=goods&a=select&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<i>></i></a></dt>
			 <dd>
                 <?php  $_smarty_tpl->tpl_vars['va'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['va']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['va']->key => $_smarty_tpl->tpl_vars['va']->value){
$_smarty_tpl->tpl_vars['va']->_loop = true;
?>
                 <?php if ($_smarty_tpl->tpl_vars['val']->value['id']==$_smarty_tpl->tpl_vars['va']->value['father']){?>
                 <a href="?c=goods&a=select&id=<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['va']->value['name'];?>
</a>
                 <?php }?>
                 <?php } ?>
             </dd>
			</dl>
                <?php }?>
                <?php } ?>

		   </div><div class="Brands">
		  </div>
		  </div>
		  <!--品牌-->		  
		</div>
		</li>
        <?php }?>
        <?php } ?>

    </ul>
   </div>
  </div>
  <script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail",	});</script>
  <!--产品栏切换-->
  <div class="product_list left">
  		<div class="slideGroup">
			<div class="parHd">
				<ul><li>新品上市</li><li>超值特惠</li><li>本期团购</li><li>产品精选</li><li>抢先一步</li></ul>
			</div>
			<div class="parBd">
					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
							<li>
								<div class="pic"><a href="?c=goods&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="_blank"><img src="./public/zoom/<?php echo smarty_modifier_jq($_smarty_tpl->tpl_vars['value']->value['normalimg']);?>
" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
 </a>
                                <h3><b>￥</b><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</h3>
                                </div>
							</li>
                            <?php } ?>
							<!--<li>
								<div class="pic"><a href="#" target="_blank"><img src="./public/products/p_2.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">雅莹春季专柜印花收腰百褶连衣裙 </a>
                                <h3><b>￥</b>499.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="./public/products/p_3.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">meetmetro修身显瘦春秋中长a字裙 </a>
                                <h3><b>￥</b>569.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="./public/products/p_4.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">真丝印花宽松中长碎花裙 </a>
                                <h3><b>￥</b>518.00</h3>
                                </div>
							</li>-->
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
                    	<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
                    	<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

			</div><!-- parBd End -->
		</div>
        <script type="text/javascript">
			/* 内层图片无缝滚动 */
			jQuery(".slideGroup .slideBoxs").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftMarquee",interTime:50,autoPlay:true,trigger:"click"});
			/* 外层tab切换 */
			jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
		</script>
        <!--广告样式-->
        <div class="Ads_style"><a href="#"><img src="./public/images/AD_01.jpg"  width="318" height="340"/></a><a href="#"><img src="./public/images/AD_02.jpg" width="318" height="340"/></a><a href="#"><img src="./public/images/AD_03.jpg" width="318" height="340"/></a></div>
  </div>
 </div>
 <!--板块栏目样式-->
 <div class="clearfix Plate_style">
  <div class="Plate_column Plate_column_left" style="border:0px solid red;width: 1220px;">
    <div class="Plate_name">
    <a href="#" class="Plate_link"> <img src="./public/images/bk_img_01.jpg" width="190" height="401"/></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="213" height="220"/></a>
     <a href="#" class="name">无钢圈性感收副乳无痕聚拢文胸套装 </a>
     <h3><b>￥</b>39.70</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="213" height="220"/></a>
     <a href="#" class="name">无钢圈大码胖mm薄款文胸 </a>
     <h3><b>￥</b>49.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">古今薄模杯蕾丝0h202文胸 </a>
     <h3><b>￥</b>99.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">triumph绮梦花舞系列16-7503文胸 </a>
     <h3><b>￥</b>249.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
     <div class="Plate_column Plate_column_left" style="border:0px solid red;width: 1220px;">
         <div class="Plate_name">
             <a href="#" class="Plate_link"> <img src="./public/images/bk_img_01.jpg" width="190" height="401"/></a>

         </div>
         <div class="Plate_product">
             <ul id="lists">
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">无钢圈性感收副乳无痕聚拢文胸套装 </a>
                     <h3><b>￥</b>39.70</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">无钢圈大码胖mm薄款文胸 </a>
                     <h3><b>￥</b>49.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">古今薄模杯蕾丝0h202文胸 </a>
                     <h3><b>￥</b>99.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">triumph绮梦花舞系列16-7503文胸 </a>
                     <h3><b>￥</b>249.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
     <div class="Plate_column Plate_column_left" style="border:0px solid red;width: 1220px;">
         <div class="Plate_name">
             <a href="#" class="Plate_link"> <img src="./public/images/bk_img_01.jpg" width="190" height="401"/></a>

         </div>
         <div class="Plate_product">
             <ul id="lists">
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">无钢圈性感收副乳无痕聚拢文胸套装 </a>
                     <h3><b>￥</b>39.70</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">无钢圈大码胖mm薄款文胸 </a>
                     <h3><b>￥</b>49.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">古今薄模杯蕾丝0h202文胸 </a>
                     <h3><b>￥</b>99.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">triumph绮梦花舞系列16-7503文胸 </a>
                     <h3><b>￥</b>249.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
     <div class="Plate_column Plate_column_left" style="border:0px solid red;width: 1220px;">
         <div class="Plate_name">
             <a href="#" class="Plate_link"> <img src="./public/images/bk_img_01.jpg" width="190" height="401"/></a>

         </div>
         <div class="Plate_product">
             <ul id="lists">
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">无钢圈性感收副乳无痕聚拢文胸套装 </a>
                     <h3><b>￥</b>39.70</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">无钢圈大码胖mm薄款文胸 </a>
                     <h3><b>￥</b>49.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">古今薄模杯蕾丝0h202文胸 </a>
                     <h3><b>￥</b>99.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
                 <li class="product_display">
                     <a href="" class="Collect"><em></em>收藏</a>
                     <a href="#" class="img_link"><img src="./public/products/1.jpg"  width="140" height="140"/></a>
                     <a href="#" class="name">triumph绮梦花舞系列16-7503文胸 </a>
                     <h3><b>￥</b>249.00</h3>
                     <div class="Detailed">
                         <div class="content">
                             <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
                         </div>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
  <!--板块名称-->
  <!--  <div class="Plate_column Plate_column_right">

    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_05.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">毛呢韩版羊羔毛呢子大衣 </a>
     <h3><b>￥</b>147.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_06.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">毛呢韩版小香风羊毛呢子大衣 </a>
     <h3><b>￥</b>138.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_07.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">韩黛姿毛呢时尚修身七分袖短外套 </a>
     <h3><b>￥</b>138.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_08.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">安都秋冬毛呢显瘦修身韩版夹克 </a>
     <h3><b>￥</b>169.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>-->
 <!--  <div class="Plate_column Plate_column_left">
  &lt;!&ndash;  <div class="Plate_name">
    <a href="#" class="Plate_link"> <img src="./public/images/bk_img_03.jpg" width="190" height="401"/></a>
   
    </div>&ndash;&gt;
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_09.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">夏季收腰雪纺无袖复古红色格子背心裙 </a>
     <h3><b>￥</b>149.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_10.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">茵曼文艺修身无袖夏天背心裙 </a>
     <h3><b>￥</b>159.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_11.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">弥古沙滩裙黑色礼服裙民族风连衣裙短</a>
     <h3><b>￥</b>138.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_12.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">初棉2017春装V领背心裙 连衣裙显瘦 </a>
     <h3><b>￥</b>139.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
  &lt;!&ndash;板块名称&ndash;&gt;
    <div class="Plate_column Plate_column_right">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="./public/images/bk_img_04.jpg" width="190" height="401"/></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_13.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">纯棉格子春秋韩版修身打底衬衣 </a>
     <h3><b>￥</b>48.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_14.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">秋比韩版宽松下摆a字型条纹衬衣 </a>
     <h3><b>￥</b>98.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_15.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">增彩显瘦v领韩版百搭衬衣 </a>
     <h3><b>￥</b>35.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="./public/products/x_16.jpg"  width="140" height="140"/></a>
     <a href="#" class="name"> 茵曼复古花朵印花百搭衬衣</a>
     <h3><b>￥</b>239.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">加入购物车</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>-->
 </div>
 <!--友情链接-->
 <div class="link_style clearfix">
 <div class="title">友情链接</div>
 <div class="link_name">
     <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrx']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
     <a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['website'];?>
" target="_blank"><img src="./upload/<?php echo $_smarty_tpl->tpl_vars['value']->value['logo'];?>
"  width="112" height="52"/></a>
     <?php } ?>
 </div>
 </div>
</div>
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
	 <dt>购物指南</dt>
	 <dd><a href="#">导购演示</a></dd>
     <dd><a href="#">订单操作</a></dd>
     <dd><a href="#">会员注册</a> </dd>
     <dd><a href="#">账户管理 </a></dd>
     <dd><a href="#">收获样品 </a></dd>
     <dd><a href="#">会员等级 </a></dd>
	</dl>
	<dl>
	 <dt>支付方式</dt>
	 <dd><a href="#">快捷支付</a></dd>
     <dd><a href="#">23家主流网银支付</a></dd>
     <dd><a href="#">货到付款</a> </dd>
     <dd><a href="#">支付宝、银联等支付 </a></dd>
     <dd><a href="#">信用卡支付 </a></dd>
     <dd><a href="#">伊美人钱包支付 </a></dd>
	</dl>
     <dl>
	 <dt>配送方式</dt>
	 <dd><a href="#">全场满288元免运费</a></dd>
     <dd><a href="#">配送范围及运费</a></dd>
     <dd><a href="#">验货与签收</a> </dd>
	</dl>
     <dl>
	 <dt>售后服务</dt>
	 <dd><a href="#">退货政策</a></dd>
     <dd><a href="#">退货流程</a></dd>
     <dd><a href="#">退货方式和时效</a> </dd>
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
 <!--右侧菜单栏购物车样式-->
<div class="fixedBox">
  <ul class="fixedBoxList">
      <li class="fixeBoxLi user"><a href="#"> <span class="fixeBoxSpan"></span> <strong>消息中心</strong></a> </li>
    <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
		<p class="good_cart">9</p>
			<span class="fixeBoxSpan"></span> <strong>购物车</strong>
			<div class="cartBox">
       		<div class="bjfff"></div><div class="message">购物车内暂无商品，赶紧选购吧</div>    </div></li>
    <li class="fixeBoxLi Service "> <span class="fixeBoxSpan"></span> <strong>客服</strong>
      <div class="ServiceBox">
        <!--<div class="bjfffs"></div>-->
        <dl onclick="javascript:;">
		    <dt><img src="./public/images/timg.jpg" width="70" height="70"></dt>
		       <dd><strong>QQ客服1</strong>
		          <p class="p1">9:00-22:00</p>
		           <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
		          </dd>
		        </dl>
				<dl onclick="javascript:;">
		          <dt><img src="./public/images/timg.jpg" width="70" height="70"></dt>
		          <dd> <strong>QQ客服1</strong>
		            <p class="p1">9:00-22:00</p>
		            <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
		          </dd>
		        </dl>
	          </div>
     </li>
	 <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
			<span class="fixeBoxSpan"></span> <strong>微信</strong>
			<div class="cartBox">
       		<!--<div class="bjfff"></div>-->
			<div class="QR_code">
			 <p><img src="" width="180px" height="180px" /></p>
			 <p>微信扫一扫，关注我们</p>
			</div>		
			</div>
			</li>

    <li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan"></span> <strong>收藏夹</strong> </a> </li>
    <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
  </ul>
</div>
<script></script>
</body>
</html>
<?php }} ?>