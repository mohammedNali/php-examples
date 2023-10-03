<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Define variables and initialize with empty values
    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";

    // Validate and sanitize user input
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = sanitizeInput($_POST["message"]);
    }

    // Display errors or process the data if no errors
    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        // Process the data (e.g., send an email, save to a database)
        // Here, we'll just display the submitted data for demonstration
        echo "Submitted Data:<br>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Message: " . $message . "<br>";
    } else {
        // Display errors and redirect back to the form
        include "form.html";
    }
}

function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
