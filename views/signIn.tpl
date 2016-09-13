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
            	if(reg.userName.value == "") {
            		alert("請輸入帳號");
            	} else if(reg.passWord.value == "") {
            		alert("請輸入密碼");
            	} else {
            	    reg.submit();
            	}
            }
        </script>
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
				<h1>登入</h1><br>
    			<form action="signIn" method="post" name="reg">
    				<input type="text" name="userName" placeholder="Username">
    				<input type="password" name="passWord" placeholder="Password">
    				<input type="button" onClick="check()" class="btn btn-info btn-lg" value="登入">
    			</form>

    			<div class="login-help">
    				<a href="/Bento/Member/signUp" style="font-size:20px">註冊</a>
    			</div>
			</div>
		</div>

        {{if isset($message)}}
            <script>
                alert('{$message}');
            </script>
        {{/if}}

    </body>
</html>