<?php

$string = "Hello, world! How are you today?";

$length = strlen($string);
echo "Length of the string: $length <br>";

$wordCount = str_word_count($string);
echo "Number of words in the string: $wordCount <br>";

$reversed = strrev($string);
echo "Reversed string: $reversed <br>";

$search = "How";
$position = strpos($string, $search);
if($position !== false) {
    echo "Found $search at position: $position <br>";
}

$rep = "Hi";
$newString = str_replace("Hello", $rep, $string);
echo "String after replacement: $newString <br>";


$variable = round(3.54);

echo "variable is $variable";
$isFloat = is_float($variable);
var_dump($isFloat);


// echo min(10, 5, 3, 1, 2, 0, -5);
// echo max(10, 5, 3, 1, 2, 0, -5);

// echo 'sqrt() of 16 '. sqrt(16);


// $randomNumber = rand(1, 10);
// echo "Random number: $randomNumber ";


$array = ['bilal', 'ahmed', 'c', 'g', 'z', 'w'];
sort($array);

var_dump($array);


