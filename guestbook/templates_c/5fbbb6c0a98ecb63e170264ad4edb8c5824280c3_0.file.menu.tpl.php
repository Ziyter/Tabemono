<?php
/* Smarty version 3.1.30, created on 2017-05-28 14:15:20
  from "C:\openserver\domains\tabemono\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ab1484634f6_63714367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fbbb6c0a98ecb63e170264ad4edb8c5824280c3' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\menu.tpl',
      1 => 1495969971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_preference.tpl' => 1,
  ),
),false)) {
function content_592ab1484634f6_63714367 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="sidebar">
    <div class="box">
        <div class="container-4">
            <input type="search" id="search" placeholder="Поиск" />
            <button class="icon search">
                <svg height="20px" width="20px" version="1.1" viewBox="-50 -40 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path id="search" d="M445,386.7l-84.8-85.9c13.8-24.1,21-50.9,21-77.9c0-87.6-71.2-158.9-158.6-158.9C135.2,64,64,135.3,64,222.9  
                          c0,87.6,71.2,158.9,158.6,158.9c27.9,0,55.5-7.7,80.1-22.4l84.4,85.6c1.9,1.9,4.6,3.1,7.3,3.1c2.7,0,5.4-1.1,7.3-3.1l43.3-43.8  
                          C449,397.1,449,390.7,445,386.7z M222.6,125.9c53.4,0,96.8,43.5,96.8,97c0,53.5-43.4,97-96.8,97c-53.4,0-96.8-43.5-96.8-97  
                          C125.8,169.4,169.2,125.9,222.6,125.9z"/>
                </svg> 
            </button>
        </div>
    </div>
    <ul>
        <li><a href="/">Главная</a></li>
        <li class="dropdown">
            <a id="drop1" href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#hide">
                Меню
            </a>
            <ul id="hide" class="collapse in">
                <li><a href="/category/cat/sushi/page/1">Суши</a></li>
                <li><a href="/category/cat/rolls/page/1">Роллы</a></li>
                <li class="divider"></li>
                <li><a href="/category/cat/sets/page/1">Наборы</a></li>
            </ul>
        </li>
        <li><a href="#">Акции</a></li>
        <li><a href="/contacts">Контакты</a></li>
        <li><a href="/about">О нас</a></li>
    </ul>
</div>
<div id="right">
    <div id="order_preference" class='cart_block'>
        <center><h5>Выберите время и адрес доставки</h5></center>
        <form id="ordering_preference_form" action="/PHPfuncs/ordering.php" method="post">
            <?php $_smarty_tpl->_subTemplateRender("file:form_preference.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <small>Дата и время может быть только в будущем</small>
            <button type="submit" class="btn ordering order col-md-5 col-sm-5">Заказать</button>
        </form>
    </div>
    <p>  Всего товаров: <span id="count_items"></span><br>
            Сумма заказа: <span id="summa_items"></span> <f class="rubl">о</f>
            <button type="button" disabled="true" class="btn ordering order col-md-5 col-sm-5">Оформить заказ</button>
            <small>Минимальная сумма заказа от 400<f class="rubl">о</f></small>
    </p>
    <table id="items_list">
    </table>
</div> 
<div class="back_block"></div>
<div class="notification_block">
    <div></div></div><?php }
}
