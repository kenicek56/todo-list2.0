<?php
	//helps us reach certain files with minimal work
	require_once(__DIR__ . "/../model/config.php");
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<div class="container">
	<p id="Login">
		Login
	</p>
	<p>
		Not a user yet!? Well register fool! <a href="register.php">register</a> or return <a href="index.php">home</a>.
	</p>
	<!-- form created so already created user can login -->
	<form method="post" action="<?php echo $path . "controller/login-user.php";?>">
		<!-- label for user to insertmthere username  -->
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