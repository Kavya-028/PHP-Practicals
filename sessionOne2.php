<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2</h1>
    <?php
    echo "<p>Welcome, " . $_SESSION["username"] . "!</p>";
    echo "<p>Your email is: " . $_SESSION["email"] . "</p>";
    ?>
    <p><a href="sessionOne1.php">Go back to Page 1</a></p>
</body>
</html>
