<?php
require 'classSmarty.php';
ob_start();
header('Content-Type: text/html; charset=utf-8');
setcookie("login","0");
if(empty($_POST['login'])||empty($_POST['password'])||empty($_POST['email'])){
 echo "<script>alert('Ключевые поля не могут быть пустыми'); window.location.href='".$_SERVER['HTTP_REFERER']."'</script>";
			ob_end_flush();
				}
else{

//Функция очистки строк от лишних символов
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}


  $loginf =  clean($_POST['login']); filter_input(INPUT_POST,"login",FILTER_VALIDATE_INT)
  $passwordf = password_hash(clean($_POST['password']), PASSWORD_BCRYPT);
  $moneyf =  clean($_POST['money']);

if ($loginf[0]=='&'){echo "<script>alert('Такой логин недопустим'); window.location.href='".$_SERVER['HTTP_REFERER']."'</script>";
	exit;}
    else{
    $db= classSmarty::getDB('user', 'user');
    $st=$db->prepare("select login from users where login=?");
    $st->bindParam(1, $loginf);
    $st->execute();
    if ($st->rowCount()==0){
      try{
        $db->beginTransaction();
    $st=$db->prepare("insert into users values('',:loginf,:passwordf,:moneyf)");
    $st->bindParam(':loginf', $loginf);
    $st->bindParam(':passwordf', $passwordf);
    $st->bindParam(':moneyf', $moneyf);
    $st->execute();
    $db->commit();
      }
 catch (PDOException $e)
 {
     $db->rollBack();
  echo "Ошибка: " . $e->getMessage();
 }
  echo'<h1>Вы успешно зарегистрированы</h1>
<button onClick="window.location=\'index.php\'">Далее
<body>
</body>';
    }
    else
  echo "<script>alert('Такой логин уже есть'); window.location.href='".$_SERVER['HTTP_REFERER']."'</script>";
}
}
	
?>
