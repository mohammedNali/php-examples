<?php
include('env.php');
// $var = 50;
// $serverName = $_SERVER['SERVER_NAME'];
// $userAgent = $_SERVER['HTTP_USER_AGENT'];
// $server_address = $_SERVER['SERVER_ADDR'];
// $remote_address = $_SERVER['REMOTE_ADDR'];




$usernameByRequest = $_REQUEST['username'];
$usernameByRequest = $_POST['username'];
$passwordByRequest = $_REQUEST['password'];


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetFolder = "uploads/";
    echo $_FILES["fileToUpload"]["tmp_name"];
    echo '<br>';
    $targetFile = $targetFolder . basename($_FILES["fileToUpload"]["name"]);
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "File has been uploaded successfully.";
    } else {
        echo "Error uploading the file.";
    }
} 

echo '<br>';
echo "username: $usernameByRequest";
echo '<br>';
echo "password: $passwordByRequest";
echo '<br>';
echo $_ENV["DB_HOST"];

// echo "Server name: $serverName";
// echo '<br>';
// echo "userAgent name: $userAgent";
// echo '<br>';
// echo "server_addresss: $server_address";
// echo '<br>';
// echo "remote_address: $remote_address";







// function accessGlobal() {
//     // global $var; 
//     $varLocal = $GLOBALS['var'];
//     echo $varLocal;
// }

// accessGlobal();

