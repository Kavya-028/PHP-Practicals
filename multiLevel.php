<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiLevel Inheritance</title>
</head>
<body>
    <?php
        class Car{
            public $car = "Mercedes";

            function move(){
                echo "<b>".$this->car ."</b>". " is Moving on Highway...";
            }
        }

        class SportsCar extends Car{
            public $sCar = "Ferrari";

            function speed(){
                echo "<b>".$this->sCar ."</b>". " is Speeding on ExpressWay";
            }
        }

        class MainCar extends SportsCar{
            public $mCar = "Rolls Royce";

            function standing(){
                echo "<b>".$this->mCar ."</b>". " is Standing on the Side of the Highway";
            }
        }

        $obj = new MainCar();
        $obj->move();
        echo "<br>";
        $obj->speed();
        echo "<br>";
        $obj->standing();
    ?>
</body>
</html>