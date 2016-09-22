<?php
/* Smarty version 3.1.30, created on 2016-09-22 01:20:49
  from "/home/ubuntu/workspace/Bento/views/singleOrder.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e331f13fcc66_84745409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87911035d7b7714964c1e7b30b77b034cb09d006' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/singleOrder.tpl',
      1 => 1474507241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/navbar.tpl' => 1,
  ),
),false)) {
function content_57e331f13fcc66_84745409 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->tpl_vars['single'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['single']->step = 1;$_smarty_tpl->tpl_vars['single']->total = (int) ceil(($_smarty_tpl->tpl_vars['single']->step > 0 ? $_smarty_tpl->tpl_vars['dataCount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['dataCount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['single']->step));
if ($_smarty_tpl->tpl_vars['single']->total > 0) {
for ($_smarty_tpl->tpl_vars['single']->value = 0, $_smarty_tpl->tpl_vars['single']->iteration = 1;$_smarty_tpl->tpl_vars['single']->iteration <= $_smarty_tpl->tpl_vars['single']->total;$_smarty_tpl->tpl_vars['single']->value += $_smarty_tpl->tpl_vars['single']->step, $_smarty_tpl->tpl_vars['single']->iteration++) {
$_smarty_tpl->tpl_vars['single']->first = $_smarty_tpl->tpl_vars['single']->iteration == 1;$_smarty_tpl->tpl_vars['single']->last = $_smarty_tpl->tpl_vars['single']->iteration == $_smarty_tpl->tpl_vars['single']->total;
$_prefixVariable10=ob_get_clean();
echo $_prefixVariable10;?>

                                        <tr>
                                            <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['allPurchaser']->value[$_smarty_tpl->tpl_vars['single']->value][2];
$_prefixVariable11=ob_get_clean();
echo $_prefixVariable11;?>
</td>
                                            <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['allPurchaser']->value[$_smarty_tpl->tpl_vars['single']->value][3];
$_prefixVariable12=ob_get_clean();
echo $_prefixVariable12;?>
</td>
                                            <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['allPurchaser']->value[$_smarty_tpl->tpl_vars['single']->value][4];
$_prefixVariable13=ob_get_clean();
echo $_prefixVariable13;?>
</td>
                                            <td>
                                                <form action="cancelOrderItem" method="post">
                                                    <input type="hidden" name="orderId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['allPurchaser']->value[$_smarty_tpl->tpl_vars['single']->value][1];
$_prefixVariable14=ob_get_clean();
echo $_prefixVariable14;?>
">
                                                    <input type="hidden" name="singleItemID" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['allPurchaser']->value[$_smarty_tpl->tpl_vars['single']->value][0];
$_prefixVariable15=ob_get_clean();
echo $_prefixVariable15;?>
">
                                                    <input type="hidden" name="userId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['allPurchaser']->value[$_smarty_tpl->tpl_vars['single']->value][5];
$_prefixVariable16=ob_get_clean();
echo $_prefixVariable16;?>
">
                                                    <input type="submit" class="btn-danger" value="取消">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php ob_start();
}
}
$_prefixVariable17=ob_get_clean();
echo $_prefixVariable17;?>

                                    </tbody>
                                </table>
                                <div class="col-lg-12 text-center">
                                    <ul class="pager">
                                        <li>
                                            <?php ob_start();
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['allPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['allPage']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;
$_prefixVariable18=ob_get_clean();
echo $_prefixVariable18;?>

                                            <a href="/Bento/Home/singleOrder?orderId=<?php ob_start();
echo $_smarty_tpl->tpl_vars['orderData']->value[0];
$_prefixVariable19=ob_get_clean();
echo $_prefixVariable19;?>
&page=<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable20=ob_get_clean();
echo $_prefixVariable20;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable21=ob_get_clean();
echo $_prefixVariable21;?>
</a>
                                            <?php ob_start();
}
}
$_prefixVariable22=ob_get_clean();
echo $_prefixVariable22;?>

                                        </li>
                                    </ul>
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
$_prefixVariable23=ob_get_clean();
echo $_prefixVariable23;?>

                                        <tr>
                                            <td><input type="checkbox" name="shopMenuId[]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[0];
$_prefixVariable24=ob_get_clean();
echo $_prefixVariable24;?>
"></td>
                                            <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[2];
$_prefixVariable25=ob_get_clean();
echo $_prefixVariable25;?>
</td>
                                            <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[3];
$_prefixVariable26=ob_get_clean();
echo $_prefixVariable26;?>
</td>
                                        </tr>
                                        <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable27=ob_get_clean();
echo $_prefixVariable27;?>

                                    </tbody>
                                </table>
                                <input type="hidden" name="orderId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['orderId']->value;
$_prefixVariable28=ob_get_clean();
echo $_prefixVariable28;?>
">
                                <input type="hidden" name="userId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['userId']->value;
$_prefixVariable29=ob_get_clean();
echo $_prefixVariable29;?>
">
                                <input type="hidden" name="userName" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['userName']->value;
$_prefixVariable30=ob_get_clean();
echo $_prefixVariable30;?>
">
                                <input type="submit" class="btn btn-primary" value="送出">
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
