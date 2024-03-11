<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTU Grade Calculator</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <table id="mainTable">
    <tr>
        <td><label for="sub1">Advanced Object Oriented Programming</label></td>
        <td><input type="number" name="sub1" min="0" max="100" required></td>
    </tr>
    <tr>
        <td><label for="sub2">Introduction to Software Engineering</label></td>
        <td><input type="number" name="sub2" min="0" max="100" required></td>
    </tr>
    <tr>
        <td><label for="sub3">Computer Networking</label></td>
        <td><input type="number" name="sub3" min="0" max="100" required></td>
    </tr>
    <tr>
        <td><label for="sub4">Intorduction to Web Development</label></td>
        <td><input type="number" name="sub4" min="0" max="100" required></td>
    </tr>
</table>
            <br>

        <input type="submit" name="calculate" value="Calculate Result">
    </form>

    <?php
        if (isset($_POST['calculate'])) {
            // Store marks directly
            $mark1 = $_POST['sub1']; 
            $mark2 = $_POST['sub2']; 
            $mark3 = $_POST['sub3']; 
            $mark4 = $_POST['sub4']; 

            $overallResult = "Congratulations! You have passed the Exam"; 
            if ($mark1 < 35 || $mark2 < 35 || $mark3 < 35 || $mark4 < 35) {
                $overallResult = "Needs Improvement";
            } 

           
            for ($i = 1; $i <= 4; $i++) {
                $mark = ${"mark" . $i};
                if ($mark >= 85) ${"grade" . $i} = "AA";
                elseif ($mark >= 75) ${"grade" . $i} = "AB";
                elseif ($mark >= 65) ${"grade" . $i} = "BB";
                elseif ($mark >= 55) ${"grade" . $i} = "BC";
                elseif ($mark >= 45) ${"grade" . $i} = "CC";
                elseif ($mark >= 40) ${"grade" . $i} = "CD";
                elseif ($mark >= 35) ${"grade" . $i} = "DD";
                else ${"grade" . $i} = "FF";
            }

            
            echo "<h3>Result</h3>";
            echo "<table>";
            echo "<tr><th>Subject</th><th>Marks</th><th>Grade</th></tr>";

            $subjects = array("Advanced Object Oriented Programming", "Introduction to Software Engineering", "Computer Networking", "Introduction to Web Development");
            for ($i = 0; $i < 4; $i++) {
                $mark = ${"mark" . ($i + 1)}; 
                $grade = ${"grade" . ($i + 1)}; 
                echo "<tr><td>" . $subjects[$i] . "</td><td>" . $mark . "</td><td>" . $grade ."</td></tr>";
            }

            echo "</table>"; 
            echo "<h3>Overall Result: $overallResult</h3>"; 
        } 
    ?>
</body>
</html>
