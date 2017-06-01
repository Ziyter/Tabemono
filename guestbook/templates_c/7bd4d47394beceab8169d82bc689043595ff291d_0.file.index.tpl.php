<?php
/* Smarty version 3.1.30, created on 2017-05-30 16:22:10
  from "C:\openserver\domains\tabemono\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592d7202c73995_76392960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd4d47394beceab8169d82bc689043595ff291d' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\index.tpl',
      1 => 1496150528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list_items.tpl' => 1,
  ),
),false)) {
function content_592d7202c73995_76392960 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="owl-carousel owl-theme">
    <div class="item"><a href="#"><img src="/img/image-min.jpg"></a></div>
    <div class="item"><a href="#"><img src="/img/image2-min.jpg"></a></div>
    <div class="item"><a href="#"><img src="/img/image3-min.jpg"></a></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
</div>
<h4> Новинки:</h4><br>
<?php $_smarty_tpl->_subTemplateRender("file:list_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
