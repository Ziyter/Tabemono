<?php
require 'classSmarty.php';
$smarty= classSmarty::getSmarty();

//Редирект в зависимости от платформы
//$user_agent=filter_input(INPUT_SERVER,'HTTP_USER_AGENT',FILTER_SANITIZE_STRING);
//$iphone = strpos($user_agent,"iPhone");
//$android= strpos($user_agent,"Android");

$css="<link type=\"text/css\" rel=\"stylesheet\" href=\"/min/b=owlcarousel&amp;f=owl.carousel.min.css,owl.theme.default.min.css\" />";
$js="<script type=\"text/javascript\" src=\"/min/f=owlcarousel/owl.carousel.min.js,OwlCarousel\mousewheel.js\"></script>";
$str=0;

$db= classSmarty::getDB('admin', 'admin');
    $st=$db->query("select * from item limit $str,12");
$row=$st->fetchAll();
$smarty->assign('row', $row);


$smarty->assign('CSS',$css);
$smarty->assign('JS',$js);
$smarty->assign('TITLE',"Главная");

$smarty->display('index.tpl');
