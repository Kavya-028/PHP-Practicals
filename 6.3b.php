<!DOCTYPE html>
<html>
<head>
    <title>Number Conversion</title>
</head>
<body>
    <h2>Decimal to Binary, Octal, Hexadecimal Converter</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Decimal Number: <input type="number" name="decimal" required><br><br>
        <input type="submit" value="Convert"><br><br>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $decimal_number = $_POST["decimal"];
            echo "Decimal: $decimal_number <br>";
            echo "Binary: " . decbin($decimal_number) . "<br>";
            echo "Octal: " . decoct($decimal_number) . "<br>";
            echo "Hexadecimal: " . dechex($decimal_number) . "<br>";
        }
    ?>

</body>
</html>
