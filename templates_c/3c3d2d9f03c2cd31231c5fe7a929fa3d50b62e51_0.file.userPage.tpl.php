<?php
/* Smarty version 3.1.30, created on 2016-09-06 04:19:07
  from "/home/ubuntu/workspace/Bento/views/userPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ce43bba1e437_90495856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c3d2d9f03c2cd31231c5fe7a929fa3d50b62e51' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/userPage.tpl',
      1 => 1473135536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ce43bba1e437_90495856 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand new-li">中佑訂便當</a>
                </div>
                <div id=navbar class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="new-li">
                            <a><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</a>
                        </li>
                        <li class="new-li">
                            <a href="#">我要訂購</a>
                        </li>
                        <li class="new-li">
                            <a href="#">新增店家</a>
                        </li>
                        <li class="new-li">
                            <a href="/Bento/Home/signOut?signOut=1">登出</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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
