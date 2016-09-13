<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">
        <script src="../views/js/main.js"></script>

        <script type="text/javascript">
            function check()
            {
            	if(reg.shopSelect.value == "")
            	{
            		alert("請選擇店家");
            	}
            	else if(reg.endTime.value == "")
            	{
            		alert("請填寫收單時間");
            	}
            	else if(reg.principal.value == "")
            	{
            		alert("請填寫負責人");
            	}
            	else reg.submit();
            }
        </script>
    </head>
    <body>
        {{include file="views/navbar.tpl"}}

        <div class="container" style="margin-top:150px">
            <div class="row">
                <div class="box col-sm-offset-4 col-sm-4">
                    <legend style="text-align: center">新增訂購單</legend>

                    <form action="uploadOrder" method="post" name="reg">
                        <div class="form-group">
                    		<label>選擇店家</label>
                            <select class="form-control" name="shopSelect">
                                <option value="">--請選擇--</option>
                                {{foreach from = $shopName item = foo}}
                                    <option>{{$foo}}</option>
                                {{/foreach}}
                            </select>
        				</div>
                        <div class="form-group">
                			<label>收單時間</label>
        					<input onload="myFunction()" type="datetime-local" class="form-control" name="endTime" min="{{$nowTime}}" max="2018-11-16T21:25:33">
        				</div>
        				<div class="form-group">
                			<label>負責人</label>
        					<input type="text" class="form-control" name="principal" placeholder="貝克漢">
        				</div>
        				<div class="form-group">
                			<label>備註</label>
        					<input type="text" class="form-control" name="remark" placeholder="收錢時間">
        				</div>
        				<input type="hidden" name="userName" value="{$userName}">
                        <input type="button" onClick="check()" class="btn btn-primary col-xs-12" value="送出">
                    </form>
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



