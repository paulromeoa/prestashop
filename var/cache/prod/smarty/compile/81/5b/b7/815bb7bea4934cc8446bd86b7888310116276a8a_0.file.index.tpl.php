<?php
/* Smarty version 4.3.1, created on 2024-07-15 23:18:50
  from 'C:\wamp64\www\prestashop\modules\ps_themecusto\views\templates\admin\controllers\configuration\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6695ae5a402be9_17616002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815bb7bea4934cc8446bd86b7888310116276a8a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_themecusto\\views\\templates\\admin\\controllers\\configuration\\index.tpl',
      1 => 1720538891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./dropdownList.tpl' => 3,
    'file:./elem/modal.tpl' => 1,
  ),
),false)) {
function content_6695ae5a402be9_17616002 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="psthemecusto" class="container-fluid clearfix">
    <div class="panel row">
        <div class="panel-heading text-center">
            <button class="btn btn-primary btn-lg selected" data-id-modal="homepageModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Homepage','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
            <button class="btn btn-primary btn-lg" data-id-modal="categoryModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category page','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
            <button class="btn btn-primary btn-lg" data-id-modal="productModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product page','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['homePageList']->value,'idModal'=>'homepage','defaultModalClass'=>''), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['categoryPageList']->value,'idModal'=>'category','defaultModalClass'=>'hide'), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./dropdownList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elementsList'=>$_smarty_tpl->tpl_vars['productPageList']->value,'idModal'=>'product','defaultModalClass'=>'hide'), 0, true);
?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./elem/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php }
}
