<html>
	<title>STRING PALLINDROME</title>
	<body>
		<form action="palstr.php" method="POST">Enter a String:
		<input type="text"name="string">
		<br><br>
	<input type="submit"name="sub"value="OK">
		</form>
	</body>
</html>
<?php
if(isset($_POST['sub']))
{
	$s=$_POST['string'];
	$temp=$s;
	$a=strrev($s);
	if($a==$s)
	{
		echo"$s is a pallindrome";
	}
	else
	{
		echo"$s is not a pallindrome";
	}
}
?>
