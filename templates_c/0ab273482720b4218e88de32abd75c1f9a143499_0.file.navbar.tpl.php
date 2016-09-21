<?php
/* Smarty version 3.1.30, created on 2016-09-20 09:14:22
  from "/home/ubuntu/workspace/Bento/views/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0fdee2bcbc9_33789731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab273482720b4218e88de32abd75c1f9a143499' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/navbar.tpl',
      1 => 1474362833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e0fdee2bcbc9_33789731 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand new-li">中佑訂便當</a>
        </div>
        <div id=navbar class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="new-li">
                    <a>Hello <?php ob_start();
echo $_smarty_tpl->tpl_vars['userName']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</a>
                </li>
                <li class="new-li">
                    <a href="/Bento/Home/userPage">所有訂單</a>
                </li>
                <li class="new-li">
                    <a href="/Bento/Member/signOut?signOut=1">登出</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php }
}
