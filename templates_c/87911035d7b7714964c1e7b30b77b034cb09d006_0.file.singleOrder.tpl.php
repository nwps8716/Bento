<?php
/* Smarty version 3.1.30, created on 2016-09-19 04:28:17
  from "/home/ubuntu/workspace/Bento/views/singleOrder.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57df6961566f16_15023677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87911035d7b7714964c1e7b30b77b034cb09d006' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/singleOrder.tpl',
      1 => 1474259296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/navbar.tpl' => 1,
  ),
),false)) {
function content_57df6961566f16_15023677 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/main.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../views/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../views/js/renewItem.js"><?php echo '</script'; ?>
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
                <div class="box">
                    <legend class="test-align-center"><?php ob_start();
echo $_smarty_tpl->tpl_vars['orderData']->value[1];
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
</legend>
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
                                <div id='orderId' class="display"><?php ob_start();
echo $_smarty_tpl->tpl_vars['orderData']->value[0];
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
</div>  <!--將值傳給js檔使用-->
                                <tbody>
                                    <tr>
                                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['orderData']->value[2];
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>
</td>
                                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['orderData']->value[3];
$_prefixVariable7=ob_get_clean();
echo $_prefixVariable7;?>
</td>
                                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['orderData']->value[4];
$_prefixVariable8=ob_get_clean();
echo $_prefixVariable8;?>
</td>
                                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['orderData']->value[5];
$_prefixVariable9=ob_get_clean();
echo $_prefixVariable9;?>
</td>
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
                                    <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPurchaser']->value, 'purchaser');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['purchaser']->value) {
$_prefixVariable10=ob_get_clean();
echo $_prefixVariable10;?>

                                    <tr>
                                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['purchaser']->value[2];
$_prefixVariable11=ob_get_clean();
echo $_prefixVariable11;?>
</td>
                                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['purchaser']->value[3];
$_prefixVariable12=ob_get_clean();
echo $_prefixVariable12;?>
</td>
                                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['purchaser']->value[4];
$_prefixVariable13=ob_get_clean();
echo $_prefixVariable13;?>
</td>
                                        <td>
                                            <form action="cancelOrderItem" method="post">
                                                <input type="hidden" name="orderId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['orderId']->value;
$_prefixVariable14=ob_get_clean();
echo $_prefixVariable14;?>
">
                                                <input type="hidden" name="singleItemID" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['purchaser']->value[0];
$_prefixVariable15=ob_get_clean();
echo $_prefixVariable15;?>
">
                                                <input type="submit" class="btn-primary" value="取消">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable16=ob_get_clean();
echo $_prefixVariable16;?>

                                </tbody>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>總金額</th>
                                        <th><?php ob_start();
echo $_smarty_tpl->tpl_vars['totalmoney']->value;
$_prefixVariable17=ob_get_clean();
echo $_prefixVariable17;?>
</th>
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
                                                <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countByItem']->value, 'allItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['allItem']->value) {
$_prefixVariable18=ob_get_clean();
echo $_prefixVariable18;?>

                                                <tr>
                                                    <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['allItem']->value[0];
$_prefixVariable19=ob_get_clean();
echo $_prefixVariable19;?>
</td>
                                                    <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['allItem']->value[1];
$_prefixVariable20=ob_get_clean();
echo $_prefixVariable20;?>
</td>
                                                </tr>
                                                <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable21=ob_get_clean();
echo $_prefixVariable21;?>

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
                                        <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopMenu']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_prefixVariable22=ob_get_clean();
echo $_prefixVariable22;?>

                                        <tr>
                                            <td><input type="checkbox" name="shopMenuId[]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[0];
$_prefixVariable23=ob_get_clean();
echo $_prefixVariable23;?>
"></td>
                                            <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[2];
$_prefixVariable24=ob_get_clean();
echo $_prefixVariable24;?>
</td>
                                            <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[3];
$_prefixVariable25=ob_get_clean();
echo $_prefixVariable25;?>
</td>
                                        </tr>
                                        <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable26=ob_get_clean();
echo $_prefixVariable26;?>

                                    </tbody>
                                </table>
                                <input type="hidden" name="orderId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['orderId']->value;
$_prefixVariable27=ob_get_clean();
echo $_prefixVariable27;?>
">
                                <input type="hidden" name="userId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['userId']->value;
$_prefixVariable28=ob_get_clean();
echo $_prefixVariable28;?>
">
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
</html><?php }
}
