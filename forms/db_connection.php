<?php
	$host = "localhost";
	$username = "sirojiddin_user";
	$password = "123";
	$dbname = "sirojiddin";

	// Create database connection
	$con = new mysqli($host, $username, $password, $dbname);
	
	// Check connection
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}
?>