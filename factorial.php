<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>

    <h2>Factorial Calculator</h2>

    <form method="post">
        Enter a number:<input type="number" name="number" required>
        <input type="submit" name="sub">
    </form>

    <?php
        if (isset($_POST["number"])) {
            $number = $_POST["number"];
            $factorial = 1;

            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }

            echo "<p>Factorial of $number is: $factorial</p>";
        }
    ?>

</body>
</html>