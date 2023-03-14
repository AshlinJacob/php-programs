<html>
	<title>STRING OPERATIONS</title>
	<h2>String</h2>
	<body>
		<form action="stringop.php"method="post">
		Enter the string :
		<input type="text"name="str"><br><br> Enter the word to be searched :
		<input type="text"name="word"><br>
		<input type="submit"name="submit"value="submit">
		</form>
	</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$str=$_POST['str'];
	$wd=$_POST['word'];
	$n=strlen($str);
	$w=str_word_count($str);
	$s1=strrev($str);
	$p=strpos($str,$wd);
	$s3=strtoupper($str);
	$s4=strtolower($s3);echo"<br>String:".$str;
	echo "<br> <br> String Length : $n";
	echo "<br> <br> No: of words : $w";
	echo"<br><br>Reversed String: ".$s1;
	echo "<br><br>Position of'$wd'in the string'$str' :$p";
	echo"<br><br>String in uppercase : ".$s3;
	echo "<br><br>String in lowercase : ".$s4;
	echo"<form action='str.php'method='post'>";
	echo"<input type='hidden'name='string'value='$str'>";
	echo"<br><br><input type='submit'name='replace'value='Replace'>";
	echo"</form>";
}
?>





