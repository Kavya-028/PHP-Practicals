<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get - Set</title>
</head>
<body>
    <?php

        class MyClass 
        {
            private $privateAttribute;

            public function __construct($value) 
            {
                $this->privateAttribute = $value;
            }

            public function setAttribute($value) 
            {
                $this->privateAttribute = $value;
            }

            public function getAttribute() 
            {
                return $this->privateAttribute;
            }
        }

        $myObject = new MyClass("Original Value");

        echo "Initial Value: " . $myObject->getAttribute() . "<br>";

        $myObject->setAttribute("New Value");

        echo "Updated Value: " . $myObject->getAttribute() . "<br>";
    ?>

</body>
</html>