<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/main.css" rel="stylesheet">
        <script src="../views/js/main.js"></script>
        {{if isset($message)}}
            <script> alert('{$message}'); </script>
        {{/if}}
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
			</div>
		</div>
    </body>
</html>