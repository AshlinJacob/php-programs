<html>
<head>
	<title>Session handling in PHP</title>
</head>
<body>
	<form action="session1.php" method="post" id="main_form">
		Enter the Name : 
		<input type="text" name="user_name" size="40"><br/>
		<input type="submit" value="Login"></form><br><br>
</body>
</html>
<?php
	if(isset($_POST['name']))
	{
		session_start();
		$_SESSION['name']=$_POST['user_name'];
		header("location:profile.php");
	}
?>
	