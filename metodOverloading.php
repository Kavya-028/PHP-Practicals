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
        class Shape
        {   
            const PI = 3.14;
            function __call($name,$arg){
                if($name == 'area')
                    switch(count($arg)){
                        case 0 : return 0 ;
                        case 1 : return self::PI * $arg[0];
                        case 2 : return $arg[0] * $arg[1];
                    }
            }
        }
        $circle = new Shape();
        echo $circle->area(3);
        $rect = new Shape();    
        echo $rect->area(8,6);
    ?>
</body>
</html>
