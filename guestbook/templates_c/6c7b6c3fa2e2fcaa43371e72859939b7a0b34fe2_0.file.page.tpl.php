<?php
/* Smarty version 3.1.30, created on 2017-05-31 13:06:56
  from "C:\OpenServer\domains\Tabemono\templates\page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e95c0093378_48900501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7b6c3fa2e2fcaa43371e72859939b7a0b34fe2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Tabemono\\templates\\page.tpl',
      1 => 1495102850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_592e95c0093378_48900501 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="/img/logofavapple.png" />
        <link rel="shortcut icon" type="image/png" href="/img/logofav.png" />
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css" />
           <link type="text/css" rel="stylesheet" href="css/icons.css" />-->
        <link type="text/css" rel="stylesheet" href="/min/b=css&amp;f=bootstrap.min.css,style.css,icons.css" />
        <?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['JS_HEAD']->value;?>

    </head>
    <body>
        <div class="container-full">
            <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div id="blockA"> 
                <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
                <div id="blockB">
                    <div id="contentB">  
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_NAME']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  
                    </div>
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </body>
</html><?php }
}
