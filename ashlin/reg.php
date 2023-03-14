<html>
	<title>REGISTRATION FORM</title>
	<head>
		<style>
			h2
			{
				color:blue;
			}
			.error{color: red;}
		</style>
	</head>
	<body>
		<?php
		$nameErr=$emailErr=$genderErr=$websiteErr="";
		$name=$email=$gender=$website="";
		if($_SERVER["REQUEST_METHOD"]=="POST") 
		{
			if(empty($_POST["name"]))
			{
				$nameErr="Name is required!!!";
			}
			else
			{
				$name=test_input($_POST["name"]);
			}
			if(empty($_POST["email"]))
			{
				$emailErr="Email is required!!!";
			}
			else
			{
				$email=test_input($_POST["email"]);
				if(!filter_var($email,FILTER_VALIDATE_EMAIL))
				{
					$emailErr="Invalid email format";
				}
			}
			if(empty($_POST["website"]))
			{
				$website="";
			}
			else
			{
				$website=test_input($_POST["website"]);
			}
			if(empty($_POST["comment"]))
			{
				$comment="";
			}
			else
			{
				$comment=test_input($_POST["comment"]);
			}
			if(empty($_POST["gender"]))
			{
				$genderErr="Gender is required!!!";
			}
			else
			{
				$gender=test_input($_POST["gender"]);
			}
			echo"Registered Successfully!!!";
		};
		function test_input($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
	?>
	<h2><b>PHP USER REGISTRATION FORM<b></h2>
	<p><span class="error">**required field.</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td><b>NAME :<b></td>
				<td><input type="text" name="name">
				<span class="error">**<?php echo $nameErr;?></span>
				</td>
			</tr>
			<tr>
				<td><b>EMAIL ID :<b></td>
				<td><input type="text" name="email">
				<span class="error">**<?php echo $emailErr;?></span>
				</td>
			</tr>
			<tr>
				<td><b>WEBSITE :<b></td>
				<td><input type="text" name="website">
				<span class="error">**<?php echo $websiteErr;?></span>
				</td>
			</tr>
			<tr>
				<td><b>ADRRESS :<b></td>
				<td><textarea name="comment" rows="5" cols="40"></textarea>
				</td>
			</tr>
			<tr>
				<td><b>GENDER :<b></td>
				<td><input type="radio" name="gender" value="female">FEMALE
					<input type="radio" name="gender" value="male">MALE
				<span class="error">**<?php echo $genderErr;?></span>
				</td>
			</tr>
			<td>
				<input type="submit" name="submit" value="SUBMIT">
			</td>
		</table>
	</form>
	</body>
</html>