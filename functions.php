<?php
// 5! = 5 * 4 * 3 * 2 * 1 = 120
// 3! = 3 * 2 * 1 = 6


function factorial($n) {
    if($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}


$result = factorial(5);
echo "Factorial: $result";







// function sum($a = 5, $b = null) {
//     echo ($a + $b);
// }

// sum(10, 10);
// $sum = sum(6);
// echo $sum;

// function hello($name = "User") {
//     echo "Hello, $name";
// }

// hello();


