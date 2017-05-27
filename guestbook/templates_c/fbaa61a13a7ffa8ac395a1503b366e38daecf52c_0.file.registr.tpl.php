<?php
/* Smarty version 3.1.30, created on 2017-05-27 15:53:14
  from "C:\openserver\domains\tabemono\templates\registr.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592976ba82f3e4_80205858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbaa61a13a7ffa8ac395a1503b366e38daecf52c' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\registr.tpl',
      1 => 1495882223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592976ba82f3e4_80205858 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="login">
    <div class="container">
        <form id="reg" action="/PHPfuncs/action.php" method="post">
            <div class="form-group row">
                <label class="col-sm-5 col-lg-3 col-form-label">Имя *</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text" name="name" class="form-control" >
                    <div class="form-control-feedback"></div>
                    <small class="form-text text-muted"></small>
                </div> 
            </div>
            <div id="emailblock" class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label ">Email *</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="email" name="email" id="email" class="form-control" >
                    <div id="emaildes" class="form-control-feedback"></div>
                </div>
            </div>
            <div id="passblock" class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Пароль *</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="password" name="pass" class="form-control" >
                    <small class="form-text text-muted">Пароль должен быть не менее 8 символов</small>
                </div>
            </div>
            <div id="pass_againblock" class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Еще раз *</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="password" id="pass_again" class="form-control" >
                    <small class="form-text text-muted">Введите пароль еще раз</small>
                </div>
            </div>
            <div id="address_block" class="form-group row">
                <label class="col-sm-5 col-lg-3 col-form-label">Адрес *</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text" id="address" name="address" class="form-control" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Телефон *</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text"  name="phone" id="phone" class="form-control" maxlength="17">
                    <div class="form-control-feedback"></div>
                    <small class="form-text text-muted"></small>
                </div>
            </div>
            <div id="cap" class="g-recaptcha" data-sitekey="6LdPcB4UAAAAAIrbdr1oTzmmYJX9VLp8vJoaP3nA"></div>
            <div class="text-danger" id="recaptchaError"></div><br>
            <div id="data" class="alert alert-warning">
                <span class="close" onclick="$('#data').hide();">×</span>
                Введены неверные данные 
            </div>
            <div id="captcha" class="alert alert-warning">
                <span class="close" onclick="$('#captcha').hide();">×</span>
                Пройдите проверку на бота!
            </div>
            <div class="icon-plus"></div>
            <div class="icon-success"></div>
            <div class="row">
                <button type="submit" class="btn btn-orange col-md-5 col-sm-5">Зарегистрироватся</button>&nbsp;&nbsp;
                <button type="reset" id="res" class="btn btn-orange col-md-5 col-sm-5">Сбросить</button>
            </div>
        </form>
    </div>
</div><?php }
}
