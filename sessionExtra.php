<?php 

session_start(); 

$_SESSION["Rollnumber"] = "11"; 
$_SESSION["Name"] = "Ajay"; 
echo "SESSION ARE SET";

?> 

<?php 



echo 'The Name of the student is :' . $_SESSION["Name"] . '<br>'; 
echo 'The Roll number of the student is :' . $_SESSION["Rollnumber"] . '<br>'; 

?> 

