<?php
	session_start();
		
	if(!isset($_SESSION['signedIn'])) {
		header('Location: http://mmaz.cba.pl/class7/signInPage.php');
		exit();
	}

	echo '
	<form action="http://mmaz.cba.pl/class7/signOut.php">
		<input type="submit" style="{
				float: right;
				border-radius: 1em; 
				border: 1px solid black;
				width: 10em;
				height: 3em;
				font-family: Arial, Helvetica, sans-serif;}
				:hover {background-color: lightgray;}"
		value="Wyloguj"/>
	</form>';
?>