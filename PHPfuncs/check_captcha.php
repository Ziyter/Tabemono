<?php

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=6LdPcB4UAAAAAH5UcRSfjGQPfLLr_tONt4Ue0gmK&response=' . (array_key_exists('response', $_POST) ? $_POST["response"] : '') . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
$resp = json_decode(file_get_contents($url), true);

echo $resp['success'];


