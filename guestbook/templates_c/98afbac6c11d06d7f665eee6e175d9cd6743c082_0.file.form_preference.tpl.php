<?php
/* Smarty version 3.1.30, created on 2017-05-27 13:17:17
  from "C:\openserver\domains\tabemono\templates\form_preference.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5929522d131ac5_62909551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98afbac6c11d06d7f665eee6e175d9cd6743c082' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\form_preference.tpl',
      1 => 1495878627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5929522d131ac5_62909551 (Smarty_Internal_Template $_smarty_tpl) {
?>
Адрес<br>
<center>
    <div class="btn-group" data-toggle="buttons" >
        <label class="btn order radiobt rbold" value="new">
            <input type="radio" class="btaddress" name="optionsRadios1">
            Новый
        </label>
        <label class="btn order radiobt rbnew" value="old">
            <input type="radio" class="btaddress"  name="optionsRadios2">
            Из списка
        </label>
    </div>
</center>
<select class="form-control list_address" name="address_list">
</select>
<div class="address_block_order"  class="form-group row">
    <input type="text" id="address_input" name="newaddress" placeholder="Введите новый адрес" class="form-control">
    <div class="form-control-feedback"></div>
</div>
<br>
<div class="form-group">
    <label for="inputTime">Введите время:</label>
    <input type="time" id="time" name="time" class="form-control time-input" value="now">
    <div class="form-control-feedback"></div>
</div>
<div class="form-group">
    <label for="inputDate">Введите дату:</label>
    <input type="date" id="date"  name="date" class="form-control date-input">
    <div class="form-control-feedback"></div>
</div><?php }
}
