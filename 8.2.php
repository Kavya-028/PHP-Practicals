<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information Form</title>
    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>
    <h2>Employee Information Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Designation: <input type="text" name="designation"><br><br>
        Department: <input type="text" name="department"><br><br>
        Salary: <input type="text" name="salary"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $error = false;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $designation = $_POST['designation'];
        $department = $_POST['department'];
        $salary = $_POST['salary'];

        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "<p>Only letters and white space allowed in name</p><br>";
            $error = true; 
        }
        
        if (!preg_match("/^[a-zA-Z ]*$/", $department)) {
            echo "<p>Only letters and white spaces allowed in Department</p><<br>";
            $error = true; 
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Invalid email format</p><br>";
            $error = true; 
        }

        if (!is_numeric($salary)) {
            echo "<p>Salary must be a Number</p><br>";
            $error = true; 
        }

        if (!preg_match("/^[a-zA-Z ]*$/", $designation)) {
            echo "<p>Only letters and white spaces allowed in Designation<br>";
            $error = true;
        }

        if (!$error) { 
            echo "<h2>Employee Information Submitted Successfully</h2>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Designation: $designation</p>";
            echo "<p>Department: $department</p>";
            echo "<p>Salary: $salary</p>";
        }
    }
    ?>
</body>
</html>
