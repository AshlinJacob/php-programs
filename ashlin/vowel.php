<html>
	<title>VOWEL OR DIGIT</title>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method=post>
			Enter the character :
			<input type="text" name="val"><br>
			<input type="submit" name="submit" value="SUBMIT">
		</form>
		<?php
		if(isset($_POST['submit']))
		{
			$a=$_POST['val'];
			if($a=='a'||$a=='e'||$a=='i'||$a=='o'||$a=='u')
			{
				echo $a."&nbspis a vowel!!";
			}
			elseif($a=='1'||$a=='2'||$a=='3'||$a=='4'||$a=='5'||$a=='6'||$a=='7'||$a=='8'||$a=='9'||$a=='0') 
			{
				echo $a."&nbspis a digit!!";
			}
			else
			{
				echo $a."&nbspis not a digit nor vowel!!";
			}
		}
		?>
	</body>
</html>