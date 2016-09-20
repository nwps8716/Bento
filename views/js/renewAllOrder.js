setInterval(function()
{

    $.ajax({
        url: "/Bento/Home/renewUserPage",
        success: function(data) {
            var allOrder = JSON.parse(data);
            var count = allOrder.length;
            var newtable = "";

            for (i = 0 ; i < count ; i++) {
                newtable += "<tr>" +
                                "<td><a href=/Bento/Home/singleOrder?orderId=" + allOrder[i][0] + ">訂購</a></td>" +
                                "<td>" + allOrder[i][1] + "</td>" +
                                "<td>" + allOrder[i][2] + "</td>" +
                                "<td>" + allOrder[i][3] + "</td>" +
                                "<td>" + allOrder[i][4] + "</td>" +
                            "</tr>";
            }

            $("#orderList").html(
                "<div>" +
                "<table class='table'>" +
                        "<thead>" +
                            "<tr>" +
                                "<th>連結</th>" +
                                "<th>訂單名稱</th>" +
                                "<th>電話</th>" +
                                "<th>收單時間</th>" +
                                "<th>負責人</th>" +
                            "</tr>" +
                        "</thead>" +
                        "<tbody>" +
                            newtable +
                        "</tbody>" +
                "</table>" +
                "</div>"
            );
        }
    })
},1000)