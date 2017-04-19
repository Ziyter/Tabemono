<?php
/* Smarty version 3.1.30, created on 2017-04-19 20:40:39
  from "C:\openserver\domains\tabemono\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7a1170ca088_88228661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '577a4aae26eb4e6253a0f09611919df46d5a89aa' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\login.tpl',
      1 => 1492623637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7a1170ca088_88228661 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="login">
    <h3>Вход</h3>
    <form role="form">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" >

        </div>
        <div class="form-group">
            <label for="pass">Пароль</label>
            <input type="password" class="form-control" id="pass" >
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Запомнить компьютер</label>
        </div>
        <button type="submit" class="btn btn-orange">Войти</button>
        <button style="float: right;" type="submit" class="btn btn-orange">Регистрация</button>
    </form>
</div><?php }
}
