<?php
/* Smarty version 3.1.30, created on 2017-06-01 17:23:43
  from "C:\OpenServer\domains\Tabemono\templates\form_preference.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5930236f2902d8_31161668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb76488ab3082c5511fa20aa4b1b9134397e1c15' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Tabemono\\templates\\form_preference.tpl',
      1 => 1496327016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5930236f2902d8_31161668 (Smarty_Internal_Template $_smarty_tpl) {
?>
Адрес <font style="color:red">*</font><br>
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
