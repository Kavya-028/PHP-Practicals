<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Use</title>
</head>
<body>
    <?php
        interface First {
            function one();
        }

        interface Second {
            function two();
        }

        class Main implements First, Second {
            function one() {
                echo "<b>PHP</b> is a ";
            }
            function two() {
                echo "is a <i>Server-Side</i> Scripting Language";
            }
        }
        $obj = new Main();
        $obj->one();
        $obj->two();
    ?>
</body>
</html>