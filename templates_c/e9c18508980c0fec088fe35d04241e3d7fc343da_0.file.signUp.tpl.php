<?php
/* Smarty version 3.1.30, created on 2016-09-08 03:29:29
  from "/home/ubuntu/workspace/Bento/views/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d0db1a004316_82485416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9c18508980c0fec088fe35d04241e3d7fc343da' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/signUp.tpl',
      1 => 1473236008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d0db1a004316_82485416 (Smarty_Internal_Template $_smarty_tpl) {
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
            	if(reg.userName.value == "")
            	{
            		alert("請輸入帳號");
            	}
            	else if(reg.passWord.value == "")
            	{
            		alert("請輸入密碼");
            	}
            	else if(reg.checkPassWord.value == "")
            	{
            		alert("請輸入確認密碼");
            	}
            	else if(reg.passWord.value != reg.checkPassWord.value)
            	{
            	    alert("驗證密碼錯誤");
            	}
            	else reg.submit();
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
                        <li class="new-li"><a href="/Bento/Member/signUp">註冊</a>
                        <li class="new-li"><a href="/Bento/Member/signIn">登入</a>
                    </ul>
                </div>
            </div>
        </nav>

	    <div class="modal-dialog" style="padding-top:200px">
			<div class="loginmodal-container">
			    <h1>註冊</h1><br>
			    <form action="signUp" method="post" name="reg">
				    <input type="text" name="userName" placeholder="Username">
				    <input type="password" name="passWord" placeholder="Password">
				    <input type="password" name="checkPassWord" placeholder="Confirm Password">
				    <input type="button" onClick="check()" class="btn btn-info btn-lg" value="註冊">
			    </form>

			    <div class="login-help">
			        <a href="/Bento/Member/signIn" style="font-size:20px">登入</a>
			    </div>
			</div>
		</div>

        <?php ob_start();
if (isset($_smarty_tpl->tpl_vars['message']->value)) {
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

            <?php echo '<script'; ?>
>
                alert('<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
');
            <?php echo '</script'; ?>
>
        <?php ob_start();
}
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>


    </body>
</html><?php }
}
