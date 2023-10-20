<?php 

$folderName = 'newfolder';
$fileName = 'myFile.txt';
$eurUSD = 'EURUSD_Hour.csv';
$path = $folderName . '/' . $eurUSD;


// if(file_exists($path)) {
//     try {
//         $csvData = array_map('str_getcsv', file($path));
//         if($csvData === false) {
//             throw new Exception("Error reading CSV file.");
//         }
//     } catch(Exception $error) {
//         echo "Error: ".$error->getMessage();
//     }


//     // foreach($csvData as $row) {
//     //     echo implode(', ', $row) . "\n";
//     // }
// } 


// function multiply($number) {
//     return $number * 5;
// }
// $numbers = [1, 2, 3, 4, 5];
// $newNumbers = array_map('multiply', $numbers);
// var_dump($newNumbers);
// echo "New Numbers: ". implode('-', $newNumbers). "\n";






// try {
//     $fContent = @file_get_contents($path);
//     if($fContent === false) {
//         throw new Exception("Failed to read the file");
//     }
//     echo $fContent;
// } catch(Exception $e) {
//     echo "Error: ". $e->getMessage();
// }


// var_dump(file_exists($path));
// die();


// if(file_exists($path)) {
//     $file = fopen($path, 'a');
//     fwrite($file, " the file completion");
//     fclose($file);
// }

// if(!file_exists($path)) {
//     mkdir($folderName);
//     $file = fopen($path, 'w');
//     if($file) {
//         $text = "Hi, World!";
//         fwrite($file, $text);
//         fclose($file);
//         echo "File $fileName created and written successfully.";
//     }
//     echo "<h1>Folder $folderName created successfully.";
// } else {
//     echo "<h1>Folder $folderName already exists.";
// }


// $ofile = fopen($path, 'r');
// if($ofile) {
//     $content = fread($ofile, filesize($path));
//     fclose($ofile);
//     echo $content;
// } else {
//     echo "Unable to open the file for reading.";
// }




