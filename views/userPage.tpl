<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">
        <script src="../views/js/main.js"></script>
    </head>
    <body>
        {{include file = "views/navbar.tpl"}}

        <div class="container" style="margin-top:150px">
            <div class="row">
                <div class="box">
                    <legend style="text-align: center">所有訂單</legend>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>連結</th>
                                <th>訂單名稱</th>
                                <th>收單時間</th>
                                <th>負責人</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{foreach from = $order item = foo}}
                            <tr>
                                <td><a href="/Bento/Home/singleOrder?orderId={{$foo[0]}}">訂購</a></td>
                                <td>{{$foo[1]}}</td>
                                <td>{{$foo[2]}}</td>
                                <td>{{$foo[3]}}</td>
                            </tr>
                            {{/foreach}}
                         </tbody>
                    </table>

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