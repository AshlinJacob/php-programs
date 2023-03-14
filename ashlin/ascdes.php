<html>
	<title>ASCENDING & DESCENDING</title>
	<body>
		<?php
		$a=array(22,80,54,43,65,7,75);
		$len=count($a);
		echo"Array Elements are	: <br><br>";
		for($i=0;$i<$len;$i++)
		{
			echo $a[$i];
			echo"<br>";
		}
		rsort($a);
		echo"<br>";
		echo"Array in descending order :"."<br><br>";
		for($i=0;$i<$len;$i++)
		{
			echo $a[$i];echo"<br>";
		}
		sort($a);
		echo"<br>";
		echo"Array in Ascending order :"."<br><br>";
		for($i=0;$i<$len;$i++)
		{
			echo $a[$i];echo"<br>";
		}
		?>
	</body>
</html>



