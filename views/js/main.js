function add_new_data()
{
    //先取得目前的row數
    var num = document.getElementById("mytable").rows.length;
    //建立新的tr 因為是從0開始算 所以目前的row數剛好為目前要增加的第幾個tr
    var Tr = document.getElementById("mytable").insertRow(num);
    //建立新的td 而Tr.cells.length就是這個tr目前的td數
    Td = Tr.insertCell(Tr.cells.length);
    //而這個就是要填入td中的innerHTML
    Td.innerHTML='<input name="food[]" type="text" size="12">';
    //這裡也可以用不同的變數來辨別不同的td (我是用同一個比較省事XD)
    Td = Tr.insertCell(Tr.cells.length);
    Td.innerHTML='<input name="price[]" type="number" size="12" min="0">';
    //這樣就好囉 記得td數目要一樣 不然會亂掉~
}

function remove_data()
{
    //先取得目前的row數
    var num = document.getElementById("mytable").rows.length;
    //防止把標題跟原本的第一個刪除XD
    if(num >2)
    {
    //刪除最後一個
    document.getElementById("mytable").deleteRow(-1);
    }
}

function signup_check()
{
	if(reg.userName.value == "")
	{
		alert("請輸入帳號");
	}
	else if(reg.passWord.value == "")
	{
		alert("請輸入密碼");
	}
	else if(reg.checkPassWord.value == "")
	{
		alert("請輸入確認密碼");
	}
	else if(reg.passWord.value != reg.checkPassWord.value)
	{
	    alert("驗證密碼錯誤");
	}
	else reg.submit();
}

function signin_check()
{
	if(reg.userName.value == "") {
		alert("請輸入帳號");
	} else if(reg.passWord.value == "") {
		alert("請輸入密碼");
	} else {
	    reg.submit();
	}
}

function order_check()
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

function shop_check()
{
	if(reg.shopName.value == "")
	{
		alert("請輸入店名");
	}
	else if(reg.shopAddress.value == "")
	{
		alert("請輸入地址");
	}
	else if(reg.shopPhone.value == "")
	{
		alert("請輸入電話");
	}
	else reg.submit();
}
