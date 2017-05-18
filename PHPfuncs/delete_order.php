<?php

require '../classSmarty.php';
$db = classSmarty::getDB('user', 'user');
$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

try {
    $st = $db->prepare("UPDATE orders_user SET status = 4 WHERE orders_user.id_order = ?;");
    $st->execute(array($id));
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}

