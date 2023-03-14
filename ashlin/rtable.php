<?php
	$con=mysqli_connect("localhost","root","Albin3774");
	if(!$con)
	{
		die("Error".mysqli_error($con));
	}
	mysqli_select_db($con,"registration");
	$q="CREATE TABLE details(name VARCHAR(30),dob VARCHAR(10),gender VARCHAR(10),address VARCHAR(30),phone INT)";
	if(mysqli_query($con,$q))
	{
		echo"Table Created Successfully!!!";
	}
	else
	{
		die("Error".mysqli_error($con));
	}
	mysqli_close($con);
?>