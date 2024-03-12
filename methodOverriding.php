<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Overrifding</title>
</head>
<body>
    <?php
        class A()
        {
            function displayAns($a, $b)
            {
                $result=$a*$b;
                echo "Multiplication of $a and $b is: " . $result;
            }
        }
        class B
        {
            function displayAns($a, $b)
            {
                $result=$a+$b;
                echo "Addition of $a and $b is: " . $result;
            }
        }
        $obj = new B();
        $obj->displayAns(10, 15);
    ?>
</body>
</html>