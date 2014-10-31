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
		echo "Database has already exists.";
	}
			$query = $connection->query("CREATE TABLE  posts ("
				. "id int(11) NOT NULL AUTO_INCREMENT, " 
				. "title varchar(255) NOT NULL,"
				. "post text NOT NULL,"
				. "PRIMARY KEY (id))");
			//up to 11 values in integer

			if($query) {
				echo "Successfully created table :posts";


			}
			else{
				echo "$connection->error";
			}

	$connection->close();