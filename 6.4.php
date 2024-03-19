<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date-Time Format</title>
</head>
<body>
    <h2>Current Date and Time</h2>
    <p>
        <?php
        date_default_timezone_set('UTC');

        $currentDateTime = date('Y-m-d H:i:s');
        
        echo "Current Date and Time (YYYY-MM-DD HH:MM:SS): $currentDateTime<br>";
        echo "Current Date (YYYY-MM-DD): " . date('Y-m-d') . "<br>";
        echo "Current Time (HH:MM:SS): " . date('H:i:s') . "<br>";
        echo "Current Date and Time (Formatted): " . date('l, F j, Y g:i A') . "<br>";
        ?>
    </p>
</body>
</html>
