<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
    <form action="" method="post">
        <label for="fname">Name</label>
        <input type="text" name="name" required>
        <br><br>
        <label for="sname">Surname</label>
        <input type="text" name="sname" required>
        <br><br>
        <label for="mobileno.">Mobile Number</label>
        <input type="number" name="mno" required>
        <br><br>
        <label for="email">E-Mail</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="ernumber">E Number</label>
        <input type="number" name="ernumber" required>
        <br><br>
        <label for="branch">Branch</label>
        <input type="text" name="branch" required>
        <br><br>
        <input type="submit" name="submit">
        <br><br>
    </form>
    <?php
    if(isset($_POST['submit'])) {
    echo 'Your Name is: ' . $_POST['name'] .$_POST['sname'] . '<br>';
    echo 'Your Mobile Number is: ' . $_POST['mno'] . '<br>';
    echo 'Your Email is: ' . $_POST['email'] . '<br>';
    echo 'Your Enrollment Number is: ' . $_POST['ernumber'] . '<br>';
    echo 'You are Studying in ' . $_POST['branch'] . ' Branch';
    }
    ?>
</body>
</html>

