<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date and Time</h1>
    <p>
        <?php
        date_default_timezone_set("Europe/Istanbul");
        $timestamp = time() - (2 * 24 * 60 * 60);
        $dateFormat = date("d/m/Y");
        $dateTimeFormat = date("Y-m-d H:i:s", $timestamp);
        $dayOfWeek = date("l", $timestamp);
        // echo $dateFormat;
        // echo $dateTimeFormat;
        var_dump($dateFormat); 
        var_dump($dateTimeFormat); 
        var_dump($dayOfWeek); 
        
        ?>
    </p>

</body>
</html>