<?php
/* Smarty version 3.1.30, created on 2017-02-15 19:24:25
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\testsh.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a480b90852d2_70191711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48fba4a10c79a6c5fd06b2308141d7e4ddf69e51' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\testsh.tpl',
      1 => 1487175768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a480b90852d2_70191711 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>
<meta charset="utf-8">
<link href="css/index.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>

<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body id="blmain" onLoad="cookie_counter()">
<object id="data" data="data.xml" type="text/xml" style="display: none;"></object>
<div id="undermenu" onMouseOver="showlotcat(1)" onMouseOut="showlotcat(0)">
<a href="lots.php?id=1?last_id=1"><center>Оружие</center><hr class="hr_b"></a>
<a href="lots.phpl?id=2?last_id=1"><center>Искусство</center><hr class="hr_b"></a>
<a href="lots.php?id=3?last_id=1"><center>Назад в СССР</center><hr class="hr_b"></a>
</div>
<div class="bin" id="binid"></div>
<div  class="logo">
<table width=70<?php echo '%>';?>
    <tr>
      <td><a href="index.php"><img src="img/logo.png" alt="logo"></a></td>
      <td><div class="slogan">Вам нужна помощь? Можете связаться с одним из наших <a href="exp.php" style="color:rgb(64,199,129);">экспертов.</a></div></td>
    </tr>
</table> 
</div>
<div class="au">
  <form id="fr" action="authentication.php" method="post">
  <a href="registr.php" style="color:white;">Регистрация</a>&nbsp;&nbsp;&nbsp;
    Введите логин:
  <input type="text" name="log">&nbsp;
    Введите пароль:
  <input type="password" name="pass">
  <input type="submit" value="Вход">&nbsp;&nbsp;&nbsp;
  </form>
  <form id="frlog" action="authentication.php" method="post">
  <table id="tab_aut">
    <tr>
      <td><input type="button" value="Выйти" onClick="exitlog()">
      Вы вошли как:&nbsp;<span id="log"></span>
  </td>
      <td>На счету:&nbsp;<span id="money"></span>&nbsp;руб.</td>
      <td> <span class="binbt1"><a onClick="showbin()" class="cursor"><img name="binimg" height="24" src="commerce.png"><div id="circle2">0</div>&nbsp;Выбр. лоты</a></span>
      </td>
    </tr>
</table>
  </form>
</div>
<div class="menu">
<ul id="nav">
<li>
<div class="btmenulot" id="lot" onMouseOver="showlotcat(1)" onMouseOut="showlotcat(0)"><a href="lots.php?id=0?last_id=1" style="display:block">Каталог</a>
</div>
</li>
<li>
<div class="btmenulot"><a href="contact.php" style="display:block">Контакты</a></div>
</li>
<li>
<div class="btmenulot"><a href="about.php" style="display:block">О нас</a></div>
</li>
<li>
<div class="btmenulot"><a href="review.php" style="display:block">Отзывы</a></div>
</li>
</ul>
</div>
<div id="main">
<h1>Популярные лоты</h1>
<div class="example3">
    <a id="linkslider" href="itemlot.php?id=1"><img src="sl1.jpg" name="toplot" class="slimg"></a>
     <img class="round" name="round1" src="roundgreen.png" onClick='slider(1)' alt="">
     <img class="round" name="round2" src="roundwhite.png" onClick='slider(2)' alt="">
     <img class="round" name="round3" src="roundwhite.png" onClick='slider(3)' alt="">
    <div class="example_text">
        <h1><center><span id="text">Револьвер Кольт Драгун (Colt Dragoon)</span></center></h1>
    </div>
    </div>
    <h1>Наши партнеры:</h1>
    <div class="ourpar">
    <a href="http://www.au.ru" target="_blank"><img class="par" src="img/ourpr1.jpg" alt=""></a>&nbsp;&nbsp;&nbsp;
    <a href="https://www.antikwariat.ru" target="_blank"><img class="par" src="img/nap.png" alt=""></a>      
</div>
    <br>Количество посещений сайта:
    <span id="count"></span>
    <span style="float:right">Antiquarium&copy; Все права защищены. 2016&nbsp;</span>
</body>
</html><?php }
}
