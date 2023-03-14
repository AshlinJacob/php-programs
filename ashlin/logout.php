<?php
	if(isset($_SESSION['name']))
	{
		unset($_SESSION['name']);
	}
	echo '<h2>YOU HAVE BEEN SUCCESSFULLY LOGOUT!!!</h2>';
?>