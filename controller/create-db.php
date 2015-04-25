<?php

//Looks for config.php where we refactored the code
require_once(__DIR__ . "/../model/config.php");

//creates a database for the for registered users
	$query = $_SESSION["connection"]->query("CREATE TABLE users ("
		. "id int (11) NOT NULL AUTO_INCREMENT," 
		. "username varchar(30) NOT NULL,"
		. "password char(128) NOT NULL,"
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY (id))");

// if/else statement checks if we properly created database
	if ($query) {
		// echo "<p>Successfully created table: users</p>";
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
?>