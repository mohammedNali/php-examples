<?php

try {
    // $path = 'newfolder/myFile.txt';
    $path = 'newfolder/EURUSD_Hour.csv';
    if(!file_exists($path)) {
        echo "The file doesn't exist";
    } else {
        if(!unlink($path)) {
            throw new Exception("Error deleting the file!");
        }
        echo "File deleted successfully";
    }
} catch(Exception $e) {
    echo "Error: ". $e->getMessage();
}