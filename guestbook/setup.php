<?php
// загружаем библиотеку Smarty
define('SMARTY_DIR', 'C:\openserver\domains\localhost\Antiquarium\guestbook\libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

class Smarty_GuestBook extends Smarty {

   function __construct()
   {
        // Конструктор класса.
        // Он автоматически вызывается при создании нового экземпляра.
       $this->Smarty();

$this->template_dir = 'C:\openserver\domains\localhost\Antiquarium\guestbook\templates/';
$this->compile_dir = 'C:\openserver\domains\localhost\Antiquarium\guestbook\templates_c/';
$this->config_dir = 'C:\openserver\domains\localhost\Antiquarium\guestbook\configs/';
$this->cache_dir = 'C:\openserver\domains\localhost\Antiquarium\cache/';

       $this->caching = false;
       $this->assign('app_name', 'Guest Book');
   }

}
?>


