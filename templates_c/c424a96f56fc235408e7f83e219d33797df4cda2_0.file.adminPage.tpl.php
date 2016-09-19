<?php
/* Smarty version 3.1.30, created on 2016-09-19 02:34:01
  from "/home/ubuntu/workspace/Bento/views/adminPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57df4e99c8fde9_33616520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c424a96f56fc235408e7f83e219d33797df4cda2' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/adminPage.tpl',
      1 => 1474252440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57df4e99c8fde9_33616520 (Smarty_Internal_Template $_smarty_tpl) {
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
        <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand new-li">訂便當後台</a>
                </div>
                <div id=navbar class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="new-li"><a>管理員 <?php ob_start();
echo $_smarty_tpl->tpl_vars['userName']->value;
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
</a></li>
                        <li class="new-li"><a href="#">使用者資料</a></li>
                        <li class="new-li"><a href="#">店家資料</a></li>
                        <li class="new-li"><a href="/Bento/Member/signOut?signOut=1">登出</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </body>
</html><?php }
}
