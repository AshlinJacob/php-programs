<html>
	<title>MULTIPLICATION TABLE</title>
	<body>
		<form action="multitable.php" method=post>
			Enter the number : 
			<input type="text" name="num">
			<br>
			<input type="submit" name="submit" value="Submit">
		</form>
		<table border="1">
			<tr>
				<?php
				if(isset($_POST['submit']))
				{
					$n=$_POST['num'];
					for($i=1;$i<=$n;$i++)
					{
						echo"<td>";
						for($j=1;$j<=10;$j++)
						{
							$a=$i*$j;
							echo"$i*$j=$a"."<br>";
						}
						echo"</td>";
					}
				}
				?>
			</tr>
		</table>
	</body>
</html>