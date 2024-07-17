<?php
/* Smarty version 4.3.1, created on 2024-07-16 09:06:58
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_669638323b0984_75793493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1720539043,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_669638323b0984_75793493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\ec\\1a\\2a\\ec1a2ac1e8d3941462b87b3c64092bf107086094_2.file.helpers.tpl.php',
    'uid' => 'ec1a2ac1e8d3941462b87b3c64092bf107086094',
    'call_name' => 'smarty_template_function_renderLogo_783601669638158fd569_43150229',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/en/my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/prestashop/en/guest-tracking" title="Order tracking" rel="nofollow">Order tracking</a></li>
        <li><a href="http://localhost/prestashop/en/my-account" title="Log in to your customer account" rel="nofollow">Sign in</a></li>
        <li><a href="http://localhost/prestashop/en/registration" title="Create account" rel="nofollow">Create account</a></li>
        <li>
  <a href="//localhost/prestashop/en/module/ps_emailalerts/account" title="My alerts">
    My alerts
  </a>
</li>

       
	</ul>
</div>
<?php }
}
