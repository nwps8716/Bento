<?php
/* Smarty version 3.1.30, created on 2016-09-20 09:14:39
  from "/home/ubuntu/workspace/Bento/views/adminNavbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0fdff584117_79894815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af91b1e7656ad06376d5c2b41859bb5713a95bfc' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/adminNavbar.tpl',
      1 => 1474362771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e0fdff584117_79894815 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand new-li">訂便當後台</a>
        </div>
        <div id=navbar class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="new-li"><a>管理員 <?php ob_start();
echo $_smarty_tpl->tpl_vars['userName']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</a></li>
                <li class="new-li"><a href="/Bento/Admin/newOrderPage">開單</a></li>
                <li class="new-li"><a href="/Bento/Admin/adminPage">所有訂單</a></li>
                <li class="new-li"><a href="#">店家資料</a></li>
                <li class="new-li"><a href="/Bento/Admin/addShopPage">新增店家</a></li>
                <li class="new-li"><a href="/Bento/Member/signOut?signOut=1">登出</a></li>
            </ul>
        </div>
    </div>
</nav><?php }
}
