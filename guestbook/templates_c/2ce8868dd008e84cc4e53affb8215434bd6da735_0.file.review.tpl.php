<?php
/* Smarty version 3.1.30, created on 2017-03-12 12:14:02
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\review.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c5115a3b01e1_57015679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce8868dd008e84cc4e53affb8215434bd6da735' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\review.tpl',
      1 => 1489051692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c5115a3b01e1_57015679 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>

<meta charset="utf-8">
<link href="css/common.css" rel="stylesheet">
<link href="css/rev.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>

<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body id="blmain" onLoad="generfavbin()">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="main">
<div class="textdes"><h1>Отзывы</h1>
<form action="review.php?page=<?php echo $_smarty_tpl->tpl_vars['PAGE']->value;?>
" method="post" name="f1">
<center>
Введите ваш отзыв:<br>
<textarea name="rev" rows="10" cols="100" wrap='physical' required></textarea><br>
<input type="submit"></center>
</form>
    <center>
<table id='tab'>
    
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newst']->value, 'str', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['str']->value) {
?>
<tr><td class='tl'>#<?php echo $_smarty_tpl->tpl_vars['str']->value['id_rev'];?>
<br><?php echo $_smarty_tpl->tpl_vars['str']->value['login'];?>
<br><?php echo $_smarty_tpl->tpl_vars['str']->value['date'];?>
</td>
<td class='tt'><?php echo $_smarty_tpl->tpl_vars['str']->value['review'];?>
</td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</table><br>
    
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['END']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['END']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
<a style="color:white;" href=http://localhost/antiquarium/review.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>&nbsp;
<?php }
}
?>


</center>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
