<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morse Code Converter</title>
</head>
<body>

<?php
if (isset($_POST["input_string"])) {
    $string = isset($_POST["input_string"]) ? $_POST["input_string"] : "";
    $string_lower = strtolower($string);
    $assoc_array = array(
        "a"=>".-", "b"=>"-...", "c"=>"-.-.", "d"=>"-..", "e"=>".", "f"=>"..-.", "g"=>"--.", "h"=>"....", "i"=>"..", "j"=>".---", "k"=>"-.-", "l"=>".-..", "m"=>"--", "n"=>"-.", "o"=>"---",  "p"=>".--.", "q"=>"--.-", "r"=>".-.",  "s"=>"...",  "t"=>"-", "u"=>"..-",  "v"=>"...-", "w"=>".--", "x"=>"-..-", "y"=>"-.--", "z"=>"--..",  "0"=>"-----","1"=>".----", "2"=>"..---", "3"=>"...--", "4"=>"....-", "5"=>".....", "6"=>"-....", "7"=>"--...", "8"=>"---..",  "9"=>"----.","."=>".-.-.-" , ","=>"--..--","?"=>"..--..","/"=>"-..-."," "=>" "
    );

    echo "<p>Input String: $string</p>";
    echo "<p>Morse Code:</p><ul>";

    for ($i = 0; $i < strlen($string_lower); $i++) {
        foreach ($assoc_array as $letter => $code) {
            if ($letter == $string_lower[$i]) {
                echo "$code" . " ";
            }
        }
    }

    echo "</ul>";
}
?>

<form method="post" action="">
    <label for="input_string">Enter a String: </label>
    <input type="text" id="input_string" name="input_string" required>
    <button type="submit">Convert to Morse Code</button>
</form>

</body>
</html>
