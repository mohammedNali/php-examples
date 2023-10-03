<?php

session_start();

$_SESSION['user_auth'] = true;

if(!isset($_SESSION['user_auth']) || !$_SESSION['user_auth']) {
    header("Location: login.php");
    exit();
}




