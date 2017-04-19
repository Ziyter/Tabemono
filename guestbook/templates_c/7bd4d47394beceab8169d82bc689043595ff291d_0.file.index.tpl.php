<?php
/* Smarty version 3.1.30, created on 2017-04-19 19:33:58
  from "C:\openserver\domains\tabemono\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f791768c1899_51842893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd4d47394beceab8169d82bc689043595ff291d' => 
    array (
      0 => 'C:\\openserver\\domains\\tabemono\\templates\\index.tpl',
      1 => 1492618486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f791768c1899_51842893 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="owl-carousel owl-theme">
    <div class="item"><a href="#"><img src="img/image-min.jpg"></a></div>
    <div class="item"><a href="#"><img src="img/image2-min.jpg"></a></div>
    <div class="item"><a href="#"><img src="img/image3-min.jpg"></a></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
</div>
<h4> Популярные товары:</h4><br>
<div id="items"  class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'str');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['str']->value) {
?>
        <div  class="col-12 col-md-6 col-lg-4">
            <a data-toggle="modal"  data-target="#my1Modal"><img  width="130" height="130" src="img\goods\crop\<?php echo $_smarty_tpl->tpl_vars['str']->value['img'];?>
"></a>
                                                                  <div id="des"><?php echo $_smarty_tpl->tpl_vars['str']->value['name'];?>
 <br> 
                <span id="price">
                    <?php echo $_smarty_tpl->tpl_vars['str']->value['price'];?>
 <f class="rubl">о</f> 
                </span>   
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<div id="my1Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
                Всего товаров: 200000<div>Сумма заказа: 100000 <f class="rubl">о</f>    
                </div></div>
            <div class="modal-body">Текст уведомления</div>
            <div class="modal-body">Текст уведомления</div>
            <div class="modal-body">Текст уведомления</div>
            <div class="modal-body">Текст уведомления</div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
</div>



<?php }
}
