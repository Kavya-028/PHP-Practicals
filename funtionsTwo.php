<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Lowercase</title>
</head>
<body>
<form method="post" action="">
    <label for="userInput">Enter a string: </label>
    <input type="text" id="userInput" name="userInput" required>
    <button type="submit">Check Lowercase</button>
</form>
<?php
if (isset($_POST['userInput'])) {
    $userInput = isset($_POST["userInput"]) ? $_POST["userInput"] : "";

    echo "Entered String: $userInput";
    echo "<br>";
    if ($userInput === strtolower($userInput)) {
        echo "The string '$userInput' is lowercase.";
    } else {
        echo "The string '$userInput' is not lowercase.<br>";
    }
}
?>
    <?php
    $string = "Hello, World!";
    $reversedString = strrev($string);
    echo "<br><br>";
    echo "Original String: $string<br>";
    echo "Reversed String: $reversedString <br>";
?>

<?php
    $string = "   This is a string with spaces.   ";
    $trimmedString = trim($string);
    echo "<br>";
    echo "Original String: $string<br>";
    echo "String without Spaces: $trimmedString<br><br>";
?>

<?php
    $string = "PHP is a Programming Language";
    $wordToReplace = "Programming";
    $replacement = "Server Side Scripting";
    $updatedString = str_replace($wordToReplace, $replacement, $string);

    echo "Original String: $string<br>";
    echo "Updated String: $updatedString";
?>



</body>
</html>
