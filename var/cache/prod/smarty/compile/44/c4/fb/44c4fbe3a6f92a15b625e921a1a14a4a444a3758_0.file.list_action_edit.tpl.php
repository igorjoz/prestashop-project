<?php
/* Smarty version 3.1.48, created on 2024-11-01 14:24:26
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\admin\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6724d68a835933_65943408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44c4fbe3a6f92a15b625e921a1a14a4a444a3758' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1730126551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6724d68a835933_65943408 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
