<?php
	//looks for header.php
	require_once(__DIR__ . "/view/header.php");

	//if user is authenticated shows navigation
	//if (authenticateUser()) {

		//Looks for navigation.php
		//require_once(__DIR__ . "/view/navigation.php");
	//}

	//looks for read-posts.php
	require_once(__DIR__ . "/controller/create-db.php");
	
	//Creates Database
	//require_once(__DIR__ . "/controller/create-db.php");
	
	//Looks for footer.php
	require_once(__DIR__ . "/view/footer.php");
?>
