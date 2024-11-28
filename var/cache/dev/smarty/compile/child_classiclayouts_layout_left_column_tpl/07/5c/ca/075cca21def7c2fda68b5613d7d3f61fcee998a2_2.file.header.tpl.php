<?php
/* Smarty version 3.1.48, created on 2024-11-12 21:21:29
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\themes\classic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6733b8c934c5b8_18136329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '075cca21def7c2fda68b5613d7d3f61fcee998a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\themes\\classic\\templates\\_partials\\header.tpl',
      1 => 1731441430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6733b8c934c5b8_18136329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20146238716733b8c9341b24_77799893', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2868321166733b8c9342c52_41879344', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20697669266733b8c9343a23_80599878', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_20146238716733b8c9341b24_77799893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_20146238716733b8c9341b24_77799893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_2868321166733b8c9342c52_41879344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_2868321166733b8c9342c52_41879344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="hidden-sm-down">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

        
        <div class="col-md-7 right-nav">
        </div>
      </div>
      <div class="hidden-md-up text-sm-center mobile">
        <div class="float-xs-left" id="menu-icon">
          <i class="material-icons d-inline">&#xE5D2;</i>
        </div>
        <div class="float-xs-right" id="_mobile_cart"></div>
        <div class="float-xs-right" id="_mobile_user_info"></div>
        <div class="top-logo" id="_mobile_logo"></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_20697669266733b8c9343a23_80599878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_20697669266733b8c9343a23_80599878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/12c63f6a95.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

              </h1>
            <?php } else { ?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php }?>
          <?php }?>
        </div>
        <div class="header-top-right col-md-10 col-sm-12 position-static">
          <div class="head-data-janek">
            <div class="infolinia-janek head-element-janek">
              Infolinia  <i class="fas fa-phone-square-alt"></i>  503 028 506
            </div>
            <div class="head-element-janek">
              Dostawa gratis od 250 zł
            </div>
            <div class="links-janek">
              <div class="head-element-janek">
                <a href="content/4-monsteriadapl-kim-jestesmy">O nas</a>
              </div>
              <div class="head-element-janek">
                <a href="content/3-regulamin">Regulamin</a>
              </div>
              <div class="head-element-janek">
                <a href="content/1-dostawa">Dostawa</a>
              </div>
              <div class="head-element-janek">
                <a href="kontakt">Kontakt</a>
              </div>
              <div class="head-element-janek">
                <a href="https://www.facebook.com/monsteriadapl">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/monsteriada/">
                  <i class="fab fa-instagram-square"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="two-data-janek">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayTop"),$_smarty_tpl ) );?>

            <div class="button_holder">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

            </div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="main-navigation-janek">
    <a class="button-item" id="start-page-btn" href="https://localhost/monsteriada-prestashop-clone">Start</a>
    <a class="button-item category-items-button">
      Gadżety wg kategorii
      <i class="icon-arrow-down"></i>
    </a>
    <a class="button-item topic-items-button">
      Gadżety wg tematyki
      <i class="icon-arrow-down"></i>
    </a>
    <a class="button-item" href="bestsellery">Bestsellery</a>
    <a class="button-item" href="promocje">Promocje</a>
    <a class="button-item" href="nowosci">Nowości</a>
    <a class="button-item" href="blog">Blog</a>
  </div>
  <?php echo '<script'; ?>
>
    window.onload = function() {
      if (window.location.href === 'http://localhost/monsteriada-prestashop-clone/') {
        const button = document.getElementById('start-page-btn');
        if (button) {
          button.style.setProperty('color', '#cce963', 'important');
        } else {
          console.log('Element not found');
        }
      }
    };
  <?php echo '</script'; ?>
>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
