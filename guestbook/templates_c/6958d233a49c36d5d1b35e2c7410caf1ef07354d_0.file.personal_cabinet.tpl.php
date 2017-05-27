<?php
/* Smarty version 3.1.30, created on 2017-05-27 15:32:43
  from "C:\openserver\domains\tabemono\templates\personal_cabinet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592971eb6f9692_74709437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6958d233a49c36d5d1b35e2c7410caf1ef07354d' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\personal_cabinet.tpl',
      1 => 1495888312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592971eb6f9692_74709437 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="orders_list">
    <div class="buttons">
        <form id="cabinet" action="PHPfuncs/destroySes.php" method="post">
            <button type="submit" class="btn btn-orange">Выйти</button>
        </form>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['ORDER_INFO']->value) {?>
        <h3>Товары в заказе № <?php echo $_smarty_tpl->tpl_vars['ID_ORDER']->value;?>
</h3>
        <?php if ($_smarty_tpl->tpl_vars['MOBILE']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITEMS_LIST']->value, 'items');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['items']->value) {
?>
                <div class="orders_div">
                    <?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
<br>
                    <?php echo $_smarty_tpl->tpl_vars['items']->value['price'];?>
 <f class="rubl">о</f>&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['items']->value['quantity'];?>
 шт.<br>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
        <?php } else { ?>
            <table id="items_listd">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITEMS_LIST']->value, 'items');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['items']->value) {
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>

                        </td>
                        <td>
                    <?php echo $_smarty_tpl->tpl_vars['items']->value['price'];?>
  <f class="rubl">о</f> 
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['items']->value['quantity'];?>
 шт.
                    </td>
                    </tr>  
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
            </table>
        <?php }?>
    <?php } else { ?>
        <h3>Список заказов</h3>
        <?php if ($_smarty_tpl->tpl_vars['MOBILE']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ORDERS_LIST']->value, 'items');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['items']->value) {
?>
                <div class="orders_div">
                    <b>Заказ №</b> <?php echo $_smarty_tpl->tpl_vars['items']->value['id_order'];?>
<br>
                    <b>Сумма заказа:</b> <?php echo $_smarty_tpl->tpl_vars['items']->value['summa'];?>
 <f class="rubl">о</f><br> 
                    <b>Время заказа:</b> <?php echo $_smarty_tpl->tpl_vars['items']->value['date_order'];?>
<br>
                    <b>Статус:</b> <?php echo $_smarty_tpl->tpl_vars['items']->value['name_status'];?>
<br>
                    <a href="/user/order/<?php echo $_smarty_tpl->tpl_vars['items']->value['id_order'];?>
/">Подробнее...</a>
                    <?php if ($_smarty_tpl->tpl_vars['items']->value['id_status'] == 1) {?>
                        <div id_order='<?php echo $_smarty_tpl->tpl_vars['items']->value['id_order'];?>
' class='icons del_order del_basket_orange'></div>
                    <?php }?>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
        <?php } else { ?>
            <div id="order_div_table">
                <table id="orders_table">
                    <tr>
                        <td>
                            <b>Номер заказа</b>
                        </td>
                        <td>
                            <b>Сумма заказа</b>
                        </td>
                        <td>
                            <b>Дата заказа</b>
                        </td>
                        <td>
                            <b>Статус</b>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>  
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ORDERS_LIST']->value, 'items');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['items']->value) {
?>
                        <tr>
                            <td>
                                № <?php echo $_smarty_tpl->tpl_vars['items']->value['id_order'];?>

                            </td>
                            <td>
                        <?php echo $_smarty_tpl->tpl_vars['items']->value['summa'];?>
 <f class="rubl">о</f> 
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['items']->value['date_order'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['items']->value['name_status'];?>

                        </td>
                        <td>
                            <a href="/user/order/<?php echo $_smarty_tpl->tpl_vars['items']->value['id_order'];?>
/">Подробнее...</a>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['items']->value['id_status'] == 1) {?>
                                <div id_order='<?php echo $_smarty_tpl->tpl_vars['items']->value['id_order'];?>
' class='icons del_order del_basket_orange'></div>
                            <?php }?>
                        </td>
                        </tr>  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </table>
            </div>
        <?php }?>
    <?php }?>
</div><?php }
}
