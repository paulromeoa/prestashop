<?php
/* Smarty version 4.3.1, created on 2024-07-15 23:17:16
  from 'C:\wamp64\www\prestashop\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6695adfcd13563_35915562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8014e34223e8a7f30d5251861ff9be29726bd5a2' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1720538811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6695adfcd13563_35915562 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
