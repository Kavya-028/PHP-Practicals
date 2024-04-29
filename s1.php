<?php
session_start();

$name = "Kavya Desai";
$email = "kavya@example.com";

// Store values in session variables
$_SESSION["username"] = $name;
$_SESSION["email"] = $email;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1</h1>
    <p>Session variables have been set.</p>
    <p><a href='s2.php'>Go to Page 2</a></p>
</body>
</html>
