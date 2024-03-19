<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class</title>
</head>
<body>
    <?php
        abstract class A {
            abstract function first();
            public function Abstract() {
                echo "This is a Abstract Function";
            }
        }

        class B extends A {
            public function first() {
                echo "Defined Class Function"
            }
        }
    ?>
</body>
</html>