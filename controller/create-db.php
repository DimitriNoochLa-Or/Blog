<?php
	require_once(__DIR__ . "/../model/config.php");
	//dir concatinates the directory to the file 
   
	
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("  //creates a table by query

	. "id int(11) NOT NULL AUTO_INCREMENT,"				// creates unique ids for the server and cannot be empty and handles the ids for us 
	. "title varchar(255) NOT NULL,"					// creates a collumn for a title with a max length of 255 characters and it cant be empty
	. "post text NOT NULL,"
	. "DateTime datetime NOT NULL,"								//creates a collumn for text that cannot be empty
	. "PRIMARY KEY(id))");							// allows the tables to be connected and is shown that it is connected by an id
	
	if ($query) {									// checks to see if this statement exists
		
		echo "<p>Successfully created table: posts</p>";   // lets you know that it succesfully created table:posts
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";			//lets you know that table:posts already exists
	}

	$query= $_SESSION["connection"]->query("CREATE TABLE users ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "username varchar(30) NOT NULL,"
		. "email varchar(50) NOT NULL,"
		. "password char(128) NOT NULL, "
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY (id))");

	if ($query) {									// checks to see if this statement exists
		
		echo "<p>Successfully created table: users</p>";   // lets you know that it succesfully created table:posts
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";			//lets you know that table:posts already exists
	}
