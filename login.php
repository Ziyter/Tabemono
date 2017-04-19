<?php

require 'classSmarty.php';
$smarty = classSmarty::getSmarty();

$smarty->assign('TITLE', "Аутентификация");
$smarty->assign('TPL_NAME', "login");

$smarty->display('page.tpl');
