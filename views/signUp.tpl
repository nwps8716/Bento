<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">
        <script type="text/javascript">
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
        </script>
    </head>
    <body>
        {include file="views/navbar.tpl"}

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
			        <a href="/Bento/Home/signIn" style="font-size:20px">登入</a>
			    </div>
			</div>
		</div>

        {if isset($message) }
            <script>
                alert('{$message}');
            </script>
        {/if}

    </body>
</html>