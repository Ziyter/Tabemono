<?php
/* Smarty version 3.1.30, created on 2017-03-03 13:01:22
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b93ef2bc2ba3_34698243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '724e98acc447a33d97fba9bb2267795a2c7c04bd' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\about.tpl',
      1 => 1488535279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58b93ef2bc2ba3_34698243 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="textdes"><h1>О нас</h1>В нашем интернет-аукционе антиквариата вы найдете большое разнообразие интересных предметов, которые могут стать уникальным подарком.<br><br>
Вы можете повышать ставку на понравившийся предмет из каталога. Если вашу ставку не побьют до окончания таймера, вы станете обладателем этого предмета, иначе Вы должны будете побить ставку до окончания таймера.<br><br> 
 Если у вас возникнут вопросы Вы сможете связаться с нами. В разделе КОНТАКТЫ указаны способы связи.
 <br> <br> 
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
