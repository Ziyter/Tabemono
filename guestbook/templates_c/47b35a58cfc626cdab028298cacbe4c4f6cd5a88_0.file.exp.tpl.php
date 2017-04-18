<?php
/* Smarty version 3.1.30, created on 2017-02-17 12:28:43
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\exp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a6c24b0be434_79416374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b35a58cfc626cdab028298cacbe4c4f6cd5a88' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\exp.tpl',
      1 => 1487323717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_58a6c24b0be434_79416374 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta charset="utf-8">
<link href="css/common.css" rel="stylesheet">
<link href="css/about.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>

<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body id="blmain" onLoad="generfavbin()">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="main" style="height:1100px;"><div class="textdes">
<h1>Эксперты</h1>
<table style="margin-left:auto; margin-right:auto; color:white;"  cellspacing="0" cellpadding="30">
  <tbody>
    <tr>
      <td><img src="img/exp/exp1.jpg" width="200" alt=""/></td>
      <td class="des"><h2>Якубович Леонид Леонидович</h2>
      Эксперт по оценке антиквариата.<br>
      Email-адрес: leon_exp@gmail.ru<br>
      Телефон: +7(952)625-82-02
      </td>
    </tr>
    <tr>
      <td><img src="img/exp/exp2.jpg" width="200" alt=""/></td>
      <td class="des"><h2>Жирков Усмаил Михайлович</h2>
      Эксперт по поиску<br>
      email-адрес: jir_us@gmail.ru<br>
      Телефон: +7(952)934-52-50
      </td>
    </tr>
    <tr>
      <td><img src="img/exp/exp3.jpg" width="200" alt=""/></td>
      <td class="des"><h2>Пирогов Антон Иванович</h2>
      Эксперт по отслеживание археологических раскопок<br>
      email-адрес: pewdiepie_exp@gmail.ru<br>
      Телефон: +7(952)475-48-10
    </td>
    </tr>
  </tbody>
</table>

</div>
</div>
<div id="copyright">Antiquarium© Все права защищены. 2016&nbsp;</div></body>
</html>
<?php }
}
