<?php

session_start();
require 'classSmarty.php';
$smarty = classSmarty::getSmarty();

error_reporting(E_ALL);
//ini_set('display_errors', 1);

$css = "<link type=\"text/css\" rel=\"stylesheet\" href=\"/min/b=owlcarousel&amp;f=owl.carousel.min.css,owl.theme.default.min.css\" />";
$js = "<script type=\"text/javascript\" src=\"/min/f=owlcarousel/owl.carousel.min.js,OwlCarousel\mousewheel.js\"></script>";
$js_captcha = "<script type=\"text/javascript\" src='https://www.google.com/recaptcha/api.js'></script>";
$str = 0;
$module = 'index';
$action = 'index';
$params = array();

$url = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_URL);

if ($url != '/') {
    try {
        $url_path = parse_url($url, PHP_URL_PATH);
        $uri_parts = explode('/', trim($url_path, ' /'));

//		if (count($uri_parts) % 2) {
//			throw new Exception();
//		}

        $module = array_shift($uri_parts); // Получили имя модуля
        $action = array_shift($uri_parts); // Получили имя действия
        // Получили в $params параметры запроса
        for ($i = 0; $i < count($uri_parts); $i++) {
            $params[$uri_parts[$i]] = $uri_parts[++$i];
        }
    } catch (Exception $e) {
        $smarty->assign('TPL_NAME', "error");
    }
}
//echo "\$module: $module\n";
//echo "\$action: $action\n";
//echo "\$params:\n";
//print_r($params);

$db = classSmarty::getDB('admin', 'admin');

if (empty($module)) {
    $smarty->assign('TPL_NAME', "error");
} else {
    switch ($module) {
        case 'index':
            $st = $db->query("select * from item limit $str,12");
            $row = $st->fetchAll();
            $smarty->assign('row', $row);
            $smarty->assign('CSS', $css);
            $smarty->assign('JS', $js);
            $smarty->assign('TITLE', "Главная");
            $smarty->assign('TPL_NAME', "index");
            break;
        case 'user':
            if (isset($_SESSION['name'])) {
                $smarty->assign('TITLE', "Личный кабинет");
                $smarty->assign('TPL_NAME', "personal_cabinet");
            } else {
                $smarty->assign('TITLE', "Вход");
                $smarty->assign('TPL_NAME', "login");
            }
            break;
        case 'registr':
            $smarty->assign('TITLE', "Регистрация");
            $smarty->assign('TPL_NAME', "registr");
            $smarty->assign('JS_HEAD', $js_captcha);
            break;
        default:
            $smarty->assign('TITLE', "Ошибка");
            $smarty->assign('TPL_NAME', "error");
            break;
    }
}
$smarty->display('page.tpl');
