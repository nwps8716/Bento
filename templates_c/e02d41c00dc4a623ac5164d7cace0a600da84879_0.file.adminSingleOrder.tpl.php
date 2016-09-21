<?php
/* Smarty version 3.1.30, created on 2016-09-20 09:07:51
  from "/home/ubuntu/workspace/Bento/views/adminSingleOrder.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0fc6765a4d1_80087182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e02d41c00dc4a623ac5164d7cace0a600da84879' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/adminSingleOrder.tpl',
      1 => 1474362248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/adminNavbar.tpl' => 1,
  ),
),false)) {
function content_57e0fc6765a4d1_80087182 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    </tr>
                                    <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable14=ob_get_clean();
echo $_prefixVariable14;?>

                                </tbody>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>總金額</th>
                                        <th><?php ob_start();
echo $_smarty_tpl->tpl_vars['totalmoney']->value;
$_prefixVariable15=ob_get_clean();
echo $_prefixVariable15;?>
</th>
                                    </tr>
                                </table>
                            </div>
                            <form action="outToExcel" method="post">
                                <input type="hidden" name="mode" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['orderData']->value[0];
$_prefixVariable16=ob_get_clean();
echo $_prefixVariable16;?>
">
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
                                                <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countByItem']->value, 'allItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['allItem']->value) {
$_prefixVariable17=ob_get_clean();
echo $_prefixVariable17;?>

                                                <tr>
                                                    <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['allItem']->value[0];
$_prefixVariable18=ob_get_clean();
echo $_prefixVariable18;?>
</td>
                                                    <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['allItem']->value[1];
$_prefixVariable19=ob_get_clean();
echo $_prefixVariable19;?>
</td>
                                                </tr>
                                                <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable20=ob_get_clean();
echo $_prefixVariable20;?>

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
</html><?php }
}
