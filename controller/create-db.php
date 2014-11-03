<?php
	require_once(__DIR__ . "/../model/database.php");
	//dir concatinates the directory to the file 
// Open a new connection to the MySQL server
	$connection = new mysqli($host , $username, $password);
	// when calling new it calls the mysql constructor

	if($connection->connect_error){
		// if connection doesnt work the connection dies
		die("Error: " . $connection->connect_error);
	}
	// selects data base and tells whether its exists or not
	$exists = $connection->select_db($database);
	// checking if we could connect to database
	// with ! it tells it doesnt exist
	// ! inverts true to false and other way around
	if(!$exists){
	// querys are questions or commands we send to the database
		//creates database blog_db
		$query = $connection->query("CREATE DATABASE $database");
		if($query){
			echo "Successfully created a database: " . $database;
			//outputs that query is true

		}
	}
	//else statement is only executed if the database already exist
	else {
		echo "<p>Database has already exists.</p>";
	}
	
	$query = $connection->query("CREATE TABLE posts ("  //creates a table by query

	. "id int(11) NOT NULL AUTO_INCREMENT,"				// creates unique ids for the server and cannot be empty and handles the ids for us 
	. "title varchar(255) NOT NULL,"					// creates a collumn for a title with a max length of 255 characters and it cant be empty
	. "post text NOT NULL,"								//creates a collumn for text that cannot be empty
	. "PRIMARY KEY(id))");							// allows the tables to be connected and is shown that it is connected by an id
	
	if ($query) {									// checks to see if this statement exists
		
		echo "<p>Successfully created table: posts</p>";   // lets you know that it succesfully created table:posts
	}
	else{
		echo "<p>$connection->error</p>";			//lets you know that table:posts already exists
	}
	$connection->close();							//closes connection