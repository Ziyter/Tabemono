<?php
/* Smarty version 3.1.30, created on 2017-05-19 16:14:27
  from "C:\openserver\domains\tabemono\templates\item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591eefb3b16d91_38802292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79cf207341901972a9c1712297983713c61b1560' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\item.tpl',
      1 => 1495199666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591eefb3b16d91_38802292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="item_div">
    <?php if (count($_smarty_tpl->tpl_vars['row']->value) == 1) {?>
        <h3>Товар не найден</h3>
    <?php } else { ?>
        <h4><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</h4>
        <div class="row">
            <div class=" col-12  col-md-8 ">
                <img src="/img/goods/<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
" width=100<?php echo '%>';?>
            </div>
            <div id="info_item" class="col-12 col-md-4 ">
                <h5>Описание</h5>
                <?php if ($_smarty_tpl->tpl_vars['row']->value['description'] === '') {?>
                    Описание отсутствует
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>

                <?php }?>
                <h5>Состав</h5>
                <?php if ($_smarty_tpl->tpl_vars['row']->value['composition'] === '') {?>
                    Информация о составе отсутствует
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['composition'];?>

                <?php }?><br>
                <span id="price"><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 <f class="rubl">о</f> </span>
                <div id_item="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_item'];?>
" act='1' class="icons plus addkorz">Беру</div>
            </div>
        </div>
    <?php }?>
</div><?php }
}
