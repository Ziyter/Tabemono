<?php
/* Smarty version 3.1.30, created on 2017-04-01 11:10:10
  from "C:\openserver\domains\FoodService\guestbook\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58df6062a01511_91468541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfc374231ef276346a286b22b39b7c4a69bf60af' => 
    array (
      0 => 'C:\\openserver\\domains\\FoodService\\guestbook\\templates\\index.tpl',
      1 => 1491034207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58df6062a01511_91468541 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
 
        <link rel="stylesheet" type="text/css" href="css/style.css?v=3">
        <?php echo '<script'; ?>
 src="js/funcs.js"><?php echo '</script'; ?>
>  
    </head>
    <body onload="animmenu();">
  
    <?php echo '<script'; ?>
 src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            var menu_active=false;
            var menu=false;
            
   function  move_menu(cls) {   
    var toggle_el = $("#bt").attr("data-toggle");
    $(toggle_el).toggleClass(cls);
    menu_active=!menu_active;
  }
  
  $("#bt").click(function () {
   //   alert("1");
      move_menu("open-sidebar");
      menu=true;
  });
  
$("#bt_cart").click(function () {
    move_menu("open-sidebarright");
    menu=false;
});

 $(document).mouseup(function (e) {
     
     var div = $("#sidebar");
    if (!$("#bt").is(e.target) && !$("#bt_cart").is(e.target) && !div.is(e.target) && div.has(e.target).length === 0 && menu_active){
            if (menu){
            move_menu("open-sidebar");
            $("#bt").removeClass("active"); 
        }
        else
            move_menu("open-sidebarright");
    }
});
});
    <?php echo '</script'; ?>
>
        <div class="container-full">
                <div id="sidebar">
                    <div class="box">
                        <div class="container-4">
                          <input type="search" id="search" placeholder="Поиск" />
                            <button class="icon"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Users</a></li>
            <li class="dropdown">
          <a id="drop1" href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#hide">
            Меню
            <span class="caret"></span>
          </a>
          <ul id="hide" class="collapse in">
            <li><a href="#">Текст подпункта</a></li>
            <li><a href="#">Текст подпункта</a></li>
            <li class="divider"></li>
            <li><a href="#">Текст подпункта</a></li>
          </ul>
        </li>
                <li><a href="#">Sign Out</a></li>
        </ul>
    </div>
  <div id="header" class="row">
    <div class="col-2 col-sm-5 col-md-4 col-lg-3">
      <button data-toggle=".container-full" id="bt"  class="cmn-toggle-switch cmn-toggle-switch__htla">
            <span>toggle menu</span>
        </button> 
    </div>
    <div class="col-6 col-sm-4 col-md-6 col-lg-7">
      LOGO
    </div>
    <div class="col-2 col-sm-2 col-md-1 col-lg-1" id="user">
        <center><object type="image/svg+xml" style="float: right;" data="svgs/user.svg">Your browser does not support SVGs</object>   
    </center>
    </div>
    <div class="col-2 col-sm-1 col-md-1 col-lg-1" id="cart">
        <center><button id="bt_cart"></button><object style="float: right;"  type="image/svg+xml" data="svgs/cart.svg">Your browser does not support SVGs</object>
            </center>
    </div>
  </div>
            <div id="right">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Users</a></li>
                <li><a href="#">Sign Out</a></li>
        </ul>
    </div>
</div>
           
</div>
<nav>  
</nav>
		<div class="heading"></div>
		<div class="row">
			<aside class="col-md-7"></aside>
			<section class="col-md-17"></section>
		</div>
	</div>
	<footer></footer>
    </body>
</html>
<?php }
}
