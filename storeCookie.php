<?php
// Check if the username is submitted
if(isset($_POST['username'])){

    $username = $_POST['username'];
    setcookie("username", $username, time() + (86400 * 30), "/");
    header("Location: retrieveCookie.php"); 
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Demo - Stored</title>
</head>
<body>
    <h1>Cookie Demo - Stored</h1>
    <?php
    if(isset($_COOKIE['username'])){
        $username = $_COOKIE['username'];
        echo "<p>Hello, $username! Your username is stored in a cookie.</p>";
        echo "<p><a href='retrieve.php'>Retrieve username from cookie</a></p>";
    } else {
        echo "<p>Username not stored in cookie.</p>";
    }
    ?>
</body>
</html>
