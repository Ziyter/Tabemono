<?php
/* Smarty version 3.1.30, created on 2017-03-09 21:35:48
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c1a084306e48_13583616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad03e3166a70b987d603b7fb39c0a22f16d4f4d' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\header.tpl',
      1 => 1489083913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c1a084306e48_13583616 (Smarty_Internal_Template $_smarty_tpl) {
?>
<object id="data" data="data.xml" type="text/xml" style="display: none;"></object>
<div id="undermenu" onMouseOver="showlotcat(1)" onMouseOut="showlotcat(0)">
<a href="lots.php?id=1&page=1"><center>Оружие</center><hr class="hr_b"></a>
<a href="lots.php?id=2&page=1"><center>Искусство</center><hr class="hr_b"></a>
<a href="lots.php?id=3&page=1"><center>Назад в СССР</center><hr class="hr_b"></a>
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
<?php 
session_start();
if (!isset($_SESSION['login']))
echo
  '<form id="fr" action="authentication.php" method="post">
  <a href="registr.php" style="color:white;">Регистрация</a>&nbsp;&nbsp;&nbsp;
    Введите логин:
  <input type="text" name="log">&nbsp;
    Введите пароль:
  <input type="password" name="pass">
  <input type="submit" value="Вход">&nbsp;&nbsp;&nbsp;
  </form>';
else
{
    $login=$_SESSION['login'];
    $money=$_SESSION['money'];
echo  
"<form id='frlog' style='display: block' action='destroySes.php' method='post'>
  <table id='tab_aut'>
    <tr>
      <td>
<input type='submit' value='Выйти'>
      Вы вошли как:&nbsp;$login <span id='log'></span>
  </td>
      <td>На счету:&nbsp;$money<span id='money'></span>&nbsp;руб.</td>
      <td> <span class='binbt1'><a id='showbin' onClick='showbin()' class='cursor'><img name='binimg' height='24' src='commerce.png'><div id='circle2'>0</div>&nbsp;Выбр. лоты</a></span>
      </td>
    </tr>
</table>
  </form>";
}
?>
</div>

<div class="menu">
<ul id="nav">
<li>
<div class="btmenulot" id="lot" onMouseOver="showlotcat(1)" onMouseOut="showlotcat(0)"><a href="lots.php?id=0&page=1" style="display:block">Каталог</a>
</div>
</li>
<li>
<div class="btmenulot"><a href="contact.php" style="display:block">Контакты</a></div>
</li>
<li>
<div class="btmenulot"><a href="about.php" style="display:block">О нас</a></div>
</li>
<li>
<div class="btmenulot"><a href="review.php?page=1" style="display:block">Отзывы</a></div>
</li>
</ul>
</div>
<?php }
}
