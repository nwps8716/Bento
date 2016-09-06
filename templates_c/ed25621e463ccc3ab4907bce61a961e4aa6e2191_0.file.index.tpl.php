<?php
/* Smarty version 3.1.30, created on 2016-09-05 04:05:17
  from "/home/ubuntu/workspace/Din/views/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57cceefd2c1189_54505778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed25621e463ccc3ab4907bce61a961e4aa6e2191' => 
    array (
      0 => '/home/ubuntu/workspace/Din/views/index.tpl',
      1 => 1473047873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57cceefd2c1189_54505778 (Smarty_Internal_Template $_smarty_tpl) {
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
