<?php
	require_once(__DIR__ . "/../model/config.php");

	//inputs username to database
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);

	//inputs password to database
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//creates unique id for your user
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	//encrypts password for us
	$hashedPassword = crypt($password, $salt);

	//query sends email, username, and encrypted password to database
	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");

	//if/else statement checks if created user or nah
	if ($query) {
		echo "Successfully created user: $username";
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}




?>