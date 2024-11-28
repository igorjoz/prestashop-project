<?php
/* Smarty version 3.1.48, created on 2024-11-12 21:21:07
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6733b8b32cf323_85960760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '837fc00e62705d4638507052565fe9683c3b20df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1730561974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6733b8b32cf323_85960760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\var\\cache\\dev\\smarty\\compile\\child_classiclayouts_layout_full_width_tpl\\83\\7f\\c0\\837fc00e62705d4638507052565fe9683c3b20df_2.file.helpers.tpl.php',
    'uid' => '837fc00e62705d4638507052565fe9683c3b20df',
    'call_name' => 'smarty_template_function_renderLogo_5952228706733b8b32c6dd5_91471583',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_5952228706733b8b32c6dd5_91471583 */
if (!function_exists('smarty_template_function_renderLogo_5952228706733b8b32c6dd5_91471583')) {
function smarty_template_function_renderLogo_5952228706733b8b32c6dd5_91471583(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_5952228706733b8b32c6dd5_91471583 */
}
