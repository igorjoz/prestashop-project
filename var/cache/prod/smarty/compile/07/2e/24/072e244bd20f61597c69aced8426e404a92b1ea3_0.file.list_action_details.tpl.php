<?php
/* Smarty version 3.1.48, created on 2024-11-01 14:24:26
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\admin\themes\default\template\helpers\list\list_action_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6724d68a766a31_15885276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072e244bd20f61597c69aced8426e404a92b1ea3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\admin\\themes\\default\\template\\helpers\\list\\list_action_details.tpl',
      1 => 1730126552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6724d68a766a31_15885276 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" id="details_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['params']->value['action'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="">
	<i class="icon-eye-open"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
