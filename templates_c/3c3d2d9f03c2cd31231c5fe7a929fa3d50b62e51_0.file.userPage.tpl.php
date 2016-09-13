<?php
/* Smarty version 3.1.30, created on 2016-09-09 02:05:39
  from "/home/ubuntu/workspace/Bento/views/userPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d218f3223161_38627044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c3d2d9f03c2cd31231c5fe7a929fa3d50b62e51' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/userPage.tpl',
      1 => 1473386736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/navbar.tpl' => 1,
  ),
),false)) {
function content_57d218f3223161_38627044 (Smarty_Internal_Template $_smarty_tpl) {
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
    </head>
    <body>
        <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:views/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>


        <div class="container" style="margin-top:150px">
            <div class="row">
                <div class="box">
                    <legend style="text-align: center">所有訂單</legend>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>連結</th>
                                <th>訂單名稱</th>
                                <th>收單時間</th>
                                <th>負責人</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>

                            <tr>
                                <td><a href="/Bento/Home/singleOrder?orderId=<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[0];
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
">訂購</a></td>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[1];
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
</td>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[2];
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
</td>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value[3];
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>
</td>
                            </tr>
                            <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable7=ob_get_clean();
echo $_prefixVariable7;?>

                         </tbody>
                    </table>

                </div>
            </div>
        </div>

        <?php ob_start();
if (isset($_smarty_tpl->tpl_vars['message']->value)) {
$_prefixVariable8=ob_get_clean();
echo $_prefixVariable8;?>

            <?php echo '<script'; ?>
>
                alert('<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
');
            <?php echo '</script'; ?>
>
        <?php ob_start();
}
$_prefixVariable9=ob_get_clean();
echo $_prefixVariable9;?>


    </body>
</html><?php }
}
