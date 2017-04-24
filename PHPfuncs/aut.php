<?php

session_start();
require '../classSmarty.php';
header('Content-Type: text/html; charset=utf-8');

$emailf = filter_input(INPUT_POST, "log", FILTER_SANITIZE_EMAIL);
$passwordf = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

if (!empty($emailf) || !empty($passwordf)) {
    $db = classSmarty::getDB('user', 'user');
    $st = $db->query("select id_user,name,email,password from users where email='$emailf'");
    foreach ($st->fetchAll() as $row) {
        if (password_verify($passwordf, $row['password'])) {
            $arr = array();
            $_SESSION['id'] = $row['id_user'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['bin'] = $arr;
            header("Location: ".$_SERVER['HTTP_REFERER']);
            exit;
        }
    }
    echo "<script>alert('Введены неверные данные'); window.location.href='" . $_SERVER['HTTP_REFERER'] . "'</script>";
}
?>