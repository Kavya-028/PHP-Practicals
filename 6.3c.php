<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angle Conversion</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Angle Conversion</h2>
        <table>
            <tr>
                <td><label for="angle">Enter angle (in degrees):</label></td>
                <td><input type="text" id="angle" name="x" required><br></td>
            </tr>
        </table>
        <input type="submit" name="sub" value="Convert" >
        
        <?php
        if(isset($_POST["sub"])) {
            if(isset($_POST["x"]) && is_numeric($_POST["x"])) {
                $angle_deg = $_POST["x"];
                $angle_rad = deg2rad($angle_deg);
                echo "<h3>Results:</h3>";
                echo "<i>Angle</i>: $angle_deg degrees<br>";
                echo "<i>Sine</i>: " . sin($angle_rad) . "<br>";
                echo "<i>Cosine</i>: " . cos($angle_rad) . "<br>";
                echo "<i>Tangent</i>: " . tan($angle_rad) . "<br></div>";
            } else {
                echo "Please enter a valid numeric angle.</div>";
            }
        }
        ?>
    </form>
</body>
</html>
