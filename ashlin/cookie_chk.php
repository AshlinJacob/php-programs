<html>
	<head>
		<title>Checking cookies with PHP</title>
	</head>
	<body>
		<?php
		if(isset($_COOKIE["name"]))
			echo "Welcome " .$_COOKIE["name"]."!<br/>";
		else
			echo "Sorry.....Not recognized" . "<br/>";
		?>
	</body>
</html>