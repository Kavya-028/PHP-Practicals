<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor and Destructor Example</title>
</head>
<body>

    <?php
        class ConstructorUse 
        {
            public function __construct() 
            {
                echo "<h3> Constructor called</h3>";
            }

            public function __destruct() 
            {
                echo "<h3> Destructor called. Object Destroyed</h3>";
            }

            public function doSomething() 
            {
                echo "<h3> Function Called</h3>";
            }
        }

            $obj = new ConstructorUse();
            $obj->doSomething();

    ?>

</body>
</html>
