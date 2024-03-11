<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Enter a Number: <input type="text" name="num">
        <input type="submit" name="sub">
    </form>

    <?php
    if(isset($_POST['sub'])) {
        $n = $_POST['num'];

        echo "<table>";
        for($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$n x $i = ";
            echo ($n * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
