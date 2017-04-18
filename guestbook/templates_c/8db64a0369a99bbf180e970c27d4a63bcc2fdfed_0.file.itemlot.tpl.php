<?php
/* Smarty version 3.1.30, created on 2017-03-10 12:55:53
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\itemlot.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c278298605d4_56852022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8db64a0369a99bbf180e970c27d4a63bcc2fdfed' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\itemlot.tpl',
      1 => 1489139717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c278298605d4_56852022 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>
<meta charset="utf-8">
<link href="css/itemlot.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript"> 
    $(document).ready(function(){

   $("#bt1").click(function(){
      $.post(
  "insertbd.php",
  {
    lot:$("#id_lot").val(),
    rate:$("#yourrate").val()
  },
  onAjaxSuccess
);
 
function onAjaxSuccess(data)
{
  $("#rate").text(data);
}
   });
   
 $("[name=addbin]").click(function(){
    $.post(
  "addbin.php",
  {
      lot:$("#id_lot").val()
  }
 );
    });  
});
    <?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</title>
</head>
<body id="blmain" onload="generfavbin();">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="main">
 <div id='imgitem'>
     <center>
         <a href='img/items/<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
'><img src='img/items/<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
'></a><br>
         <div>
             <img name="addbin" src='favorite.png' style="display:<?php echo $_smarty_tpl->tpl_vars['FAV']->value;?>
" onClick='changefavclick(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
);' id='favorite<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'>&nbsp;&nbsp;
           Текущая ставка: <span id='rate'><?php echo $_smarty_tpl->tpl_vars['RATE']->value;?>
</span> руб.
         </div>
     </center>
         <form action='insertbd.php' method='post'>
             <center>Ваша ставка:&nbsp;&nbsp;
                 <input type='hidden' size='10' value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" id='id_lot' name="lot">
                 <input type='text' size='10' id='yourrate' name="rate">
                 <input type='button' id="bt1" value='OK' >
         </form><br>
             Блиц-цена товара:&nbsp;<?php echo $_smarty_tpl->tpl_vars['PRICE']->value;?>
 руб.<br>
             <span><?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
</span>
        </div>
         <center>
             <h1><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</h1>
         </center>
         <div style="text-align:left; margin-left:5px; margin-right:5px;"><?php echo $_smarty_tpl->tpl_vars['LITTLE_DES']->value;?>

             <br><br><?php echo $_smarty_tpl->tpl_vars['DES']->value;?>

         </div>	   
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>

<?php }
}
