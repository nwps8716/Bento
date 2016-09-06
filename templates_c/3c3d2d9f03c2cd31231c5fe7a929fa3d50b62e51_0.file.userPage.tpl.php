<?php
/* Smarty version 3.1.30, created on 2016-09-06 08:32:28
  from "/home/ubuntu/workspace/Bento/views/userPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ce7f1cf10a28_64455912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c3d2d9f03c2cd31231c5fe7a929fa3d50b62e51' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/userPage.tpl',
      1 => 1473150733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/navbar.tpl' => 1,
  ),
),false)) {
function content_57ce7f1cf10a28_64455912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="../views/js/main.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:views/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <?php echo '<script'; ?>
>
                alert('<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
');
            <?php echo '</script'; ?>
>
        <?php }?>

    </body>
</html><?php }
}
