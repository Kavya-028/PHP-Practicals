<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Demo - Retrieve</title>
</head>
<body>
    <h1>Cookie Demo - Retrieve</h1>
    <?php
    // Check if the username cookie is set
    if(isset($_COOKIE['username'])){
        $username = $_COOKIE['username'];
        echo "<p>Hello, $username! Your username is retrieved from the cookie.</p>";
    } else {
        echo "<p>Username not found in cookie.</p>";
    }
    ?>
</body>
</html>
