<?php
/* Smarty version 3.1.30, created on 2016-09-20 09:11:00
  from "/home/ubuntu/workspace/Bento/views/adminPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0fd2432ef16_38312135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c424a96f56fc235408e7f83e219d33797df4cda2' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/adminPage.tpl',
      1 => 1474362658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/adminNavbar.tpl' => 1,
  ),
),false)) {
function content_57e0fd2432ef16_38312135 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <legend class="test-align-center">所有訂單</legend>
                    <div id="orderList">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>連結</th>
                                <th>訂單名稱</th>
                                <th>電話</th>
                                <th>收單時間</th>
                                <th>負責人</th>
                                <th>鎖單</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>

                            <tr>
                                <td><a href="/Bento/Admin/adminSingleOrder?orderId=<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[0];
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
">訂購狀況</a></td>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[1];
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>
</td>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[2];
$_prefixVariable7=ob_get_clean();
echo $_prefixVariable7;?>
</td>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[3];
$_prefixVariable8=ob_get_clean();
echo $_prefixVariable8;?>
</td>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[4];
$_prefixVariable9=ob_get_clean();
echo $_prefixVariable9;?>
</td>
                                <td>
                                    <form action="cancelOrder" method="post">
                                        <input type="hidden" name="orderId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[0];
$_prefixVariable10=ob_get_clean();
echo $_prefixVariable10;?>
">
                                        <input type="hidden" name="userId" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[6];
$_prefixVariable11=ob_get_clean();
echo $_prefixVariable11;?>
">
                                        <input type="submit" class="btn-danger" value="刪除">
                                    </form>
                                </td>
                            </tr>
                            <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable12=ob_get_clean();
echo $_prefixVariable12;?>

                         </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
