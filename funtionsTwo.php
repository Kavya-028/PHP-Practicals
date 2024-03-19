<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>String Functions</title>
</head>
<body>
    <form action="" method="post">
        Enter String: <input type="text" name="str"><br>
        <input type="submit" name="btn"><br>
        <?php
            if(isset($_POST['str'])) {
                $str=$_POST['str'];
                str_replace(" ","",$str);
                if(ctype_lower($str)) {
                    echo "$str is <b>in</b> LowerCase";
                } else {
                    echo "$str is <b>not in</b> LowerCase";
                }
                echo "<br>";

                echo "<b>String after reverse</b>: " . strrev($str);
                echo "<br>";

                echo "<b>String after removing whitespaces</b>: " . str_replace(" ","",$str);
                echo "<br>";

                echo "<b>String before replace</b>: " . $str;
                echo "<br>";

                echo "<b>String after replace</b>: ";
                echo str_replace('Scripting', 'Server-Side Scripting', $str);
            }
        ?>
    </form>
</body>
</html>
