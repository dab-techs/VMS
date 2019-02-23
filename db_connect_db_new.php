<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "db_new";
	
	$link = @mysqli_connect($server, $user, $pass, $dbName);
	
	if(!$link)
		die("Error".@mysqli_error());
	

?>