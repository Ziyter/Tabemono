<?php
/* Smarty version 3.1.30, created on 2017-02-15 13:08:05
  from "C:\openserver\domains\localhost\Antiquarium\testsh.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a42885f26ad8_66348974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1529843ca175a5bbec96272b4741adabe0e0aa' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\testsh.tpl',
      1 => 1487153262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a42885f26ad8_66348974 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>
<meta charset="utf-8">
<link href="css/itemlot.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>

<title></title>
</head>
<body id="blmain" onLoad="generatoritem()">
<object id="data" data="data.xml" type="text/xml" style="display: none;"></object>
<div id="undermenu" onMouseOver="showlotcat(1)" onMouseOut="showlotcat(0)">
<a href="lots.php?id=1?last_id=1"><center>Оружие</center><hr class="hr_b"></a>
<a href="lots.php?id=2?last_id=1"><center>Искусство</center><hr class="hr_b"></a>
<a href="lots.php?id=3?last_id=1"><center>Назад в СССР</center><hr class="hr_b"></a>
</div>
<div class="bin" id="binid"></div>
<object id="data" data="data.xml" type="text/xml" style="display: none;"></object>
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
  <input type="text" name="log" required>&nbsp;
    Введите пароль:
  <input type="password" name="pass" required>
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
<div id="main"><div id="imgitem"></div>
</div>
<div id="copyright">Antiquarium© Все права защищены. 2016&nbsp;</div>
</body>
</html>
<?php }
}
