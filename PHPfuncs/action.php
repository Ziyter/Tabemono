<?php

require '../classSmarty.php';
ob_start();
header('Content-Type: text/html; charset=utf-8');
//setcookie("login","0");
ob_end_flush();

//Функция очистки строк от лишних символов
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

$namef = clean(filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS));
$passwordf = password_hash(filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS), PASSWORD_BCRYPT);
$phonef = preg_replace("/[^0-9]/", '', clean(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS)));
$emailf = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if (empty($namef) && empty($passwordf) && empty($phonef) && empty($emailf)) {
    exit;
} else {
    $db = classSmarty::getDB('admin', 'admin');
    $st = $db->prepare("select login from users where login=?");
    $st->bindParam(1, $namef);
    $st->execute();
    $a = 1;
    $b = "СПБ";
    if ($st->rowCount() == 0) {
        try {
            $db->beginTransaction();
            $st = $db->prepare("insert into users values('',:name,:phone,:email,:password,:city,:address)");
            $st->bindParam(':name', $namef);
            $st->bindParam(':phone', $phonef);
            $st->bindParam(':email', $emailf);
            $st->bindParam(':password', $passwordf);
            $st->bindParam(':city', $a);
            $st->bindParam(':address', $b);
            $st->execute();
            $db->commit();
        } catch (PDOException $e) {
            $db->rollBack();
            echo "Ошибка: " . $e->getMessage();
        }
        echo'<h1>Вы успешно зарегистрированы</h1>
<button onClick="window.location=\'index.php\'">Далее
<body>
</body>';
    } else
        echo "<script>alert('Такой логин уже есть'); window.location.href='" . $_SERVER['HTTP_REFERER'] . "'</script>";
}
?>
