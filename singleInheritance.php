<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Inheritance</title>
</head>
<body>
    <?php
        class Animal
        {
            function animalLegs()
            {
                echo "<h2>Animal Has 4 Legs</h2>";
            }
        }
        class Bird extends Animal
        {
            function birdLeg()
            {
                echo "<h2>Birds Has 2 Legs</h2>";
            }
        }
        $obj = new Bird();
        $obj->animalLegs();
        $obj->birdLeg();
    ?>
</body>
</html>