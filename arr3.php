<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATRIX MULTIPLICATION</title>
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
    <form method="post" action="">
        <table>
            <?php
                $mat1 = array();
                $mat2 = array();

                // Display input textboxes for matrix 1
                echo '<tr>';
                for ($i = 0; $i < 3; $i++) {
                    echo '<td><input type="text" name="mat1['.$i.'][]" placeholder="Element '.$i.'"></td>';
                }
                echo '</tr>';

                // Display input textboxes for matrix 2
                echo '<tr>';
                for ($i = 0; $i < 3; $i++) {
                    echo '<td><input type="text" name="mat2['.$i.'][]" placeholder="Element '.$i.'"></td>';
                }
                echo '</tr>';
            ?>
            <tr>
                <td colspan="3"><input type="submit" value="Multiply"></td>
            </tr>
        </table>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve values from the form
            $mat1 = $_POST['mat1'];
            $mat2 = $_POST['mat2'];

            // Initialize the result matrix
            $res = array();

            multiply($mat1, $mat2, $res);

            echo "Result matrix is: <br>";
            echo "<pre>";
            // Display the result matrix
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    echo $res[$i][$j] . " ";
                }
                echo "<br>";
            }
            echo "</pre>";
        }

        function multiply($mat1, $mat2, &$res) 
        { 
            $N = 3; 
            for ($i = 0; $i < $N; $i++) { 
                for ($j = 0; $j < $N; $j++) { 
                    $res[$i][$j] = 0; 

                    for ($k = 0; $k < $N; $k++) 
                        $res[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j]; 
                } 
            } 
        }                 
    ?>
</body>
</html>
