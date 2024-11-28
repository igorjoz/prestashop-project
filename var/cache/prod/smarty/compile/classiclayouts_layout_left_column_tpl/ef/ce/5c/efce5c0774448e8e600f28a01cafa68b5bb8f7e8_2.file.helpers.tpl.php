<?php
/* Smarty version 3.1.48, created on 2024-11-01 14:30:29
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6724d7f5748e19_58413927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efce5c0774448e8e600f28a01cafa68b5bb8f7e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1730126705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6724d7f5748e19_58413927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\ef\\ce\\5c\\efce5c0774448e8e600f28a01cafa68b5bb8f7e8_2.file.helpers.tpl.php',
    'uid' => 'efce5c0774448e8e600f28a01cafa68b5bb8f7e8',
    'call_name' => 'smarty_template_function_renderLogo_10602363766724d7f57424f1_22512296',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_10602363766724d7f57424f1_22512296 */
if (!function_exists('smarty_template_function_renderLogo_10602363766724d7f57424f1_22512296')) {
function smarty_template_function_renderLogo_10602363766724d7f57424f1_22512296(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_10602363766724d7f57424f1_22512296 */
}
