<?php
	//helps us reach certain files with minimal work
	require_once(__DIR__ . "/../model/config.php");

?>

<div class="container">
	<!-- creates header for page -->
	<p id="Register">
		Register
	</p>
	<p>
		Are you a member or nah? Login here if you are<a href="login.php">Login</a> or return <a href="index.php">home</a>.
	</p>
	<!-- Form created so user can register so they can be able to post, posts -->
	<!-- method send the info in form to our database; action creates the path to follow to get to create user -->
	<form method="post" action="<?php echo $path . "controller/create-user.php";?>">

	<!-- label for user to register there user name  -->
		<div id="username">
			<label for="username">Username: </label>
			<input type="text" name="username" id="box1" />
		</div>

	<!-- label for user to input their password; password appears as dots not as text -->
		<div id="password">
			<label for="password">Password: </label>
			<input type="password" name="password" id="box2" />
		</div>

	<!-- button to submit the info  -->
		<div id="button">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</form>
</div>