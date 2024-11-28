<?php
/* Smarty version 3.1.48, created on 2024-11-01 14:24:23
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\admin\themes\default\template\controllers\shop\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6724d687c4f0f1_01073981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8731f7af148c19f17133c5ed211ce6b47513aa46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1730126532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6724d687c4f0f1_01073981 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }
}
