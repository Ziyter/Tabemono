<?php
session_start();
unset($_SESSION['id']); 
unset($_SESSION['name']); 
unset($_SESSION['bin']); 
session_destroy();
header("Location: ".$_SERVER['HTTP_REFERER']);

