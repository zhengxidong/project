<?php /* Smarty version Smarty-3.1.14, created on 2017-03-05 04:59:48
         compiled from "template\home\test.html" */ ?>
<?php /*%%SmartyHeaderCode:2206658bb9b44cfe604-39840156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfe9e1ad2b1ec1a206d7f69711b5417ecea7d748' => 
    array (
      0 => 'template\\home\\test.html',
      1 => 1488689957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2206658bb9b44cfe604-39840156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58bb9b44d699a5_78924464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb9b44d699a5_78924464')) {function content_58bb9b44d699a5_78924464($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table>
    <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['n']->value['1'];?>
</td>
    </tr>
    <?php } ?>
 </table>
 </body>
 </html><?php }} ?>