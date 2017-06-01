<?php
/* Smarty version 3.1.30, created on 2017-06-01 19:02:26
  from "C:\OpenServer\domains\Tabemono\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59303a929291a2_12151183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f19065971f36bb863111594d2c17730dd78081c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Tabemono\\templates\\login.tpl',
      1 => 1496332943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59303a929291a2_12151183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="login">
    <h3>Вход/Регистрация</h3>
    <form id="log"action="/PHPfuncs/aut.php" role="form" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="log" class="form-control" id="email" >
        </div>
        <div class="form-group">
            <label for="pass">Пароль</label>
            <input type="password" name="pass" class="form-control" id="pass" >
        </div>
        <div class="alert alert-warning captcha">
            <span class="close" onclick="$('.captcha').hide();">×</span>
            Пройдите проверку на бота!
        </div>
        <div class="g-recaptcha cap" data-sitekey="6LdPcB4UAAAAAIrbdr1oTzmmYJX9VLp8vJoaP3nA"></div><br>
        <button type="submit" class="btn btn-orange autin-bt">Войти</button>
        <a href="/registr" style="float: right;" role="button" class="btn btn-orange">Регистрация</a>
    </form>
</div><?php }
}
