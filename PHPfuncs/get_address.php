<?php

session_start();
require '../classSmarty.php';
$db = classSmarty::getDB('user', 'user');

$act = filter_input(INPUT_POST, "act", FILTER_VALIDATE_INT);

if (isset($_SESSION['name'])) {
    if ($act == 1) {
        $st = $db->prepare("SELECT id_address,address FROM User_address WHERE id_user=?;");
        $st->execute(array($_SESSION['id']));
    }
    else{
        
    }
    $row = $st->fetchall();
   echo json_encode($row, JSON_UNESCAPED_UNICODE);
}
