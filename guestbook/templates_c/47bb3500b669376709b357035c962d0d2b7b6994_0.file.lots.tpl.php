<?php
/* Smarty version 3.1.30, created on 2017-03-09 22:52:03
  from "C:\openserver\domains\localhost\Antiquarium\guestbook\templates\lots.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c1b2631d9845_17045523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47bb3500b669376709b357035c962d0d2b7b6994' => 
    array (
      0 => 'C:\\openserver\\domains\\localhost\\Antiquarium\\guestbook\\templates\\lots.tpl',
      1 => 1489087072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c1b2631d9845_17045523 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'C:\\OpenServer\\domains\\localhost\\Antiquarium\\guestbook\\libs\\plugins\\function.counter.php';
?>

<html>
<head>
<meta charset="utf-8">
<link href="css/common.css" rel="stylesheet">
<link href="css/lots.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>


<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body id="blmain" onLoad="generate()">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
<table id="myTableID"> 
    <tr>
        <?php smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>"countid",'print'=>false),$_smarty_tpl);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'str');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['str']->value) {
?>
         <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

        <td>
            <a href="itemlot.php?id=<?php echo $_smarty_tpl->tpl_vars['str']->value['id'];?>
">
                <center>
                    <img width=180 src="img/items/<?php echo $_smarty_tpl->tpl_vars['str']->value['img_link'];?>
"/><br>
                    <span id="text<?php echo $_smarty_tpl->tpl_vars['str']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['str']->value['name'];?>
</span></a>
                    <br>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['str']->value['little_des'];?>

                    </div>
                        <span><?php echo $_smarty_tpl->tpl_vars['str']->value['date_over'];?>
</span><br>
                        <img style="float:left; display:<?php echo $_smarty_tpl->tpl_vars['FAV']->value;?>
;" src=favorite.png; s  onClick="changefavclick(<?php echo $_smarty_tpl->tpl_vars['str']->value['id'];?>
);" id='favorite<?php echo $_smarty_tpl->tpl_vars['str']->value['id'];?>
'>
                        <span>Ставка: <?php echo $_smarty_tpl->tpl_vars['str']->value['rate'];?>
 руб.</span>
</center>
            </td>
          <?php if ($_smarty_tpl->tpl_vars['countid']->value % 4 == 0) {?> 
          </tr><tr>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tr></table>      
<table></table> 

<center>
    
    <span style="color:white;">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['count']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
<a href=http://localhost/antiquarium/lots.php?id=<?php echo $_smarty_tpl->tpl_vars['idcat']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>&nbsp;
        <?php }
}
?>

</span>
</center>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
