<?php
/* Smarty version 3.1.33, created on 2023-11-16 00:02:31
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65558647544c37_41032447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1700086573,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65558647544c37_41032447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18764531016555864753f968_04099426';
?>

<div id="block_myaccount_infos" class="col-lg-3 links wrapper">
    <p class="footer__title footer__title--desktop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
    <a href="#footer_account_list" class="footer__title--mobile footer__title" data-toggle="collapse"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
  <ul class="account-list collapse show" data-collapse-hide-mobile id="footer_account_list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_account_urls']->value, 'my_account_url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['my_account_url']->value) {
?>
        <li>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBlock'),$_smarty_tpl ) );?>

	</ul>
</div>
<?php }
}
