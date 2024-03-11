<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculate</title>
    <?php
    $bs = $da = $hra = $ma = $gs = $ins = $pf = $de = $ns = '';

    if(isset($_POST['sub'])) {
        $bs = $_POST['bs'];
        $da = $bs * 0.50;
        $hra = $bs * 0.10;
        $ma = $bs * 0.04;
        $gs = $bs + $da + $hra + $ma;

        $ins = $gs * 0.07;
        $pf = $gs * 0.05;
        $de = $ins + $pf;

        $ns = $gs - $de;
    }
?>
</head>
<body>
    <form action="" method="post">
       Basic Salary <input type="text" name="bs" required value="<?php echo $bs ?>">
       <input type="submit" name="sub"> 
       <br><br>
       Dearness Allowance <input type="text" name="da" value="<?php echo $da ?>"> 
       <br><br>
       Gross Salary <input type="text" name="gs" value="<?php echo $gs ?>"> 
       <br><br>
       House Rent Allowance <input type="text" name="hra" value="<?php echo $hra ?>"> 
       <br><br>
       Medical Allowance <input type="text" name="ma" value="<?php echo $ma ?> "> 
       <br><br>
       Insurance <input type="text" name="ins" value="<?php echo $ins ?>"> 
       <br><br>
       Dedcution Salary <input type="text" name="de" value="<?php echo $de ?>"> 
       <br><br>
       Provident Fund(PF) <input type="text" name="pf" value="<?php echo $pf?>"> 
       <br><br>
       Net Salary <input type="text" value="<?php echo $ns ?>">
    </form>
</body>
</html>
