<?php
require BASE."/libs/Smarty.class.php";
//1、实例化smarty对象
$smarty = new Smarty();
//2、配置 模板目录  编译目录  边界符
$smarty->template_dir = "./template/";
$smarty->compile_dir = "./compile/";
$smarty->left_delimiter = "<!--{";
$smarty->right_delimiter ="}-->";