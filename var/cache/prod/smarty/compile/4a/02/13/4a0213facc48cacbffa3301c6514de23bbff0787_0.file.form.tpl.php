<?php
/* Smarty version 3.1.48, created on 2024-11-01 14:24:24
  from 'C:\xampp\htdocs\monsteriada-prestashop-clone\admin\themes\default\template\controllers\shop_group\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6724d68817ea21_88935227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0213facc48cacbffa3301c6514de23bbff0787' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\admin\\themes\\default\\template\\controllers\\shop_group\\helpers\\form\\form.tpl',
      1 => 1730126542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6724d68817ea21_88935227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8520230316724d68817c0b2_39828514', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_8520230316724d68817c0b2_39828514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_8520230316724d68817c0b2_39828514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	function toggleShareOrders() {

		var disabled_customer = ($('#share_customer_on').prop('checked')) ? false : true;
		var disabled_stock = ($('#share_stock_on').prop('checked')) ? false : true;

		if (disabled_customer || disabled_stock)
		{
			$("input[name=share_order]").each(function(i) {
	            $(this).attr('disabled', true);
	        });

			$('#share_order_off').attr('checked', true);
		}
		else
		{
			$('input[name=share_order]').attr('disabled', false);
		}
	}

	$(document).ready(function() {
		if (!$("input[name=share_order]").prop('disabled'))
		{
			toggleShareOrders();
			$('input[name=share_customer]').click(function()
			{
				toggleShareOrders();
			});
			$('input[name=share_stock]').click(function()
			{
				toggleShareOrders();
			});
		}

		$('#useImportData').click(function() {
			$('#importList').slideToggle('slow');
		});
	});

<?php
}
}
/* {/block 'script'} */
}
