<?php
$servername = "localhost"; // Change to your server name if needed
    $username = "root"; // Change to your MySQL username
    $password = ""; // Change to your MySQL password
    $database = "kavyadb"; // Change to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>
<body>
    <form action="" method="post">
        <br><br>
        Enter Enrollment Number <input type="text" name="enroll"><br><br>
        Enter Name <input type="text" name="name"><br><br>
        Enter City <input type="text" name="city"> <br><br>
        <input type="submit" name="sub">
    </form>
    <?php

    if(isset($_POST['sub'])){
    $enroll=$_POST['enroll'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $sql = "INSERT INTO studentinfo VALUES ('$enroll', '$name', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

    // Close connection
    $conn->close();
    ?>

</body>
</html>
