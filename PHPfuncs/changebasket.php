<?php

session_start();
require '../classSmarty.php';
$db = classSmarty::getDB('user', 'user');

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$act = filter_input(INPUT_POST, "act", FILTER_VALIDATE_INT);
$quanity=1;

if (isset($_SESSION['name'])) {
    if (!empty($id)&&!empty($act)) {
        try {
        switch($act){
            case 1:
               $st = $db->prepare("insert into basket values(?,?,?,?)"); 
                break;
        }
        $st->bindParam(1, $_SESSION['id']);
        $st->bindParam(2, $id);
        $st->bindParam(3, $quanity);
        $st->bindParam(4, round(microtime(true) * 1000));
        $st->execute();
        } catch (PDOException $e) {
            echo "Ошибка: " . $e->getMessage();
        }
    }
}