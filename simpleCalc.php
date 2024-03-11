<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
<?php
$ans = ""; 
if(isset($_POST['sub'])) {
    $num1 = $_POST['fnum'];
    $num2 = $_POST['snum'];
    $op = $_POST['sub'];
    if($op == '+'){
        $ans = $num1 + $num2;
    } else if($op == '-') {
        $ans = $num1 - $num2;
    } else if($op == 'x') {
        $ans = $num1 * $num2;
    } else if($op == '/') {
        $ans = $num1 / $num2;
    }
} ?>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="firstNum">First Number: </label>
            <input type="text" name="fnum"> <br><br>            
            <label for="secNum">Second Number: </label>
            <input type="text" name="snum"> <br><br>         
            <input type="submit" name="sub" value="+">
            <input type="submit" name="sub" value="-">
            <input type="submit" name="sub" value="x">
            <input type="submit" name="sub" value="/"> <br><br>

            Result: <input type="text" name="ans" value="<?php echo $ans; ?>">
        </form>
    </div>
</body>
</html>