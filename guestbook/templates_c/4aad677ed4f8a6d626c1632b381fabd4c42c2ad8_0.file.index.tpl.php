<?php
/* Smarty version 3.1.30, created on 2017-02-27 13:19:45
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b3fd41f25671_45168138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aad677ed4f8a6d626c1632b381fabd4c42c2ad8' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\index.tpl',
      1 => 1488190781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_58b3fd41f25671_45168138 (Smarty_Internal_Template $_smarty_tpl) {
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
<body id="blmain" onLoad="cookie_counter();">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
