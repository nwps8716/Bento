<?php
/* Smarty version 3.1.30, created on 2016-09-20 06:53:10
  from "/home/ubuntu/workspace/Bento/views/addShopPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0dcd6a6a687_39543651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dffe249a042eb82070454042b6f9fd6cf6d3333' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/addShopPage.tpl',
      1 => 1474354365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/adminNavbar.tpl' => 1,
  ),
),false)) {
function content_57e0dcd6a6a687_39543651 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/main.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="../views/js/main.js"><?php echo '</script'; ?>
>
        <?php ob_start();
if (isset($_smarty_tpl->tpl_vars['message']->value)) {
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

            <?php echo '<script'; ?>
> alert('<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
'); <?php echo '</script'; ?>
>
        <?php ob_start();
}
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>

    </head>
    <body>
        <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:views/adminNavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>


        <div class="container mar-top150">
            <div class="row">
                <div class="box">
                    <legend class="test-align-center">店家資料填寫</legend>

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
                                <input class="form-control" type="text" placeholder="台中市西屯區文心路一段888號" name="shopAddress">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="shoplabel col-form-label">電話:</label>
                            <div class="col-xs-10">
                                <input class="form-control" type="text" placeholder="04-2210-0122" name="shopPhone">
                            </div>
                        </div>
                        <div class="addshopdiv7">
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
                            <input type="hidden" name="userName" value="<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
">
                            <br></br><input type="button" onClick="shop_check()" class="btn btn-primary btn-lg" value="送出">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>



<?php }
}
