<?php
	if(isset($_POST['sub']))
	{
		$con=mysqli_connect("localhost","root","Albin3774");
		if(!$con)
		{
			die("Error".mysqli_error($con));
		}
		mysqli_select_db($con,"registration");
		$n=$_POST['name'];
		$d=$_POST['dob'];
		$g=$_POST['gender'];
		$a=$_POST['address'];
		$p=$_POST['phone'];
		$q="INSERT INTO details(name,dob,gender,address,phone)VALUES('$n','$d','$g','$a','$p')";
		if(!mysqli_query($con,$q))
		{
			die("Error".mysqli_error($con));		
		}
		echo"Details registered successfully!!!";
		mysqli_close($con);
	}
?>