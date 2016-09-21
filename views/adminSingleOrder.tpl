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
        {{include file = "views/adminNavbar.tpl"}}

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
                        <div id="adminleft">
                            <div id="list">                                     <!-- 左邊區塊-訂購狀況表 -->
                            <legend class="test-align-center">訂購狀況</legend>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>訂購人</th>
                                        <th>訂購項目</th>
                                        <th>單價</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{foreach from = $allPurchaser item = purchaser}}
                                    <tr>
                                        <td>{{$purchaser[2]}}</td>
                                        <td>{{$purchaser[3]}}</td>
                                        <td>{{$purchaser[4]}}</td>
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
                            <form action="outToExcel" method="post">
                                <input type="hidden" name="mode" value="{{$orderData[0]}}">
                                <input type="submit" value="匯出Excel">
                            </form></br>
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
                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
        </div>
    </body>
</html>