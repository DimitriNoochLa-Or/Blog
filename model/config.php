<?php
	$path = "/blog/";
	//create a path variable so it takes the path to the blog fileS
	
	// variables for the host name ,username and password
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";
//created variable connection
	$connection = new Database($host, $unsername , $password, $database);