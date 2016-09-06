<?php
/* Smarty version 3.1.30, created on 2016-09-06 08:26:51
  from "/home/ubuntu/workspace/Bento/views/signIn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ce7dcbbef7b6_98280248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a92d0250fd0b924965284b662f55e59fea5787a' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/signIn.tpl',
      1 => 1473150395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ce7dcbbef7b6_98280248 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">

        <?php echo '<script'; ?>
 type="text/javascript">
            function check()
            {
            	if(reg.userName.value == "") {
            		alert("請輸入帳號");
            	} else if(reg.passWord.value == "") {
            		alert("請輸入密碼");
            	} else {
            	    reg.submit();
            	}
            }
        <?php echo '</script'; ?>
>
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
                        <li class="new-li"><a href="/Bento/Home/signUp">註冊</a>
                        <li class="new-li"><a href="/Bento/Home/signIn">登入</a>
                    </ul>
                </div>
            </div>
        </nav>

	    <div class="modal-dialog" style="padding-top:200px">
			<div class="loginmodal-container">
				<h1>登入</h1><br>
    			<form action="signIn" method="post" name="reg">
    				<input type="text" name="userName" placeholder="Username">
    				<input type="password" name="passWord" placeholder="Password">
    				<input type="button" onClick="check()" class="btn btn-info btn-lg" value="登入">
    			</form>

    			<div class="login-help">
    				<a href="/Bento/Home/signUp" style="font-size:20px">註冊</a>
    			</div>
			</div>
		</div>

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
