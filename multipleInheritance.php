<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Inheritance</title>
</head>
<body>
    <?php
        class Samsung{
            public $name = "S24 Ultra"; 
        }

        trait Galaxy{
            public $model = "SM8650-AC"; 
        }

        class Main extends Samsung{
            use Galaxy;

            function show(){
                echo "<h4>Samsung</h4> " . $this->name; 
            }

            function display(){
                echo "<h4>Qualcomm</h4> " . $this->model; 
            }
        }

        $obj = new Main();
        $obj->show();
        echo "<br>";
        $obj->display();
    ?>
</body>
</html>
