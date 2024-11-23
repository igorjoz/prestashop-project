<?php
/* Smarty version 3.1.48, created on 2024-11-22 19:15:06
  from '/var/www/html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6740ca2a481059_92336512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3baf8de772c76a1a3e22a9e92a921fab392d279' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/footer.tpl',
      1 => 1731778591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740ca2a481059_92336512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14229537916740ca2a47f7b4_88918937', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8576435136740ca2a47ff91_54606230', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2186950396740ca2a480630_55026714', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="transport-providers-flex">
        <p><img src="http://localhost:8080/img/inpost.png"></p>
        <p><img src="http://localhost:8080/img/dpd.png"></p>
        <p><img src="http://localhost:8080/img/payu.png"></p>
        <p><img src="http://localhost:8080/img/visa.png"></p>
        <p><img src="http://localhost:8080/img/mastercard.png"></p>
      </div>
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14885321316740ca2a480c99_85033772', 'copyright_link');
?>

        </p>
        <p class="text-sm-center">
          <span class="egzyl">
            realizacja 
            <a href="https://egzyl.pl" class="egzyl-link-janek">
              egzyl.pl
            </a>
          </span>
        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_14229537916740ca2a47f7b4_88918937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_14229537916740ca2a47f7b4_88918937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_8576435136740ca2a47ff91_54606230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_8576435136740ca2a47ff91_54606230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_2186950396740ca2a480630_55026714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_2186950396740ca2a480630_55026714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_14885321316740ca2a480c99_85033772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_14885321316740ca2a480c99_85033772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            Wszelkie znaki towarowe i nazwy firm, znajdujące się w serwisie, zostały użyte jedynie w celach informacyjnych i są wyłączną własnością tychże firm.
            Kopiowanie zawartości serwisu bez pisemnej zgody właściciela, w jakiejkolwiek formie zabronione - Copyright 2024 All right reserved
          <?php
}
}
/* {/block 'copyright_link'} */
}
