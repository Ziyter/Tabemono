<?php

require '../classSmarty.php';
$db = classSmarty::getDB('admin', 'admin');

$emailf = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if (!empty($emailf)) {
    $st = $db->prepare("select check_mail(?)");
    $st->bindParam(1, $emailf);
    $st->execute();
    $row = $st->fetch();
    echo $row[0];
}


