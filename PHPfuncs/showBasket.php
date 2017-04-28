<?php

session_start();
require '../classSmarty.php';
$db = classSmarty::getDB('user', 'user');

if (isset($_SESSION['name'])) {
    try {
        $st = $db->prepare("SELECT i.id_item,quantity,name,price,img "
                ."FROM item i INNER JOIN basket b ON b.id_item = i.id_item AND id_user=? ORDER BY time");
        $st->bindParam(1, $_SESSION['id']);
        $st->execute();
        $row = $st->fetchAll();
        echo json_encode($row,JSON_UNESCAPED_UNICODE);
    } catch (PDOException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}
