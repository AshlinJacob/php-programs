<html>
	<title>NUMERICAL ARRAY</title>
	<body>
		<form action="numarray.php" method=post>
			Enter the limit:
			<input type="text" name="limit"><br>
			<input type="submit" name="submit" value="submit"><br>
		</form>
	</body>
</html>
<?php
	if (isset($_POST['submit']))
	{
		$l=$_POST['limit'];
		$a=array();
		$sum=0;
		for($i=0;$i<$l;$i++)
		{
			$a[$i]=$i+1;
		}
		echo "Array elements are  <br>";
		for($i=0;$i<$l;$i++)
		{
			$sum= $sum+$a[$i];
			echo "$a[$i] <br>";
		}
		echo "Sum is $sum";
	}
?>
