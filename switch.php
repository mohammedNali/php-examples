<?php

$day = "Thursday";

switch($day) {
    case "Monday":
        echo "It's Monday";
        break;
    case "Friday":
        echo "It's Friday";
        break;
    default: 
        echo "It's just another day";
}


$age = 25;
$message = ($age >= 18) ? "You are an adult." : "You are a minor";
echo $message;