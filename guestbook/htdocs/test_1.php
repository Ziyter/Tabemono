<?php
require('C:\openserver\domains\localhost\Antiquarium\guestbook\setup.php');

$smarty = new Smarty_GuestBook();

$smarty->assign('name', 'Мазафакер');

//** раскомментируйте следующую строку для отображения отладочной консоли
$smarty->debugging = true;

$smarty->display('index1.tpl');

?>
