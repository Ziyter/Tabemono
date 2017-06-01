<?php

class classSmarty {

    static $db;

    static function &getSmarty() {
        define('SMARTY_DIR', 'guestbook\libs/');
        require_once(SMARTY_DIR . 'Smarty.class.php');

        $smarty = new Smarty();

        $smarty->template_dir = 'templates/';
        $smarty->compile_dir = 'guestbook\templates_c/';
        $smarty->config_dir = 'guestbook\configs/';
        $smarty->cache_dir = 'guestbook\cache/';
        $smarty->caching = false;
        $smarty->error_reporting = E_ALL & ~E_NOTICE;
        return $smarty;
    }

    static function &getDB($user, $pass) {
        //static $db;
        try {
            if (empty($db)) {
                $connectdb = "mysql:host=tabemono.ru;dbname=Foods"; //192.168.1.37
                $db = new PDO($connectdb, $user, $pass); //array(PDO::ATTR_PERSISTENT => true)
            }
        } catch (PDOException $e) {
            die("Error:" . $e->getMessage());
        }
        return $db;
    }

}

function month_replace($date) {
    $date_c = strftime("%#d %b, %Y %H:%M", strtotime($date));
    $replacements = array(
        "Jan" => "января",
        "Feb" => "февраля",
        "Mar" => "марта",
        "Apr" => "апреля",
        "May" => "мая",
        "Jun" => "июня",
        "Jul" => "июля",
        "Aug" => "августа",
        "Sep" => "сентября",
        "Oct" => "октября",
        "Nov" => "ноября",
        "Dec" => "декабря"
    );
    return strtr($date_c, $replacements);
}
