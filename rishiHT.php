<?php
// Form submission handling
$message = ""; // Initialize an empty variable to hold the message
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $password = $_POST['password'];

    // Database connection
    $host = 'localhost';
    $user = 'root';
    $pass = ''; // Define the variable for the database password
    $dbname = 'rishidatabase';

    // Insert data into the database
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 

    // Echo the message here
    $message = "Connected to DataBase Successfully";

    // SQL query
    $sql = "INSERT INTO eventlogin  VALUES ('$username', '$mobile', '$email', '$country', '$password')";

    if ($conn->query($sql) == true) {
        $message .= " New record created successfully";
    } else {
        $message .= " Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .registration-container {
            background-color: #ffffff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 30px;
            width: 320px;
            text-align: center;
        }
        
        h2 {
            color: #333333;
        }
        
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <h2>Events Login</h2>
    <!-- Display the message here -->
    <p><?php echo $message; ?></p>
    <form id="registrationForm" method="POST" action="">
        <input type="text" id="username" name="username" placeholder="Username" required>
        <input type="text" id="mobile" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" title="Mobile number should be 10 digits" required>
        <input type="text" id="email" name="email" placeholder="Email Address" required>
        <select id="country" name="country" required>
            <option value="">Select Country</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
            <option value="india">India</option>
            <option value="canada">Canada</option>
            <!-- Add more countries as needed -->
        </select>
        <input type="password" id="password" name="password" placeholder="Password (6 digits)" pattern="\d{6}" title="Password must be 6 digits" required>
        <button type="submit" id="submitButton" name="submit">Submit</button>
    </form>
    <div id="notification" style="display: none;">Registration is confirmed. Welcome to our website!</div>
</div>

</body>
</html>
