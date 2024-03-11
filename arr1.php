<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length and Word Count</title>
</head>
<body>
    <h1>Enter a string:</h1>
    <form action="" method="post">
        <input type="text" name="string" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
        if (isset($_POST['string'])) {
            $str = $_POST['string'];
            $length = 0;
            $words = 1;
            while (isset($str[$length])) {
                if ($str[$length] == ' ') {
                    $words++;
                }
                $length++;
            }

            echo "<h2>Results</h2>";
            echo "String length: $length<br>";
            echo "Number of words: $words";
        }
    ?>
</body>
</html>
