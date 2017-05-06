<?php

session_start();

require '../classSmarty.php';
$db = classSmarty::getDB('user', 'user');

if (isset($_SESSION['name'])) {
    try {
        $sum=0;
        $st = $db->prepare("SELECT i.id_item,name,img,price,quantity "
                . "FROM item i INNER JOIN basket b ON b.id_item = i.id_item AND id_user=? ORDER BY time DESC");
        $st->bindParam(1, $_SESSION['id']);
        $st->execute();
        $row = $st->fetchAll();
        foreach ($row as $value) {
            $sum += $value[price]*$value[quantity];
        }
        
        $db->beginTransaction();
        $st = $db->prepare("CALL ordering(?,?)");
        $st->bindParam(1, $_SESSION['id']);
        $st->bindParam(2, $sum);
        $st->execute();
        $db->commit();
    } catch (PDOException $e) {
        $db->rollBack();
        echo "Ошибка: " . $e->getMessage();
    }
}
    