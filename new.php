<?php
if(isset($_POST['bs'])) {
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