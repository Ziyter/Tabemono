<?php
/* Smarty version 3.1.30, created on 2017-03-03 13:00:07
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b93ea75838e1_67256046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '332198fc2579479a06bc2486602041c3fab23796' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\contact.tpl',
      1 => 1488535189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58b93ea75838e1_67256046 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta charset="utf-8">
<link href="css/common.css" rel="stylesheet">
<link href="css/contact.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>

<title>Контакты</title>
</head>
<body id="blmain" onLoad="generfavbin()">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="main"><div class="textdes"><h1>Контакты</h1>
<img style="margin-left:90px;" src="img/map.png" width="800px" alt=""><br><br>
Адрес: СПБ, Пионрская улица дом 20.<br><br>
Телефон для связи: 8-800-555-35-35;<br><br>
<center>
<h2>Контактная форма:</h2>
<form style="width:300px;">Ваше имя (обязательно)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ваш E-Mail (обязательно)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" size="30"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Тема<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Текст<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea style="width:215px"></textarea>
<input type="submit">
</form>
</center>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html>
<?php }
}
