setInterval(function()
{
    $.ajax({
        url: "/Bento/Home/renewOrderStatus?orderId=" + $('#orderId').text(),
        success: function(data) {
            var orderstatus = JSON.parse(data);
            var count = orderstatus.length;
            var itemData = "";

            for (i = 0 ; i < count ; i++) {
                itemData += "<tr>" +
                            "<td>" + orderstatus[i][2] + "</td>" +
                            "<td>" + orderstatus[i][3] + "</td>" +
                            "<td>" + orderstatus[i][4] + "</td>" +
                            "<td>" +
                                "<form action='cancelOrderItem' method='post'>" +
                                    "<input type='hidden' name='orderId' value=" + orderstatus[i][1] + ">" +
                                    "<input type='hidden' name='singleItemID' value=" + orderstatus[i][0] + ">" +
                                    "<input type='hidden' name='userId' value=" + orderstatus[i][5] + ">" +
                                    "<input type='submit' class='btn-danger' value='取消'>" +
                                "</form>" +
                            "</td>" +
                            "</tr>";
            }

            $("#list").html(
                "<div>" +
                "<legend style='text-align: center'>訂購狀況</legend>" +
                "<table class='table table-bordered'>" +
                    "<thead>" +
                        "<tr>" +
                            "<th>訂購人</th>" +
                            "<th>訂購項目</th>" +
                            "<th>單價</th>" +
                            "<th>取消餐點</th>" +
                        "</tr>" +
                    "</thead>" +
                    "<tbody>" +
                        itemData +
                    "</tbody>" +

                    "<table class='table table-bordered'>" +
                        "<tr>" +
                            "<th>總金額</th>" +
                            "<th>" + orderstatus[0][6] + "</th>" +
                        "</tr>" +
                    "</table>" +
                "</div>"
            );
        }
    })
},1000)

setInterval(function()
{
    $.ajax({
        url: "/Bento/Home/renewItemCount?orderId=" + $('#orderId').text(),
        success: function(data) {
            var singleitem = JSON.parse(data);
            var itemcount = singleitem.length;
            var newtable = "";

            for (i = 0 ; i < itemcount ; i++) {
                newtable += "<tr>" +
                            "<td>" + singleitem[i][0] +"</td>" +
                            "<td>" + singleitem[i][1] +"</td>" +
                            "</tr>";
            }

            $("#listbytotal").html(
                "<div class='modal-content'>" +
                    "<div class='modal-header'>" +
                        "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" +
                        "<h4 class='modal-title' id='myModalLabel'>各品項總數量</h4>" +
                    "</div>" +
                    "<div class='modal-body' id='listbytotal'>" +
                        "<table class='table table-bordered'>" +
                        "<thead>" +
                            "<tr>" +
                                "<th>品項</th>" +
                                "<th>數量</th>" +
                            "</tr>" +
                        "</thead>" +
                        "<tbody>" +
                            newtable +
                        "</tbody>" +
                    "</table>" +
                    "</div>" +
                "</div>"
            );
        }
    })
},1000)

function check()
{
	if (reg.purchaser.value == "")
	{
		alert("請填寫訂購人");
	}
	else reg.submit();
}
