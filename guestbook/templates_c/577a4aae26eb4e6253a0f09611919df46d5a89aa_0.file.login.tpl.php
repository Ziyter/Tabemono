<?php
/* Smarty version 3.1.30, created on 2017-04-24 14:07:18
  from "C:\openserver\domains\tabemono\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fddc668402b2_21746152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '577a4aae26eb4e6253a0f09611919df46d5a89aa' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\login.tpl',
      1 => 1493032025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fddc668402b2_21746152 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="login">
    <h3>Вход</h3>
    <form action="PHPfuncs/aut.php" role="form" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="log" class="form-control" id="email" >

        </div>
        <div class="form-group">
            <label for="pass">Пароль</label>
            <input type="password" name="pass" class="form-control" id="pass" >
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Запомнить компьютер</label>
        </div>
        <button type="submit" class="btn btn-orange">Войти</button>
        <a href="/registr" style="float: right;" role="button" class="btn btn-orange">Регистрация</a>
    </form>
</div><?php }
}
