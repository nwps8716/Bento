<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/main.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        {{if isset($message)}}
            <script> alert('{$message}'); </script>
        {{/if}}
    </head>
    <body>
        {{include file = "views/navbar.tpl"}}

        <div class="container mar-top150">
            <div class="row">
                <div class="box">
                    <legend class="test-align-center">所有訂單</legend>
                    <div id="orderList">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>連結</th>
                                <th>訂單名稱</th>
                                <th>電話</th>
                                <th>收單時間</th>
                                <th>負責人</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{foreach from = $order item = foo}}
                            <form action="singleOrder">
                            <tr>
                                <td><a href="/Bento/Home/singleOrder?orderId={{$foo[0]}}">訂購</a></td>
                                <td>{{$foo[1]}}</td>
                                <td>{{$foo[2]}}</td>
                                <td>{{$foo[3]}}</td>
                                <td>{{$foo[4]}}</td>
                            </tr>
                            </form>
                            {{/foreach}}
                         </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>