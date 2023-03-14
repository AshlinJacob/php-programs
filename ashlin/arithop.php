<html>
	<title>ARITHMETIC OPERATIONS</title>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method = post>
			ENTER THE 1st NUMBER:
			<input type="text" name ="num1"><br><br>
			ENTER THE 2nd NUMBER:
			<input type="text" name ="num2"><br><br>
			<input type="submit" name="submit" value="submit">
		</form>
		<?php
			function arith($a,$b)
			{
				$s=$a+$b;
				$d=$a-$b;
				$p=$a*$b;
				$q=$a/$b;
				$r=$a%$b;
				echo "Sum = $s<br>";
				echo "Difference = $d<br>";
				echo "Product = $p<br>";
				echo "Quotient = $q<br>";
				echo "Remainder = $r<br>";
			}
			if (isset($_POST['submit']))
			{
				$a=$_POST['num1'];
				$b=$_POST['num2'];
				arith($a,$b);
			}
		?>
	</body>
</html>
