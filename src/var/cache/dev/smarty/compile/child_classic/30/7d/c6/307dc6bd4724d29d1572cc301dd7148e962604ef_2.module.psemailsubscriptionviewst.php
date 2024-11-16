<?php
/* Smarty version 3.1.48, created on 2024-11-16 15:40:19
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6738aed3410646_39101063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1731768017,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6738aed3410646_39101063 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div class="block_newsletter col-lg-8 col-md-12 col-sm-12" id="blockEmailSubscription_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
">
  <div class="row">
    <p id="block-newsletter-label" class="col-md-5 col-xs-12"><span><b>Zapisz się</b> do newsletera</span></p>
    <div class="col-md-7 col-xs-12">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#blockEmailSubscription_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
        <div class="row">
          <div class="col-xs-12">
            <div class="input-wrapper">
              <input
                name="email"
                type="email"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="Wpisz swój adres e-mail"
                aria-labelledby="block-newsletter-label"
                required
              >
            </div>
            <div class="btn-submit-newsletter">
              <button
                class="btn btn-primary float-xs-right hidden-xs-down"
                name="submitNewsletter"
                type="submit"
                title="Zapisz się →"
              >
                Zapisz się →
              </button>
            </div>
            
            <input
              class="btn btn-primary float-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            
            <input type="checkbox" name="allow-newsletter" required>
            <p>Wyrażam zgodę na otrzymywanie newslettera oraz kodów rabatowych na podany adres e-mail. Więcej informacji w <a class="janek-link" href="http://localhost:8080/content/3-polityka-prywatnosci">Polityce Prywatności</a>. *</p>
            <input type="hidden" name="blockHookName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>

              <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

              <?php }?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end /var/www/html/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
