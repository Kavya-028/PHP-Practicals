<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Access</title>
</head>
<body>
    <?php
        class Area
        {
            public $length, $breadth;
            
            public function calculateArea($length, $breadth)
            {
                $area = $length * $breadth;
                echo "The Area of Rectangle is: $area";
            }
        }
        
        $obj = new Area();
        $obj->calculateArea(12, 5);
    ?>
</body>
</html>