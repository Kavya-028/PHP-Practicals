<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class First
        {
            function myFun()
            {
                echo "This is First Class Function";
            }
        }
        class Second extends First
        {
            function myFun2()
            {
                echo "This is Second Class Function";
            }
        }
        class Third extends Second
        {
            function myFun3()
            {
                echo "This is Third Class Function";
            }
        }
        
        $obj = new Third();
        $obj->myFun();
        $obj->myFun2();
        $obj->myFun3();
    ?>
</body>
</html>