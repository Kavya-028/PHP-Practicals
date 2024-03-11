<!DOCTYPE html>
<html>
<head>
    <title>Array Sorting Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
        <?php
            $myArray = array(14, 55, 68, 47, 65, 105);
            sort($myArray);
            echo "<h2>Sorted Array: </h2>";
            echo "<pre>";
            foreach($myArray as  $i){
                echo "$i" . " ";
            } echo "</pre>";
        ?>
</body>
</html>
