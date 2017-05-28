<?php

class classSmarty {

    static $db;

    static function &getSmarty() {
        define('SMARTY_DIR', 'C:\OpenServer\domains\tabemono\guestbook\libs/');
        require_once(SMARTY_DIR . 'Smarty.class.php');

        $smarty = new Smarty();

        $smarty->template_dir = 'C:\openserver\domains\tabemono\templates/';
        $smarty->compile_dir = 'C:\openserver\domains\tabemono\guestbook\templates_c/';
        $smarty->config_dir = 'C:\openserver\domains\tabemono\guestbook\configs/';
        $smarty->cache_dir = 'C:\openserver\domains\tabemono\guestbook\cache/';
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
