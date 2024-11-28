<?php
/* Smarty version 3.1.48, created on 2024-11-12 21:24:32
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\admin-dev\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6733b9802e7e83_73780588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f535a33980bffec4602d6cfd8b00bd2dd38cc9ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\admin-dev\\themes\\default\\template\\content.tpl',
      1 => 1731441414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6733b9802e7e83_73780588 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
