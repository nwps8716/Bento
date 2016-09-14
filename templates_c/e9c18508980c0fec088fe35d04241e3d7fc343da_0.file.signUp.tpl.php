<?php
/* Smarty version 3.1.30, created on 2016-09-14 01:12:05
  from "/home/ubuntu/workspace/Bento/views/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d8a3e516e4c1_22443983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9c18508980c0fec088fe35d04241e3d7fc343da' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/signUp.tpl',
      1 => 1473815523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d8a3e516e4c1_22443983 (Smarty_Internal_Template $_smarty_tpl) {
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
			    <h1>註冊</h1><br>
			    <form action="signUp" method="post" name="reg">
				    <input type="text" name="userName" placeholder="Username">
				    <input type="password" name="passWord" placeholder="Password">
				    <input type="password" name="checkPassWord" placeholder="Confirm Password">
				    <input type="button" onClick="signup_check()" class="btn btn-info btn-lg" value="註冊">
			    </form>

			    <div class="login-help">
			        <a href="/Bento/Member/signIn" class="fontsize20">登入</a>
			    </div>
			</div>
		</div>
    </body>
</html><?php }
}
