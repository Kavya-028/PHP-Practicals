<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Overloading</title>
</head>
<body>
    <?php
        class Vehicle {
            const DEFAULT_WHEELS = 4;
            function __call($name, $args){
                if ($name == 'getWheels') {
                    switch(count($args)){
                    case 0: return Vehicle::DEFAULT_WHEELS;
                    case 1: return $args[0];
                    }
                }
            }
        }
        
        $car = new Vehicle();
        echo "Car has <b>" . $car->getWheels() . "</b> wheels.<br/>";
        $bike = new Vehicle();
        echo "Bike has <b>" . $bike->getWheels(2) . "</b> wheels.";
    ?>

</body>
</html>