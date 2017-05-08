<?php
/* Smarty version 3.1.30, created on 2017-05-08 16:01:29
  from "C:\openserver\domains\tabemono\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59106c299ea281_65182371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c08441942999b9cceade4ca7489c43924bc36fb3' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\footer.tpl',
      1 => 1494248306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59106c299ea281_65182371 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>  
    <?php echo '<script'; ?>
 src='js/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funcs.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/tether.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.cookie.js" ><?php echo '</script'; ?>
>
    <!--  <?php echo '<script'; ?>
 type="text/javascript" src="/min/b=js&amp;f=jquery.min.js,funcs.js,tether.min.js,bootstrap.min.js"><?php echo '</script'; ?>
>
    -->   <?php echo $_smarty_tpl->tpl_vars['JS']->value;?>

</footer><?php }
}
