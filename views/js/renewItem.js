setInterval(function()
{
    $.ajax({
        url: "/Bento/Home/renew?orderId=" + $('#hidden').text(),
        success: function(data) {
            var test = JSON.parse(data);
            var count = test.length;
            var itemData = "";

            for (i = 0 ; i < count ; i++) {
                itemData +=  "<tr>" +
                            "<td>" + test[i][0] + "</td>" +
                            "<td>" + test[i][1] + "</td>" +
                            "<td>" + test[i][2] + "</td>" +
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
                        "</tr>" +
                    "</thead>" +
                    "<tbody>" +
                        itemData +
                    "</tbody>" +
                    "<table class='table table-bordered'>" +
                        "<tr>" +
                            "<th>總金額</th>" +
                            "<th>" + test[0][3] + "</th>" +
                        "</tr>" +
                    "</table>" +
                "</div>"
            );
        }
    })
},100)

function check()
{
	if (reg.purchaser.value == "")
	{
		alert("請填寫訂購人");
	}
	else reg.submit();
}
