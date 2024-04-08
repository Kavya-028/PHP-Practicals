<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information Form</title>
</head>
<body>
    <h2>Employee Information Form</h2>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="designation">Designation:</label><br>
        <input type="text" id="designation" name="designation" required><br><br>

        <label for="department">Department:</label><br>
        <input type="text" id="department" name="department" required><br><br>

        <label for="salary">Salary:</label><br>
        <input type="number" id="salary" name="salary" required><br><br>

        <input type="submit" name="sub" value="Submit">
    </form>
    <?php
    if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $designation = $_POST['designation'];
        $department = $_POST['department'];
        $salary = $_POST['salary'];

        echo "<h2>Employee Information Submitted Successfully</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Designation: $designation</p>";
        echo "<p>Department: $department</p>";
        echo "<p>Salary: $salary</p>";
    }
    ?>
</body>
</html>
