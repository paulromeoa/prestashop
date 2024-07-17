<?php
/* Smarty version 4.3.1, created on 2024-07-16 08:28:37
  from 'C:\wamp64\www\prestashop\modules\ps_checkpayment\views\templates\hook\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66962f35ee5321_26739497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33a230b33383b96a81d17fcf0428331dba6bc61a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_checkpayment\\views\\templates\\hook\\infos.tpl',
      1 => 1720538885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66962f35ee5321_26739497 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
<img src="../modules/ps_checkpayment/logo.png" style="float:left; margin-right:15px;" height="60">
<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept payments by check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment'.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
