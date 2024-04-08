<html>
 <body>
    <form action="" method="post">
	Enter Number :<input type="Number" name="fibo">
	<input type="submit" name="submit"><br>
	</form>
	
<?php  
     if(isset($_POST['submit']))
	 {
		 $f=$_POST['fibo'];
		 $f1=0;
		 $f2=1;
		 echo"Fibonacci series upto $f  : ";
		 for($i=0;$i<$f;$i++)
		 {
			 $sum=$f1+$f2;
			 echo "$f1  ";
			 $f1=$f2;
			 $f2=$sum;
		 }
	// 	$result = 1;
	// 	for($i=2; $i <= $fibo; $i++){
	// 		$result *= $i;
	// 	}

	// 	echo "$result";
	//  }
?>
</body>
</html>