<html>
<body>
	<?php
	function getMaxElement($array)
	{
		$n=count($array);
		$max=$array[0];
		for($i=1;$i<$n;$i++)if($max<$array[$i])$max=$array[$i];
			return $max;
	}
	function getMinElement($array)
	{
		$n=count($array);
		$min=$array[0];
		for($i=1;$i<$n;$i++)if($min>$array[$i])$min=$array[$i];
			return $min;
	}
	$array=array(10,20,30,40,50);
	echo " The min element is : ";
	echo "\n";
	echo (getMinElement($array));
	echo "<br>";
	echo " The max element is : ";
	echo "\n";
	echo (getMaxElement($array));
	?>
</body>
</html>