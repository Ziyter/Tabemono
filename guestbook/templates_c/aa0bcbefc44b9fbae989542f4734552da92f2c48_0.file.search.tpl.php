<?php
/* Smarty version 3.1.30, created on 2017-05-19 16:56:46
  from "C:\openserver\domains\tabemono\templates\search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591ef99ee2ceb1_48412969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0bcbefc44b9fbae989542f4734552da92f2c48' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\search.tpl',
      1 => 1495192477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list_items.tpl' => 1,
  ),
),false)) {
function content_591ef99ee2ceb1_48412969 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['row']->value) > 0) {?>
<h5>По запросу "<?php echo $_smarty_tpl->tpl_vars['QUERY']->value;?>
" найдены следующие товары:</h5>
<?php } else { ?>
<h5>По запросу "<?php echo $_smarty_tpl->tpl_vars['QUERY']->value;?>
" ничего не найдено.</h5>
<?php }
$_smarty_tpl->_subTemplateRender("file:list_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
