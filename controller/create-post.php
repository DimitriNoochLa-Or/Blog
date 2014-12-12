<?php
	require_once(__DIR__ . "/../model/config.php");
	// require_once is using the database .php
	// making a new connection for my sequel, now have access to variables host,username,password and database.
    //filter_input prevents hacks
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);//sanitizing it to make sure its a string 
	//tells that it is what is posted
	$post= filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	$date= new DateTime('today');
	$time= new DateTime('America/Los_Angeles');
//running query to check if its true or false.
	//query is able to insert information
	//refrences posts table
	//set is to set certain values for title 
	//using single qoute becuz we awant to know that it is converted to a string when posted
	//inset into is used to insert new records in a table
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title' , post = '$post' ");
//checks if we have atrue value for the query
	if($query){
		//echos statement below is it is true
		echo "<p>Successfully inserted post: $title</p>";
		echo "Posted on:" . $date->format("m/d/y") . " at " . $time->format("g:i");

	}
//if query is false
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
