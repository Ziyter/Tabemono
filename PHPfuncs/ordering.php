<?php

session_start();

require '../classSmarty.php';
$db = classSmarty::getDB('user', 'user');
$cart_str = filter_input(INPUT_COOKIE, "cart", FILTER_SANITIZE_SPECIAL_CHARS);
$time = filter_input(INPUT_POST, "time", FILTER_SANITIZE_SPECIAL_CHARS);
$date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_SPECIAL_CHARS);


if (isset($_SESSION['name'])) {
    try {
        if (!empty($cart_str)) {
            $cart = explode(",", $cart_str);
            $cart_count = array_count_values($cart);
            $cart_uni = array_unique($cart);
            $db->beginTransaction();
            for ($i = 0; $i < count($cart_count); $i++) {
                $elem = array_shift($cart_uni);
                $st = $db->prepare("insert into basket values(?,?,?,?)");
                $st->execute(array(
                    $_SESSION['id'],
                    $elem,
                    $cart_count[$elem],
                    round(microtime(true) * 1000)));
            }
            $db->commit();
            setcookie("cart", '');
            ordering($db);
        } else {
            ordering($db);
        }
    } catch (PDOException $e) {
        $db->rollBack();
        echo "Ошибка: " . $e->getMessage();
    }
} else {
    echo true;
}

function ordering($db) {
    $sum = 0;
    $st = $db->prepare("SELECT i.id_item,name,img,price,quantity "
            . "FROM item i INNER JOIN basket b ON b.id_item = i.id_item AND id_user=? ORDER BY time DESC");
    $st->bindParam(1, $_SESSION['id']);
    $st->execute();
    $row = $st->fetchAll();
    foreach ($row as $value) {
        $sum += $value[price] * $value[quantity];
    }
    if ($sum != 0) {
        $db->beginTransaction();
        $st = $db->prepare("CALL ordering(?,?)");
        $st->bindParam(1, $_SESSION['id']);
        $st->bindParam(2, $sum);
        $st->execute();
        $db->commit();

        $st = $db->prepare("SELECT id_order FROM orders_user WHERE id_order=(SELECT MAX(id_order) FROM orders_user WHERE id_user=?);");
        $st->execute(array($_SESSION['id']));
        $info_order = $st->fetchAll();
        $id_order = $info_order[0][0];

        $st = $db->prepare("SELECT i.id_item,name,img,price,quantity
            FROM item i INNER JOIN orders_items o ON o.id_item = i.id_item AND id_order=?;");
        $st->execute(array($id_order));
        $info_items = $st->fetchAll();

        $to = $_SESSION['email'];
        $subject = "Новый заказ № $id_order";
        $headers = "From: Tabemono <golubkov77@yandex.ru>\r\n";
        $headers .= "Content-Type: text/html;\r\n";
        $items = "";
        foreach ($info_items as $val) {
            $items .= "<tr>
                    <td>
                      " . $val['name'] . "
                    </td>
                    <td>" .
                    $val['price'] . " р.
            </td>
            <td>
               " . $val['quantity'] . " шт.
            </td>
        </tr>  ";
        }
        $message = "<html>"
                . "<h3>Благодарим за заказ в магазине <font style='color:#f50'>Tabemono</font>.</h3><br>"
                . "<h4 style='color:#f50'>Товары в заказе:</h4><br>"
                . "<table style='padding:5px; width:70%'>$items</table><br>"
                . "<h5 style='color:#f50'>Сумма заказа: $sum руб.</h5><br>"
                . "В ближайшее время с вами свяжется оператор для уточнения заказа."
                . "</html>";
        mail($to, "=?utf-8?B?" . base64_encode($subject) . "?=", $message, $headers);
    }
}
