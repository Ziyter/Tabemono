<?php
/* Smarty version 3.1.30, created on 2017-05-25 18:26:43
  from "C:\openserver\domains\tabemono\templates\form_preference.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5926f7b3e83a10_15161770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98afbac6c11d06d7f665eee6e175d9cd6743c082' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\form_preference.tpl',
      1 => 1495726001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5926f7b3e83a10_15161770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="ordering_preference_form">
    Адрес<br>
    <center>
        <div class="btn-group" data-toggle="buttons" >
            <label class="btn order radiobt rbold" value="new">
                <input type="radio" name="optionsRadios">
                Новый
            </label>
            <label class="btn order radiobt rbnew" value="old">
                <input type="radio" name="optionsRadios">
                Из списка
            </label>
        </div>
    </center>
    <select class="form-control list_address">
    </select>
    <div class="address_block_order"  class="form-group row">
        <div class="col-sm-7 col-lg-8">
            <input required type="text" size='30' id="address" name="address" placeholder="Введите новый адрес" class="form-control" >
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="inputTime">Введите время:</label>
        <input type="time" class="form-control time-input" value="00:00">
    </div>
    <div class="form-group">
        <label for="inputDate">Введите дату:</label>
        <input type="date" class="form-control date-input">
    </div>
</form><?php }
}
