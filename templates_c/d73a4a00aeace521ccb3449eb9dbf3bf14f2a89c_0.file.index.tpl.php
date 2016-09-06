<?php
/* Smarty version 3.1.30, created on 2016-09-05 09:42:15
  from "/home/ubuntu/workspace/Bento/views/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57cd3df7dd5106_13741531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd73a4a00aeace521ccb3449eb9dbf3bf14f2a89c' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/index.tpl',
      1 => 1473047873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57cd3df7dd5106_13741531 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

</pre>

</body>
</html><?php }
}
