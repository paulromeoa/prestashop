<?php
/* Smarty version 4.3.1, created on 2024-07-15 23:23:55
  from 'C:\wamp64\www\prestashop\admin2163aupmxfmd3sz1o8k\themes\default\template\controllers\images\modal_confirm_delete_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6695af8b9b11e3_32678930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f37bf6287609daec7b9a2175aa3e066a0a9c8e41' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin2163aupmxfmd3sz1o8k\\themes\\default\\template\\controllers\\images\\modal_confirm_delete_type.tpl',
      1 => 1720538788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6695af8b9b11e3_32678930 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <div class="form-group">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If you delete this image format, the theme won't be able to use it anymore. This will result in a degraded experience on your front office.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

  </div>

  <div class="modal-checkbox">
    <input type="checkbox" id="delete_linked_images" name="delete">
    <label for="delete_linked_images"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Delete the images linked to this image setting",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>
</label>
  </div>
</div>
<?php }
}
