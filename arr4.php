<?php
function textToMorseCode($text) {
    $morseCode = [
        'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.', 'G' => '--.', 'H' => '....', 'I' => '..', 'J' => '.---',
        'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.', 'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-',
        'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-', 'Y' => '-.--', 'Z' => '--..',
        '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-', '5' => '.....', '6' => '-....', '7' => '--...', '8' => '---..', '9' => '----.',
        ' ' => '/'
    ];

    $text = strtoupper($text);
    $encodedMessage = '';

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (isset($morseCode[$char])) {
            $encodedMessage .= $morseCode[$char] . ' ';
        }
    }

    return $encodedMessage;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputMessage = $_POST["message"];
    $encodedMessage = textToMorseCode($inputMessage);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px; /* Adjusted padding */
            margin-bottom: 15px;
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
    <title>Morse Code Encoder</title>
</head>
<body>
    <div class="container">
        <h2>Morse Code Encoder</h2>
        <form method="post" action="">
            <label for="message">Enter your message:</label>
            <input type="text" id="message" name="message" required>
            <input type="submit" value="Encode">
        </form>
        <?php if (isset($encodedMessage)): ?>
            <p class="result">Encoded Morse Code: <?php echo $encodedMessage; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
