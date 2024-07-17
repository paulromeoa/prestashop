<?php
/* Smarty version 4.3.1, created on 2024-07-15 23:23:58
  from 'C:\wamp64\www\prestashop\admin2163aupmxfmd3sz1o8k\themes\default\template\controllers\images\helpers\list\list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6695af8e79e3c2_58158951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71cbdd0f6d708f8895d4e017f3355bf2f908dd87' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin2163aupmxfmd3sz1o8k\\themes\\default\\template\\controllers\\images\\helpers\\list\\list_action_delete.tpl',
      1 => 1720538788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6695af8e79e3c2_58158951 (Smarty_Internal_Template $_smarty_tpl) {
?> <a href="#"
 title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
"
 class="delete"
 onclick="
  <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
    var modalConfirmDeleteType = $('#modalConfirmDeleteType');
    $('.btn-confirm-delete-images-type', modalConfirmDeleteType).attr('data-confirm-url', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
');
    modalConfirmDeleteType.modal('show');
  <?php } else { ?>
    event.stopPropagation();event.preventDefault()
  <?php }?>
">
<i class="icon-trash"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
