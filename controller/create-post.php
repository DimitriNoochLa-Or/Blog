<?php
	require_once(__DIR__ . "/../model/database.php");
	// require_once is using the database .php
	// making a new connection for my sequel, now have access to variables host,username,password and database.
	$connection = new mysqli($host, $username, $password, $database);
    //filter_input prevents hacks
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);//sanitizing it to make sure its a string 
	//tells that it is what is posted
	$post= filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title </p>";
	echo "<p>Post: $post </p>";
//closing connection 
	$connection->close();