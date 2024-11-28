<?php
/* Smarty version 3.1.48, created on 2024-11-12 21:21:08
  from 'module:psmainmenupsmainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6733b8b46a4718_93883243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:psmainmenupsmainmenu.tpl',
      1 => 1731441430,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6733b8b46a4718_93883243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\var\\cache\\dev\\smarty\\compile\\child_classic\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.psmainmenupsmainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_9155366336733b8b4694dd2_35441385',
  ),
));
?><!-- begin C:\xampp\htdocs\monsteriada-prestashop-clone/themes/classic/modules/ps_mainmenu/ps_mainmenu.tpl --><?php $_smarty_tpl->_assignInScope('_counter', 0);?>


<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'root_label'=>"KategorieGadżetów"), true);?>

    <div class="clearfix"></div>
</div>
<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu2">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'root_label'=>"TematykiGadżetów"), true);?>

    <div class="clearfix"></div>
</div>
<!-- end C:\xampp\htdocs\monsteriada-prestashop-clone/themes/classic/modules/ps_mainmenu/ps_mainmenu.tpl --><?php }
/* smarty_template_function_menu_9155366336733b8b4694dd2_35441385 */
if (!function_exists('smarty_template_function_menu_9155366336733b8b4694dd2_35441385')) {
function smarty_template_function_menu_9155366336733b8b4694dd2_35441385(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  
      <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
        <ul class="top-menu" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 2) {?>id="top-menu"<?php }?> data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['node']->value['label'] == 'Kategorie' || $_smarty_tpl->tpl_vars['node']->value['label'] == $_smarty_tpl->tpl_vars['root_label']->value || $_smarty_tpl->tpl_vars['depth']->value > 1) {?>
              <div class="mm-block-display-janek <?php if ($_smarty_tpl->tpl_vars['depth']->value == 2) {?> mm-indent-block-janek <?php }?>">
                <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current <?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 3) {?> deeplevel_janek <?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
                  <?php if ($_smarty_tpl->tpl_vars['depth']->value > 1) {?>
                    <a
                      class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 2) {?>dropdown-item<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 2) {?> dropdown-submenu<?php }?>"
                      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
                      <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>
                    >
                      <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                                                <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
                        <span class="float-xs-right hidden-md-up">
                          <span data-target="#top_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" class="navbar-toggler collapse-icons">
                            <i class="material-icons add">&#xE313;</i>
                            <i class="material-icons remove">&#xE316;</i>
                          </span>
                        </span>
                      <?php }?>
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                  <?php }?>
                  <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

                  <?php }?>
                </li>
              </div>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }
}}
/*/ smarty_template_function_menu_9155366336733b8b4694dd2_35441385 */
}
