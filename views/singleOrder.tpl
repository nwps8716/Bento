<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/main.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="../views/js/bootstrap.min.js"></script>
        <script src="../views/js/renewItem.js"></script>
        {{if isset($message)}}
            <script> alert('{$message}'); </script>
        {{/if}}
    </head>
    <body>
        {{include file = "views/navbar.tpl"}}

        <div class="container mar-top150">
            <div class="row">
                <div class="box">
                    <legend class="test-align-center">歡迎訂購</legend>
                    <div id="Div0">
                        <div id="top">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>店家</th>
                                        <th>收單時間</th>
                                        <th>負責人</th>
                                        <th>備註</th>
                                    </tr>
                                </thead>
                                <div id='orderId' class="display">{{$orderData[0]}}</div>  <!--將值傳給js檔使用-->
                                <tbody>
                                    <tr>
                                        <td>{{$orderData[1]}}</td>
                                        <td>{{$orderData[2]}}</td>
                                        <td>{{$orderData[3]}}</td>
                                        <td>{{$orderData[4]}}</td>
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
                                    {{foreach from = $allPurchaser item = purchaser}}
                                    <tr>
                                        <td>{{$purchaser[2]}}</td>
                                        <td>{{$purchaser[3]}}</td>
                                        <td>{{$purchaser[4]}}</td>
                                        <td>
                                            <form action="cancelOrderItem" method="post">
                                                <input type="hidden" name="orderId" value="{{$orderId}}">
                                                <input type="hidden" name="singleItemID" value="{{$purchaser[0]}}">
                                                <input type="submit" class="btn-primary" value="取消">
                                                <div id='singleItemID' class="display">{{$purchaser[0]}}</div>      <!--將值傳給js檔使用-->
                                            </form>
                                        </td>
                                    </tr>
                                    {{/foreach}}
                                </tbody>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>總金額</th>
                                        <th>{{$totalmoney}}</th>
                                    </tr>
                                </table>
                            </div>
                            <!-- Large modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">各品項統計</button>

                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content" id="listbytotal">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">各品項總數量</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>品項</th>
                                                    <th>數量</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{foreach from = $countByItem item = allItem}}
                                                <tr>
                                                    <td>{{$allItem[0]}}</td>
                                                    <td>{{$allItem[1]}}</td>
                                                </tr>
                                                {{/foreach}}
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
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
                                <input type="text" class="form-control" name="purchaser" placeholder="訂購人姓名"></br>
                                <input type="button" onClick="check()" class="btn btn-primary" value="送出">
                            </form>
                        </div>
                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
        </div>
    </body>
</html>