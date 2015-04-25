<?php
	//looks for config.php
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);

	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//selects our salt password for our users tabkle where our user login 
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	//gets info and stores it to  $row;
	//checks if password type is the same as password in database
	//if password doesnt match wont let user login
	if($query->num_rows == 1) {
		$row = $query->fetch_array();

		if($row["password"] === crypt($password, $row["salt"])) {
			$_SESSION["authenticated"] = true;

			//echo "<p> Login Successful!</p>";
			header("Location: " .$path. "todo.php");
		}
		else{
			echo "<p> Invalid username and password</p>";
		}
	}
	else{
		echo "<p> Invalid username and password</p>";
	}