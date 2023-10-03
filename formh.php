<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./formh.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="message">Message:</label>
        <br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";

    if(empty($_POST["name"])) {
        $nameErr = "<p style='color: red;'>Name is required</p>";
    } else {
        $name = sanitizeInput($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "<p style='color: red;'>Only letters and white space allowed</p>";
        }
    }


    // if(empty($_POST["email"])) {
    //     $emailErr = "<p style='color: red;'>Email is required</p>";
    // } else {
    //     $email = sanitizeInput($_POST['email']);
    //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         $emailErr = "<p style='color: red;'>Invalid email format</p>";   
    //     }
    // }









    if(empty($nameErr)) {
        echo $name;
    } else {
        echo $nameErr;
    }

    


}






