<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/main.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="../views/js/bootstrap.min.js"></script>

        {{if isset($message)}}
            <script> alert('{$message}'); </script>
        {{/if}}
    </head>
    <body>
        {{include file = "views/navbar.tpl"}}

        <div class="container mar-top150">
            <div class="row">
                <div class="box">
                    <legend class="test-align-center">{{$orderData[1]}}</legend>
                    <div id="Div0">
                        <div id="top">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>電話</th>
                                        <th>收單時間</th>
                                        <th>負責人</th>
                                        <th>備註</th>
                                    </tr>
                                </thead>
                                <div id='orderId' class="display">{{$orderData[0]}}</div>  <!--將值傳給js檔使用-->
                                <tbody>
                                    <tr>
                                        <td>{{$orderData[2]}}</td>
                                        <td>{{$orderData[3]}}</td>
                                        <td>{{$orderData[4]}}</td>
                                        <td>{{$orderData[5]}}</td>
                                    </tr>
                                 </tbody>
                            </table>
                        </div>
                        <div id="left">
                            <div id="list">                                     <!-- 左邊區塊-訂購狀況表 -->
                                <legend class="test-align-center">訂購狀況</legend>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>訂購人</th>
                                            <th>訂購項目</th>
                                            <th>單價</th>
                                            <th>取消餐點</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{for $single = 0 to $dataCount-1}}
                                        <tr>
                                            <td>{{$allPurchaser[$single][2]}}</td>
                                            <td>{{$allPurchaser[$single][3]}}</td>
                                            <td>{{$allPurchaser[$single][4]}}</td>
                                            <td>
                                                <form action="cancelOrderItem" method="post">
                                                    <input type="hidden" name="orderId" value="{{$allPurchaser[$single][1]}}">
                                                    <input type="hidden" name="singleItemID" value="{{$allPurchaser[$single][0]}}">
                                                    <input type="hidden" name="userId" value="{{$allPurchaser[$single][5]}}">
                                                    <input type="submit" class="btn-danger" value="取消">
                                                </form>
                                            </td>
                                        </tr>
                                        {{/for}}
                                    </tbody>
                                </table>
                                <div class="col-lg-12 text-center">
                                    <ul class="pager">
                                        <li>
                                            {{for $page = 1 to $allPage}}
                                            <a href="/Bento/Home/singleOrder?orderId={{$orderData[0]}}&page={{$page}}">{{$page}}</a>
                                            {{/for}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="right">                                        <!-- 右邊區塊-下單區塊 -->
                            <legend class="test-align-center">下單區</legend>
                            <form action="uploadPurchaser" method="post" name="reg">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>選購</th>
                                            <th>餐點</th>
                                            <th>價格</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{foreach from = $shopMenu item = foo}}
                                        <tr>
                                            <td><input type="checkbox" name="shopMenuId[]" value="{{$foo[0]}}"></td>
                                            <td>{{$foo[2]}}</td>
                                            <td>{{$foo[3]}}</td>
                                        </tr>
                                        {{/foreach}}
                                    </tbody>
                                </table>
                                <input type="hidden" name="orderId" value="{{$orderId}}">
                                <input type="hidden" name="userId" value="{{$userId}}">
                                <input type="hidden" name="userName" value="{{$userName}}">
                                <input type="submit" class="btn btn-primary" value="送出">
                            </form>
                        </div>
                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
        </div>
    </body>
</html>