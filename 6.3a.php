<!DOCTYPE html>
<html>
<head>
    <title>Random Number Generator</title>
</head>
<body>
    <h2>Generate Random Number</h2>
    <form method="post" action="">
        Minimum: <input type="text" name="min" required><br><br>
        Maximum: <input type="text" name="max" required><br><br>
        <input type="submit" value="Generate"><br><br>
    </form>
    <?php
        if (isset($_POST['max']) && isset($_POST['min'])) {
            $min = $_POST["min"];
            $max = $_POST["max"];
            $random_number = mt_rand($min, $max);
            echo "Random number between $min and $max: $random_number";
        }
    ?>
</body>
</html>
