<?php 
//oop ( object orieneted programming)
// Classes are used for representing data as objects 
//this replaces all the functions used a couple times
//the class database contains attributes
//using a class allows all the variables and code to be called my one class
//without using a class there is a bunch of code that coders can mess with at will
//to sum up we use classes to replace overused functions allowing the code to look 
//more organized and understandable
class Database{
	private $connection;
	//private can  means we can only access this variable here not in other files
	private $host;
	private $username;
	private $password;
	private $database;
	//these variable can only be access thru this class 
//public so we can access it thru all files
	//The constructor is called on an object after it has been created
	//__construct is a substitution for the TheActualFunctionName
	public function __construct($host, $username , $password ,$database) {
		$this->host = $host;//allows access to the private variables
		$this->username = $username;//assigning the global variable to $this->"variable name"
		$this->password = $password;
		$this->database = $database;
	}
//a function for replacing connection
	public function openConnection() {
		$this->connection = new mysqli($this->host , $this->username, $this->password,$this->database);
		//new connection for my sqli object and
		// its checking if it has a connection error or not
		if($this->connection->connect_error){
			// if connection doesnt work the connection dies
			die("Error: " . $this->connection->connect_error);
	 	}
	}
// a function for replacing close connection
	public function closeConnection() {
		//using if to check we have established a working connection or not
		//isset checks if the variable is set or not and it is checking if 
		//there is something present in the variable
		if(isset($this->connection)){
			$this->openConnection();//open connection

			$query = $this->connection->query($string);
			//execute the query in database

			$this->openConnection();//close connection

			return $query;//returns if it is true or false

		}

	}
}
//replacing code for query
	public function query($string) {
		$this->openConnection();
	}
}
