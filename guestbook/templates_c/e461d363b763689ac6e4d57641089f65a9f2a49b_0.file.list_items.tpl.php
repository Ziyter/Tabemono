<?php
/* Smarty version 3.1.30, created on 2017-05-20 16:11:14
  from "C:\openserver\domains\tabemono\templates\list_items.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592040722556e1_51016230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e461d363b763689ac6e4d57641089f65a9f2a49b' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\list_items.tpl',
      1 => 1495285869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592040722556e1_51016230 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="items"  class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'str');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['str']->value) {
?>
        <div class="col-6 col-md-4 col-lg-3 heig">
            <table id="items_list">
                <tr><td>
                        <a href='/item/id/<?php echo $_smarty_tpl->tpl_vars['str']->value['id_item'];?>
/'>
                            <img  width="130" height="130" src="/img/goods/crop/<?php echo $_smarty_tpl->tpl_vars['str']->value['img'];?>
">
                        </a>
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

</div><br>
<?php if ($_smarty_tpl->tpl_vars['PAGES']->value != 0) {?>
    <div id="rod_pagebar">
        <div class='pagebar'>
            <a href="/category/cat/<?php echo $_smarty_tpl->tpl_vars['CAT_NAME']->value;?>
/page/1/"><<</a>
            <?php if ($_smarty_tpl->tpl_vars['PAGE']->value != 1) {?>
                <a href="/category/cat/<?php echo $_smarty_tpl->tpl_vars['CAT_NAME']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['PAGE']->value-1;?>
/"><</a>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['OMEGA']->value+1 - ($_smarty_tpl->tpl_vars['ALPHA']->value) : $_smarty_tpl->tpl_vars['ALPHA']->value-($_smarty_tpl->tpl_vars['OMEGA']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['ALPHA']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['foo']->value != $_smarty_tpl->tpl_vars['PAGE']->value) {?>
                    <a href="/category/cat/<?php echo $_smarty_tpl->tpl_vars['CAT_NAME']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                <?php } else { ?>
                    <a id="current_page" href="/category/cat/<?php echo $_smarty_tpl->tpl_vars['CAT_NAME']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                <?php }?>
            <?php }
}
?>

            <?php if ($_smarty_tpl->tpl_vars['PAGE']->value != $_smarty_tpl->tpl_vars['PAGES']->value) {?>
                <a href="/category/cat/<?php echo $_smarty_tpl->tpl_vars['CAT_NAME']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['PAGE']->value+1;?>
/">></a>
            <?php }?>
            <a href="/category/cat/<?php echo $_smarty_tpl->tpl_vars['CAT_NAME']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>
/">>></a>
        </div>
    </div>
<?php }
}
}
