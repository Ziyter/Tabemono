<?php
session_start();
unset($_SESSION['id']); 
unset($_SESSION['name']); 
unset($_SESSION['bin']); 
session_destroy();
header("Location: /user");

