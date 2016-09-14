<?php
/* Smarty version 3.1.30, created on 2016-09-14 01:10:02
  from "/home/ubuntu/workspace/Bento/views/signIn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d8a36af1b4b9_95657678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a92d0250fd0b924965284b662f55e59fea5787a' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/signIn.tpl',
      1 => 1473815399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d8a36af1b4b9_95657678 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a class="navbar-brand new-li">中佑訂便當</a>
                </div>
                <div id=navbar class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="new-li"><a>Welcome!</a>
                        <li class="new-li"><a href="/Bento/Member/signUp">註冊</a>
                        <li class="new-li"><a href="/Bento/Member/signIn">登入</a>
                    </ul>
                </div>
            </div>
        </nav>

	    <div class="modal-dialog padd-top200">
			<div class="loginmodal-container">
				<h1>登入</h1><br>
    			<form action="signIn" method="post" name="reg">
    				<input type="text" name="userName" placeholder="Username">
    				<input type="password" name="passWord" placeholder="Password">
    				<input type="button" onClick="signin_check()" class="btn btn-info btn-lg" value="登入">
    			</form>

    			<div class="login-help">
    				<a href="/Bento/Member/signUp" class="fontsize20">註冊</a>
    			</div>
			</div>
		</div>
    </body>
</html><?php }
}
