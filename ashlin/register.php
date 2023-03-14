<?php
	$con=mysqli_connect("localhost","root","Albin3774");
	if(!$con)
	{
		die("Error".mysqli_error($con));
	}
	$q="CREATE DATABASE registration";
	if(!mysqli_query($con,$q))
	{
		die("Error".mysqli_error($con));
	}
	echo"Database created successfully!!!";
	mysqli_close($con);
?>