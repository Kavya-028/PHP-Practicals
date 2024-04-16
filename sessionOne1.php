<?php
session_start();

if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $_SESSION["username"] = $name;
    $_SESSION["email"] = $email;
}
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
    <form action="" method="post">
        Enter Name <input type="text" name="name"> <br><br>
        Enter Email <input type="text" name="email"> <br><br>
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_POST['sub'])){
        echo "<p>Session variables have been set.</p>";
        echo "<p><a href='sessionOne2.php'>Go to Page 2</a></p>";
    }
    ?>
</body>
</html>
