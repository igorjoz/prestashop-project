<?php
/* Smarty version 3.1.48, created on 2024-11-16 18:36:41
  from '/var/www/html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6738d829b51935_73506581',
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
function content_6738d829b51935_73506581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12204482876738d829b4f7f1_24819257', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8402511966738d829b50629_08543675', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108571126738d829b50de1_07984644', 'hook_footer_after');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16414242066738d829b51541_40787146', 'copyright_link');
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
class Block_12204482876738d829b4f7f1_24819257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_12204482876738d829b4f7f1_24819257',
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
class Block_8402511966738d829b50629_08543675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_8402511966738d829b50629_08543675',
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
class Block_108571126738d829b50de1_07984644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_108571126738d829b50de1_07984644',
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
class Block_16414242066738d829b51541_40787146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_16414242066738d829b51541_40787146',
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
