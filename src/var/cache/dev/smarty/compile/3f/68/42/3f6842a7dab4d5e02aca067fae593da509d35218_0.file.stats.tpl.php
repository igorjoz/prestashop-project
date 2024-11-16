<?php
/* Smarty version 3.1.48, created on 2024-11-14 18:22:41
  from '/var/www/html/admin-dev/themes/default/template/controllers/stats/stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_673631e15dc958_43640431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f6842a7dab4d5e02aca067fae593da509d35218' => 
    array (
      0 => '/var/www/html/admin-dev/themes/default/template/controllers/stats/stats.tpl',
      1 => 1731603443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673631e15dc958_43640431 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value && $_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
