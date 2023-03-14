<!DOCTYPE html>
<html>
<body>
	<?php
	$num=array("100","160","20","67");
	rsort($num);
	echo "Sorted numbers : ";
	echo "<br>";
	foreach($num as $n)
	{
		echo "$n<br>";
	}
	?>
</body>
</html>