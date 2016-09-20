<?php
/* Smarty version 3.1.30, created on 2016-09-20 06:54:00
  from "/home/ubuntu/workspace/Bento/views/adminPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0dd08ee29c3_40629827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c424a96f56fc235408e7f83e219d33797df4cda2' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/adminPage.tpl',
      1 => 1474354430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/adminNavbar.tpl' => 1,
  ),
),false)) {
function content_57e0dd08ee29c3_40629827 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/main.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="../views/js/main.js"><?php echo '</script'; ?>
>
        <?php ob_start();
if (isset($_smarty_tpl->tpl_vars['message']->value)) {
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

            <?php echo '<script'; ?>
> alert('<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
'); <?php echo '</script'; ?>
>
        <?php ob_start();
}
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>

    </head>
    <body>
        <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:views/adminNavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>


    </body>
</html><?php }
}
