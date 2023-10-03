<?php

if(isset($_COOKIE['lang'])) {
    $userLanguage = $_COOKIE['lang'];
    echo $userLanguage;
} else {
    setcookie('lang', 'en', time() + 5);
    
}





