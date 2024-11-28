<?php
/* Smarty version 3.1.48, created on 2024-11-01 14:24:27
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\admin\themes\default\template\helpers\tree\tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6724d68b5c13b9_47679314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '606cc353c7fe5c0eae260e56122e9fea5bd41654' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\admin\\themes\\default\\template\\helpers\\tree\\tree.tpl',
      1 => 1730126548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6724d68b5c13b9_47679314 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php }
}
