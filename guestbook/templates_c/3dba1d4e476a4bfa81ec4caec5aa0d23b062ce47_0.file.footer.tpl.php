<?php
/* Smarty version 3.1.30, created on 2017-05-31 13:06:56
  from "C:\OpenServer\domains\Tabemono\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e95c0a184c2_48595350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dba1d4e476a4bfa81ec4caec5aa0d23b062ce47' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Tabemono\\templates\\footer.tpl',
      1 => 1495105723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e95c0a184c2_48595350 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>  
    <?php echo '<script'; ?>
 src='/js/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/funcs.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/tether.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/bootstrap.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/jquery.cookie.js" ><?php echo '</script'; ?>
>
    <!--  <?php echo '<script'; ?>
 type="text/javascript" src="/min/b=js&amp;f=jquery.min.js,funcs.js,tether.min.js,bootstrap.min.js"><?php echo '</script'; ?>
>
    -->   <?php echo $_smarty_tpl->tpl_vars['JS']->value;?>

    <br>
    <small><center>© 2017 Tabemono ® Зарегистрированный товарный знак</center></small>
</footer><?php }
}
