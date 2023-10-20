<?php
// require 'env.php';
require_once 'env.php';
// include('env.php');
// include_once 'env.php';
$username = $_ENV["DB_USERNAME"];
$host = $_ENV["DB_HOST"];

$database = 'newdb_testing';
$conn = new PDO("mysql:host=$host", $username, "");
$sql = "CREATE DATABASE $database";
$conn->exec($sql);

try {
    
    $db = new PDO("mysql:host=localhost;dbname=newdb_testing", 
                    $username,
                    "");

    
    $stmt = $db->query("SELECT * FROM non_table");
    if($stmt === false) {
        throw new Exception(implode(" " ,$db->errorInfo()));
    } 
} catch(Exception $e) {
    echo "Database Error: ". $e->getMessage();
}