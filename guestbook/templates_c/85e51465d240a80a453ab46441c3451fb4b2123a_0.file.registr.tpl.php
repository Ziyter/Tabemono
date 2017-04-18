<?php
/* Smarty version 3.1.30, created on 2017-02-17 12:27:11
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\registr.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a6c1ef4b6026_07532372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e51465d240a80a453ab46441c3451fb4b2123a' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\registr.tpl',
      1 => 1487323626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_58a6c1ef4b6026_07532372 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta charset="utf-8">
<link href="css/registr.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body id="blmain" onLoad="generfavbin()">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
<h1>Регистрация</h1>
<form action="action.php" method="post">
Логин<font color='red'>*</font><br>
<input  maxlength=12 type="login" name="login" required><br>
Пароль<font color='red'>*</font><br>
<input type="password" name="password" id="p1" required onBlur="e()"><br>
Повторите еще раз<font color='red'>*</font><br>
<input type="password" name="password1" id="p2" required onBlur="e()"><br>
Фамилия<br>
<input type="text" name="surname"><br>
Имя<br>
<input type="text" name="name"><br>
Отчество<br>
<input type="text" name="otch"><br>
Адрес<br>
<input type="text" name="adress"><br>
E-mail<font color='red'>*</font><br>
<input type="text" name="email" required><br>
Ваш пол<br>
<p>
  <label>
    <input type="radio" name="RadioGroup1" id="RadioGroup1_0">
    Мужчина</label>
  <label>
    <input type="radio" name="RadioGroup1"id="RadioGroup1_1">
    Женщина</label>
  <br>
</p>
Счет<br>
<input type="text" maxlength=8 name="money" value="0"><br><br>
<input type="submit">&nbsp;&nbsp;&nbsp;<input type="reset">
</form>
</div>
<span id="count"></span>
<div id="copyright">Antiquarium© Все права защищены. 2016&nbsp;</div>
</body>
</html><?php }
}
