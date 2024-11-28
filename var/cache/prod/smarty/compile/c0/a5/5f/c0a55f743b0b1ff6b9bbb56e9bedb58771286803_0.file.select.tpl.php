<?php
/* Smarty version 3.1.48, created on 2024-11-01 14:24:25
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\admin\themes\default\template\controllers\zones\select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6724d6891a2a88_78854348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a55f743b0b1ff6b9bbb56e9bedb58771286803' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\admin\\themes\\default\\template\\controllers\\zones\\select.tpl',
      1 => 1730126529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6724d6891a2a88_78854348 (Smarty_Internal_Template $_smarty_tpl) {
?><select id="zone_to_affect" name="zone_to_affect">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zones']->value, 'z');
$_smarty_tpl->tpl_vars['z']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['z']->value['id_zone'];?>
"><?php echo $_smarty_tpl->tpl_vars['z']->value['name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php }
}
