<?php

session_start();
require '../classSmarty.php';
$db = classSmarty::getDB('user', 'user');

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$act = filter_input(INPUT_POST, "act", FILTER_VALIDATE_INT);
$quanity = filter_input(INPUT_POST, "value", FILTER_VALIDATE_INT);

if (isset($_SESSION['name'])) {
    if (!empty($id) && !empty($act)) {
        try {
            if ($quanity === -1) {
                $st = $db->prepare("select quantity from basket WHERE id_user=? and id_item=?;");
                $st->bindParam(1, $_SESSION['id']);
                $st->bindParam(2, $id);
                $st->execute();
                if ($st->rowCount() > 0) {
                    $act = 2;
                    $quanity = $st->fetchColumn() + 1;
                }
            }
            switch ($act) {
                case 1:
                    $st = $db->prepare("insert into basket values(?,?,?,?)");
                    $st->bindParam(1, $_SESSION['id']);
                    $st->bindParam(2, $id);
                    $st->bindParam(3, $quanity);
                    $st->bindParam(4, round(microtime(true) * 1000));
                    break;
                case 2:
                    $st = $db->prepare("UPDATE basket 
                        SET quantity = ?
                        WHERE id_user=? and id_item=?;");
                    $st->bindParam(1, $quanity);
                    $st->bindParam(2, $_SESSION['id']);
                    $st->bindParam(3, $id);
                    break;
            }
            $st->execute();
        } catch (PDOException $e) {
            echo "Ошибка: " . $e->getMessage();
        }
    }
}