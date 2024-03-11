<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimum Notes Calculation</title>
</head>
<body>

<?php
function min_notes($amount) {
    $denominations = [100, 50, 20, 10, 5, 2, 1];
    $notes_count = [];

    foreach ($denominations as $denomination) {
        $count = (int)($amount / $denomination);
        $amount %= $denomination;
        $notes_count[$denomination] = $count;
    }

    return $notes_count;
}

if (isset($_POST['amount'])) {
    $amount = isset($_POST["amount"]) ? (int)$_POST["amount"] : 0;
    $result = min_notes($amount);

    echo "<p>Amount: Rs. $amount</p>";
    echo "<ul>";
    foreach ($result as $denomination => $count) {
        if ($count > 0) {
            echo "<li>$count Notes of Rs. $denomination</li>";
        }
    }
    echo "</ul>";
}
?>

<form method="post" action="">
    <label for="amount">Enter Amount: Rs. </label>
    <input type="text" id="amount" name="amount" required>
    <button type="submit">Calculate</button>
</form>

</body>
</html>