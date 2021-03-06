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
        //$action = array_shift($uri_parts); // Получили имя действия
        // Получили в $params параметры запроса
        for ($i = 0; $i < count($uri_parts); $i++) {
            if (isset($uri_parts[$i + 1]))
                $params[$uri_parts[$i]] = $uri_parts[++$i];
        }
    } catch (Exception $e) {
        $smarty->assign('TPL_NAME', "error");
    }
}

$db = classSmarty::getDB('user', 'user');

if (isset($_SESSION['name']) && $_COOKIE['MOBILE'] == 'false') {
    $smarty->assign('NAME_USER', $_SESSION['name']);
}

if (empty($module)) {
    $smarty->assign('TPL_NAME', "error");
} else {
    switch ($module) {
        case 'index':
            $st = $db->query("select * from item where id_category<>3 ORDER BY id_item DESC limit 4");
            $row = $st->fetchAll();
            $st = $db->query("select id_item,img from item where id_category=3 ORDER BY id_item DESC limit 6");
            $row_sets = $st->fetchAll();
            $smarty->assign('row', $row);
            $smarty->assign('ROW_SETS', $row_sets);
            $smarty->assign('CSS', $css);
            $smarty->assign('JS', $js);
            $smarty->assign('TITLE', "Главная");
            $smarty->assign('TPL_NAME', "index");
            break;
        case 'search':
            if (!empty($params["query"])) {
                $query = urldecode($params["query"]);

                $st = $db->prepare("select * from item i INNER JOIN category c ON i.`id_category`=c.id_category
                        where name=? OR name_cat=?
                        limit $str,12");
                $st->execute(array($query, $query));
                $row = $st->fetchAll();
                $smarty->assign('row', $row);
                $smarty->assign('QUERY', $query);
                $smarty->assign('TITLE', "Поиск товаров");
                $smarty->assign('TPL_NAME', "search");
            } else {
                $smarty->assign('TITLE', "Ошибка");
                $smarty->assign('TPL_NAME', "error");
            }
            break;
        case 'user':
            if (isset($_SESSION['name'])) {
                $mobile = filter_input(INPUT_COOKIE, 'MOBILE', FILTER_VALIDATE_BOOLEAN);
                if (isset($mobile)) {
                    $smarty->assign('MOBILE', $mobile);
                } else {
                    $smarty->assign('MOBILE', 'true');
                }
                if (count($params) == 0) {
                    $st = $db->prepare("SELECT o.id_order,summa,date_order,name_status,s.id_status
                FROM orders_user o INNER JOIN status_of_order s ON o.status=s.id_status AND id_user=? ORDER BY date_order DESC;");
                    $st->bindParam(1, $_SESSION['id']);
                    $st->execute();
                    $row = $st->fetchAll();
                    foreach ($row as &$value) {
                        $value['date_order'] = month_replace($value['date_order']);
                    }
                    $smarty->assign('ORDERS_LIST', $row);
                } else {
                    $smarty->assign('ORDER_INFO', 'true');
                    try {
                        $st = $db->prepare("SELECT i.id_item,name,img,price,quantity
                        FROM item i INNER JOIN orders_items o ON o.id_item = i.id_item AND id_order=?;");
                        $st->bindParam(1, $params['order']);
                        $st->execute();
                        $row_items = $st->fetchAll();
                        $st = $db->prepare("SELECT date_delivery,u.address FROM orders_user o INNER JOIN User_address u "
                                . "on u.id_address = o.address AND id_order=?; ");
                        $st->execute(array($params['order']));
                        $order_info = $st->fetch();
                        $order_info['date_delivery'] = month_replace($order_info['date_delivery']);
                        $smarty->assign('ITEMS_LIST', $row_items);
                        $smarty->assign('ORDER_PREF', $order_info);
                        $smarty->assign('ID_ORDER', $params['order']);
                    } catch (PDOException $e) {
                        echo "Ошибка: " . $e->getMessage();
                    }
                }
                $smarty->assign('TITLE', "Личный кабинет");
                $smarty->assign('TPL_NAME', "personal_cabinet");
            } else {
                $smarty->assign('TITLE', "Вход/Регистрация");
                $smarty->assign('TPL_NAME', "login");
                $smarty->assign('JS_HEAD', $js_captcha);
            }
            break;
        case 'item':
            $id = $params["id"];
            if (is_numeric($id)) {
                $st = $db->prepare("SELECT * FROM item where id_item=?");
                $st->execute(array($id));
                $row = $st->fetch();
                $smarty->assign('row', $row);
                $smarty->assign('TITLE', $row['name']);
                $smarty->assign('TPL_NAME', "item");
            } else {
                $smarty->assign('TITLE', "Ошибка");
                $smarty->assign('TPL_NAME', "error");
            }
            break;
        case 'category':
            $cat_name = $params["cat"];
            $page = filter_var($params["page"], FILTER_SANITIZE_NUMBER_INT, array("options" => array("min_range" => 1)));
            $str = ($page !== '') ? ($page - 1) * 12 : 0;
            $smarty->assign('CAT_NAME', $cat_name);
            switch ($cat_name) {
                case 'hotrolls':
                    $cat = 2;
                    $cat_name = 'Суши';
                    break;
                case 'rolls':
                    $cat = 1;
                    $cat_name = 'Роллы';
                    break;
                case 'sets':
                    $cat = 3;
                    $cat_name = 'Наборы';
                    break;
                default:
                    $cat = 0;
                    break;
            }
            if ($cat != 0 && isset($str)) {
                $st = $db->prepare("SELECT * FROM item where id_category=? limit $str,12");
                $st->execute(array($cat));
                $row = $st->fetchall();

                $st = $db->prepare("SELECT count(*) FROM item where id_category=? ");
                $st->execute(array($cat));
                $items_count = $st->fetch()[0];
                $page_count = ceil($items_count / 12);
                if ($page > 7) {
                    if ($page - 3 < 1) {
                        $alpha = 1;
                        $omega = 7;
                    } else {
                        $alpha = $page - 3;

                        if ($page + 3 > $page_count) {
                            $omega = $page_count;
                            $alpha = $page_count - 6;
                        } else {
                            $omega = $page + 3;
                        }
                    }
                } else {
                    $alpha = 1;
                    $omega = $page_count;
                }

                $smarty->assign('ALPHA', $alpha);
                $smarty->assign('OMEGA', $omega);
                $smarty->assign('PAGE', $page);
                $smarty->assign('PAGES', $page_count);
                $smarty->assign('row', $row);
                $smarty->assign('TITLE', $cat_name);
                $smarty->assign('TPL_NAME', "list_items");
            } else {
                $smarty->assign('TITLE', "Ошибка");
                $smarty->assign('TPL_NAME', "error");
            }
            break;
        case 'registr':
            $smarty->assign('TITLE', "Регистрация");
            $smarty->assign('TPL_NAME', "registr");
            $smarty->assign('JS_HEAD', $js_captcha);
            break;
        case 'about':
            $smarty->assign('TITLE', "О нас");
            $smarty->assign('TPL_NAME', "about");
            break;
        case 'contacts':
            $smarty->assign('TITLE', "Контакты");
            $smarty->assign('TPL_NAME', "contacts");
            break;
        default:
            $smarty->assign('TITLE', "Ошибка");
            $smarty->assign('TPL_NAME', "error");
            break;
    }
}
$smarty->display('page.tpl');

