<?php
/* Smarty version 4.3.1, created on 2024-07-15 23:17:24
  from 'C:\wamp64\www\prestashop\admin2163aupmxfmd3sz1o8k\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6695ae04071bf4_05605685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b63a950cab6769644351c8fe1a21605684b1783' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin2163aupmxfmd3sz1o8k\\themes\\default\\template\\content.tpl',
      1 => 1720538788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6695ae04071bf4_05605685 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
