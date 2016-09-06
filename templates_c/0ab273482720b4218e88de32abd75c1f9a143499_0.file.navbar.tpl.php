<?php
/* Smarty version 3.1.30, created on 2016-09-06 08:32:19
  from "/home/ubuntu/workspace/Bento/views/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ce7f13144681_15664803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab273482720b4218e88de32abd75c1f9a143499' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/navbar.tpl',
      1 => 1473150718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ce7f13144681_15664803 (Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand new-li">中佑訂便當</a>
        </div>
        <div id=navbar class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="new-li">
                    <a>Hello <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</a>
                </li>
                <li class="new-li">
                    <a href="#">開單</a>
                </li>
                <li class="new-li">
                    <a href="#">訂單查詢</a>
                </li>
                <li class="new-li">
                    <a href="/Bento/Home/addShopPage?userName=<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
">新增店家</a>
                </li>
                <li class="new-li">
                    <a href="/Bento/Home/signOut?signOut=1">登出</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
