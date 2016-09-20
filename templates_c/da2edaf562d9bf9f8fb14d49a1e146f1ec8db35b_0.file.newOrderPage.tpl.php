<?php
/* Smarty version 3.1.30, created on 2016-09-20 13:52:56
  from "/home/ubuntu/workspace/Bento/views/newOrderPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0ceb81124d7_50155413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da2edaf562d9bf9f8fb14d49a1e146f1ec8db35b' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/newOrderPage.tpl',
      1 => 1474350652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/navbar.tpl' => 1,
  ),
),false)) {
function content_57e0ceb81124d7_50155413 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->_subTemplateRender("file:views/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>


        <div class="container mar-top150">
            <div class="row">
                <div class="box col-sm-offset-4 col-sm-4">
                    <legend class="test-align-center">新增訂購單</legend>

                    <form action="uploadOrder" method="post" name="reg">
                        <div class="form-group">
                    		<label>選擇店家</label>
                            <select class="form-control" name="shopSelect">
                                <option value="">--請選擇--</option>
                                <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopName']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>

                                    <option><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value;
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
</option>
                                <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>

                            </select>
        				</div>
                        <div class="form-group">
                			<label>收單時間</label>
        					<input onload="myFunction()" type="datetime-local" class="form-control" name="endTime" min="<?php ob_start();
echo $_smarty_tpl->tpl_vars['nowTime']->value;
$_prefixVariable7=ob_get_clean();
echo $_prefixVariable7;?>
" max="2018-11-16T21:25:33">
        				</div>
        				<div class="form-group">
                			<label>負責人</label>
        					<input type="text" class="form-control" name="principal" placeholder="貝克漢">
        				</div>
        				<div class="form-group">
                			<label>備註</label>
        					<input type="text" class="form-control" name="remark" placeholder="收錢時間">
        				</div>
        				<input type="hidden" name="userName" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['userName']->value;
$_prefixVariable8=ob_get_clean();
echo $_prefixVariable8;?>
">
        				<input type="hidden" name="userId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['userId']->value;
$_prefixVariable9=ob_get_clean();
echo $_prefixVariable9;?>
">
                        <input type="button" onClick="order_check()" class="btn btn-primary col-xs-12" value="送出">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>



<?php }
}
