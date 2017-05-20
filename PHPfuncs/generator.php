<?php

require '../classSmarty.php';
$db = classSmarty::getDB('admin', 'admin');

$db->beginTransaction();
for ($i = 0; $i < 200; $i++) {
$cat=rand(1, 3);
$price=rand(100, 600);
$st = $db->prepare("INSERT INTO `item` (`id_item`, `name`, `description`, `composition`, `price`, `id_category`, `img`) "
        . "VALUES (NULL,?,?,?,?,?,?);");
$st->execute(array('Невада', 'Ролл', 'Лосось-терияки, краб, омлет, сливочный сыр, масаго\r\n', $price, $cat, 'nevada.png'));
}
$db->commit();



