<?php 
session_start();
	if(!isset($_SESSION['name']))
	{
		header("location:logout.php");
	}
	$name=$_SESSION['name'];
?>
<html>
<head>
	<title>Profile of <?php echo $name;?></title>
</head>
<h1>Hello its me <?php echo $name;?></h1>
<h3>
	<a href="logout.php">Click here to logout</a>
</h3>
</html>