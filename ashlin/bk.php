<html>
	<body align=center>
		<style>
			h1
			{
				color: red;
			}
			h2
			{
				color:blue;
			}
		</style>
	<table align=center>
		<?php
		$servername="localhost";
		$username="root";
		$password="Albin3774";
		$dbname="book";
		$con=mysqli_connect($servername, $username, $password, $dbname);
		if(!$con)
		{
			die("Connection failed:". mysqli_connect_error());
		}
		$sql="CREATE TABLE Books(id VARCHAR(10) PRIMARY KEY,name VARCHAR(25) NOT NULL,author VARCHAR(25),publication VARCHAR(25))";
		if(mysqli_query($con,$sql))
		{
			echo"Table books is created successfully!!!!";
		}
		else
		{
			echo"Error updating record:". mysqli_error($con);
		}
		mysqli_close($con);
		?>
	</table>
	<form method="POST">
		<table align=center>
			<tr>
				<td>
					<b><h1>INSERT RECORD:<b></h1>
				</td>
			</tr>
			<tr>
				<td><b>BOOK ID:<b></td>
				<td><input type="text" name="id" required=""></td>
			</tr>
			<tr>
				<td><b>BOOK NAME:<b></td>
				<td><input type="text" name="bname" required=""></td>
			</tr>
			<tr>
				<td><b>AUTHOR NAME:<b></td>
				<td><input type="text" name="aname" required=""></td>
			</tr>
			<tr>
				<td><b>PUBLICATION:<b></td>
				<td><input type="text" name="pub" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="INSERT"></td>
			</tr>
		</table>
	</form>
	<?php
	if(isset($_POST["submit"]))
	{
		$con=mysqli_connect($servername, $username, $password, $dbname);
		if($con)
		{

			$id=$_POST['id'];
			$bname=$_POST['bname'];
			$aname=$_POST['aname'];
			$pub=$_POST['pub'];
			$ins="INSERT INTO Books VALUES('$id','$bname','$aname','$pub')";
			if(mysqli_query($con,$ins))
			{
				echo"New record is created!!!!";
			}
			$sql="select * from Books";
			$res=mysqli_query($con,$sql);
			if(mysqli_num_rows($res)>0)
			{
				echo"<table align=center border=1>";
				echo"<tr><td><b>Book ID<b></td><td><b>Book Name<b></td><td><b>Author<b></td><td><b>Publisher<b></td></tr>";
				echo"<h2><center>BOOK DETAILS</center></h2>";
				while($row=mysqli_fetch_assoc($res))
				{
					echo"<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['author']."</td><td>".$row['publication']."</td></tr>";
				}
				echo"</table>";
			}
			else
			{
				echo"RECORD NOT CREATED";
			}
			mysqli_close($con);
		}
	}
	?>
</body>
</html>
