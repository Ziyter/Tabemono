<?php

require '../classSmarty.php';
ob_start();
header('Content-Type: text/html; charset=utf-8');
ob_end_flush();

$namef = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$passwordf = password_hash(filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS), PASSWORD_BCRYPT);
$phonef = preg_replace("/[^0-9]/", '', filter_input(INPUT_POST, "phone", FILTER_VALIDATE_INT));
$emailf = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$address = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_SPECIAL_CHARS);

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=6LdPcB4UAAAAAH5UcRSfjGQPfLLr_tONt4Ue0gmK&response=' . (array_key_exists('g-recaptcha-response', $_POST) ? $_POST["g-recaptcha-response"] : '') . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
$resp = json_decode(file_get_contents($url), true);

if (!$resp['success']) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

if (empty($namef) && empty($passwordf) && empty($phonef) && empty($emailf)) {
    exit;
} else {
    $db = classSmarty::getDB('admin', 'admin');
    $st = $db->prepare("select login from users where login=?");
    $st->bindParam(1, $namef);
    $st->execute();
    $a = 1;
    if ($st->rowCount() == 0) {
        try {
            $db->beginTransaction();
            $st = $db->prepare("insert into users values('',:name,:phone,:email,:password,:city,:address)");
            $st->bindParam(':name', $namef);
            $st->bindParam(':phone', $phonef);
            $st->bindParam(':email', $emailf);
            $st->bindParam(':password', $passwordf);
            $st->bindParam(':city', $a);
            $st->bindParam(':address', $address);
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
    }
}
?>
