<?php

session_start();

if (isset($_SESSION['name'])) {
    echo true;
}
else{
    echo false;
}

