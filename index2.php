<?php

echo "Intro to PHP, I am in index.php file <br>";

define('WEBSITE', 'https://mywebsite.com');
define('ADDRESS', 'ISTANBUL/TURKEY');
define('PHONE', 90507888999888);
$myAge = 35.5;
$bigNumber = 1.2e3; // 1.2 x 10 ^ 3;
$array0 = array('A', 'B', 'C', 100, true, 12.12);
$array10 = ['A', 'B', 'C'];


function getWebsite() {
    // return WEBSITE . '<br>';
}

var_dump(WEBSITE);
var_dump(PHONE);
var_dump($myAge);
var_dump($array);
var_dump($bigNumber);
var_dump(function(){});


// echo getWebsite();
echo(getWebsite().' '.ADDRESS); echo '<br>';
echo getWebsite(),' ',ADDRESS;
// print(getWebsite());
print getWebsite().' '.ADDRESS;


?>