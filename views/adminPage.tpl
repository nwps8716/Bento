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
                    <a class="navbar-brand new-li">訂便當後台</a>
                </div>
                <div id=navbar class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="new-li"><a>管理員 {{$userName}}</a></li>
                        <li class="new-li"><a href="#">使用者資料</a></li>
                        <li class="new-li"><a href="#">店家資料</a></li>
                        <li class="new-li"><a href="/Bento/Member/signOut?signOut=1">登出</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </body>
</html>