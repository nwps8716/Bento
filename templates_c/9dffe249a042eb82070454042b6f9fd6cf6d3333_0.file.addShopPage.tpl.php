<?php
/* Smarty version 3.1.30, created on 2016-09-06 08:54:41
  from "/home/ubuntu/workspace/Bento/views/addShopPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ce8451271dc0_57947813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dffe249a042eb82070454042b6f9fd6cf6d3333' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/addShopPage.tpl',
      1 => 1473152076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/navbar.tpl' => 1,
  ),
),false)) {
function content_57ce8451271dc0_57947813 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="../views/js/main.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            function check()
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
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:views/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="container" style="margin-top:150px">
            <div class="row">
                <div class="box">
                    <legend style="text-align: center">店家資料填寫</legend>

                    <form action="uploadShop" method="post" name="reg">
                        <div class="form-group row">
                            <label for="example-text-input" class="shoplabel col-form-label">店名:</label>
                            <div class="col-xs-10">
                                <input class="form-control" type="text" placeholder="無敵燒臘便當" name="shopName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="shoplabel col-form-label">地址:</label>
                            <div class="col-xs-10">
                                <input class="form-control" type="adress" placeholder="台中市西屯區文心路一段888號" name="shopAddress">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="shoplabel col-form-label">電話:</label>
                            <div class="col-xs-10">
                                <input class="form-control" type="tel" placeholder="04-2210-0122" name="shopPhone">
                            </div>
                        </div>
                        <div style="margin-left:100px">
                            <table id="mytable" width="200">
                                <tr>
                                    <td width="200" class="td01">餐點:</td>
                                    <td width="200" class="td01">價格:</td>
                                </tr>
                                <tr>
                                    <td><input name="food[]" type="text" size="12"></td>
                                    <td><input name="price[]" type="number" size="12" min="0"></td>
                                </tr>
                            </table>
                            <input type="button" value="+" onclick="add_new_data()">
                            <input type="button" value="-" onclick="remove_data()">
                            <br></br><input type="button" onClick="check()" class="btn btn-info btn-lg" value="送出">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>



<?php }
}
