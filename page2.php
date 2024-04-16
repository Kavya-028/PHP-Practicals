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
    // Retrieving data from URL using GET method
    if(isset($_GET['name']) && isset($_GET['age'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        echo "<p>Hello, $name! Your age is $age.</p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>
    <p><a href="page1.php">Go back to Page 1</a></p>
</body>
</html>
