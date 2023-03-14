<?php
	setcookie("name","Ashlin Jacob",time()+3600,"/","",0);
	setcookie("age","26",time()+3600,"/","",0);
?>
<html>
	<head>
		<title>Setting Cookies with PHP</title>
	</head>
	<body>
		<?php
			echo "Set Cookies!!";
		?>
	</body>
</html>