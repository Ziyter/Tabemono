<?php

session_start();
require '../classSmarty.php';
$db= classSmarty::getDB('user', 'user');

ini_set("display_errors",1);
error_reporting(E_ALL);

if (isset($_SESSION['name'])) {
    $cart_str = filter_input(INPUT_COOKIE, "cart", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($cart_str)) {
        try {
            $st = $db->prepare("SELECT i.id_item,name,img,price,quantity "
                    . "FROM item i INNER JOIN basket b ON b.id_item = i.id_item AND id_user=? ORDER BY time DESC");
            $st->bindParam(1, $_SESSION['id']);
            $st->execute();
            $row = $st->fetchAll();
            echo json_encode($row, JSON_UNESCAPED_UNICODE);
        } catch (PDOException $e) {
            echo "Ошибка: " . $e->getMessage();
        }
    } else {
        get_data();
    }
} else {
    get_data();
}

function get_data() {
    $cart_str = filter_input(INPUT_COOKIE, "cart", FILTER_SANITIZE_SPECIAL_CHARS);
    if (!empty($cart_str)) {
        $cart = explode(",", $cart_str);
        $cart_count = array_count_values($cart);
        /* Создаем строку из знаков вопроса (?) в количестве равном количеству параметров */
        $place_holders = implode(',', array_fill(0, count($cart), '?'));

        try {
            $st = $GLOBALS['db']->prepare("SELECT * FROM item WHERE id_item in ($place_holders)");
            $st->execute($cart);
            $row = $st->fetchAll();
            foreach ($row as &$value) {
                $value['quantity'] = $cart_count[$value['id_item']];
            }
            echo json_encode($row, JSON_UNESCAPED_UNICODE);
        } catch (PDOException $e) {
            echo "Ошибка: " . $e->getMessage();
        }
    }
}
