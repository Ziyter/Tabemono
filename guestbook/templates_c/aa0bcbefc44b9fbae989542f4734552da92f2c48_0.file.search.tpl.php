<?php
/* Smarty version 3.1.30, created on 2017-05-11 15:50:49
  from "C:\openserver\domains\tabemono\templates\search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59145e29c06f58_54927954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0bcbefc44b9fbae989542f4734552da92f2c48' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\search.tpl',
      1 => 1494507043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59145e29c06f58_54927954 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['row']->value) > 0) {?>
<h5>По запросу "<?php echo $_smarty_tpl->tpl_vars['QUERY']->value;?>
" найдены следующие товары:</h5>
<?php } else { ?>
<h5>По запросу "<?php echo $_smarty_tpl->tpl_vars['QUERY']->value;?>
" ничего не найдено.</h5>
<?php }?>
<div id="items"  class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'str');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['str']->value) {
?>
        <div class="col-6 col-md-4 col-lg-3 heig">
            <table id="items_list">
                <tr><td>
                        <a data-toggle="modal"  data-target="#my1Modal">
                            <img  width="130" height="130" src="/img/goods/crop/<?php echo $_smarty_tpl->tpl_vars['str']->value['img'];?>
"></a>
                    </td></tr>
                <tr><td>
                        <div id="des"><?php echo $_smarty_tpl->tpl_vars['str']->value['name'];?>
<br>
                            <div class="addbasket">
                                <span id="price"> Цена:
                                    <?php echo $_smarty_tpl->tpl_vars['str']->value['price'];?>
 <f class="rubl">о</f> 
                                </span> 
                                <div id_item="<?php echo $_smarty_tpl->tpl_vars['str']->value['id_item'];?>
" act='1' class="icons plus addkorz">Беру</div>
                            </div>
                        </div>
                    </td></tr>
            </table>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
