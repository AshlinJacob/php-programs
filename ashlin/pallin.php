<html>
	<head>
		<title>PALLINDROME</title>
	</head>
	<body>
		<form  action="<?php echo $_SERVER['PHP_SELF']?>" method = post>
			Enter the limit :
			<input type="text" name ="limit"><br>
			<input type="submit" name="submit" value="submit">
		</form>
		<?php
			if (isset($_POST['submit']))
			{
				$li= $_POST['limit'];
				for($j=1;$j<=$li;$j++)
				{
					$s=0;
					for($i=$j;$i>0;$i=intval($i/10))
					{
						$d=$i%10;
						$s=($s*10)+$d;
					}
					if($j==$s)
					{
						echo "$s<br>";
					}
				}
			}
		?>
	</body>
</html>


