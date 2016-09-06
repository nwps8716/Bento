<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand new-li">中佑訂便當</a>
                </div>
                <div id=navbar class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="new-li">
                            <a>{$userName}</a>
                        </li>
                        <li class="new-li">
                            <a href="#">我要訂購</a>
                        </li>
                        <li class="new-li">
                            <a href="#">新增店家</a>
                        </li>
                        <li class="new-li">
                            <a href="/Bento/Home/signOut?signOut=1">登出</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {if isset($message) }
            <script>
                alert('{$message}');
            </script>
        {/if}

    </body>
</html>