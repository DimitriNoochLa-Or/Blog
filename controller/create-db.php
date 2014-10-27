<?php
	require_once(__DIR__ . "/../model/database.php");
// Open a new connection to the MySQL server
	$connection = new mysqli($host , $username, $password);

	if($connection->connect_error){
		// if connection doesnt work
		die("Error: " . $connection->connect_error);
	}
	$exists = $connection->select_db($database);

	$connection->close();