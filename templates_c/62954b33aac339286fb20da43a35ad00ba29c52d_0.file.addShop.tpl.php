<?php
/* Smarty version 3.1.30, created on 2016-09-06 07:04:48
  from "/home/ubuntu/workspace/Bento/views/addShop.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ce6a9089ad85_96523521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62954b33aac339286fb20da43a35ad00ba29c52d' => 
    array (
      0 => '/home/ubuntu/workspace/Bento/views/addShop.tpl',
      1 => 1473145487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/userPage.tpl' => 1,
  ),
),false)) {
function content_57ce6a9089ad85_96523521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/userPage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container" style="margin-top:150px">
    <div class="row">
        <div class="box">
            <legend style="text-align: center">店家資料填寫</legend>

            <div class="form-group row">
                <label for="example-text-input" class="shoplabel col-form-label">店名:</label>
                <div class="col-xs-10">
                    <input class="form-control" type="text" placeholder="無敵燒臘便當" id="example-text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-search-input" class="shoplabel col-form-label">地址:</label>
                <div class="col-xs-10">
                    <input class="form-control" type="adress" placeholder="台中市西屯區文心路一段888號" id="example-search-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-tel-input" class="shoplabel col-form-label">電話:</label>
                <div class="col-xs-10">
                    <input class="form-control" type="tel" placeholder="04-2210-0122" id="example-tel-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-number-input" class="shoplabel col-form-label">餐點:</label>
                <div class="col-xs-10">
                    <textarea class="form-control" placeholder="油雞便當,70,炸雞腿便當,80" id="exampleTextarea" rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
