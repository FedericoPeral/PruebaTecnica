<?php
/* Smarty version 3.1.33, created on 2023-11-15 23:59:22
  from 'module:informacioproductoviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6555858a633a76_86524636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61257957d78a559ecd65d06e3d030eefb697e5de' => 
    array (
      0 => 'module:informacioproductoviewste',
      1 => 1700103444,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6555858a633a76_86524636 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="form-group">
    <label for="exampleFormControlTextarea1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Información del producto','mod'=>'informacioproducto'),$_smarty_tpl ) );?>
</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="custom_field" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value && $_smarty_tpl->tpl_vars['custom_field']->value != '') {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['custom_field']->value,'htmlall','UTF-8' ));?>
"<?php }?>></textarea>
  </div><?php }
}
