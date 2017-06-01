<?php
/* Smarty version 3.1.30, created on 2017-06-01 18:49:02
  from "C:\OpenServer\domains\Tabemono\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5930376e3e0ad0_78849717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3195f0e188a3e049101014758ea82724279fcfd0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Tabemono\\templates\\index.tpl',
      1 => 1496332133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list_items.tpl' => 1,
  ),
),false)) {
function content_5930376e3e0ad0_78849717 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="owl-carousel owl-theme">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROW_SETS']->value, 'str');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['str']->value) {
?>
    <div class="item"><a href="/item/id/<?php echo $_smarty_tpl->tpl_vars['str']->value['id_item'];?>
/"><img src="/img/goods/<?php echo $_smarty_tpl->tpl_vars['str']->value['img'];?>
"></a></div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<h4> Новинки:</h4><br>
<?php $_smarty_tpl->_subTemplateRender("file:list_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
