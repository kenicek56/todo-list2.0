<?php
	//helps us reach certain files with minimal work
	require_once(__DIR__ . "/../model/config.php");
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<div id="nav">
  <ul class="nav-menu clearfix unstyled">
         <li><a href="login.php" class="three-d">
      Login
      <span class="three-d-box"><span class="front">Login</span><span class="back">Login</span></span>
         </a></li>
         <li><a href="register.php" class="three-d">
      Register
      <span class="three-d-box"><span class="front">Register</span><span class="back">Register</span></span>
    </a></li>
    <li><a href="index.php" class="three-d">
      Home
      <span class="three-d-box"><span class="front">Home</span><span class="back">Home</span></span>
         </a></li>
         </ul>
</div>
<div id="loginWrap">
	<div id="loginHeader">
	 <h1> 
		Login 
		<h5>
		<p>Not a user!? Well <a href="register.php">register</a> fool!  or return <a href="index.php">home</a>.</p>
	</h5>
	</h1>
	
	</div>
<!-- form created so already created user can login -->
	<form method="post" action="<?php echo $path . "controller/login-user.php";?>">
		<!-- label for user to insertmthere username  -->
		<div id="loginBody">
			<form>
			  <input type="text" name="username" placeholder="Username" />
		      <!-- label for user to input their password; password appears as dots not as text -->
		      <input type="password" name="password" placeholder="Password"/>
            </form>
		    <!-- button to submit the info  -->
		<button id="loginBtn">Sign In</button>
		
		</div>

	</form>
</div>
