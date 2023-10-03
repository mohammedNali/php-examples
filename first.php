<?php
// echo 'I am in first.php page';
// $number = 10;
// var_dump($number);

define("PI", 3.14);

$globalVar = 0;
// $globalVar2 = 20;

function myFunction() {
    // $GLOBALS['globalVar'] = "this is a global variable";
    // $GLOBALS['globalVar2'] += 10;
    static $counter = 0;
    // $locVariable = "I am local";
    // echo $locVariable . "<br />";
    $counter++;
    echo "Counter: $counter\n";
    
    global $globalVar;
    $globalVar = "this is a global variable";

    echo "The value of PI is ".PI;
    // echo $globalVar;
}

myFunction();
// myFunction();
// myFunction();
// myFunction();
// echo $globalVar . " ";







// echo $globalVar2;






?>
