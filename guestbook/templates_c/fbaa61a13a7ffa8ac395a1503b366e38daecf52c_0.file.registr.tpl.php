<?php
/* Smarty version 3.1.30, created on 2017-04-23 18:00:18
  from "C:\openserver\domains\tabemono\templates\registr.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fcc18258a528_31911789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbaa61a13a7ffa8ac395a1503b366e38daecf52c' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\registr.tpl',
      1 => 1492959614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fcc18258a528_31911789 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="login">
    <div class="container">
        <form action="PHPfuncs/action.php" method="post">
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Имя</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text" name="name" class="form-control" placeholder="name@example.com">
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
            </div>
            <div id="emailblock" class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label ">Email</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="email" name="email" id="email" class="form-control" >
                    <div id="emaildes" class="form-control-feedback"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Пароль</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="password" name="pass" class="form-control" >
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Еще раз</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="password" name="name" class="form-control" >
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Телефон</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text"  name="phone" id="phone" class="form-control" maxlength="17">
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
            </div>
            <button type="submit" class="btn btn-orange">Зарегистрироватся</button>&nbsp;&nbsp;
            <button type="reset" class="btn btn-orange">Сбросить</button>
        </form>
    </div>
</div><?php }
}
