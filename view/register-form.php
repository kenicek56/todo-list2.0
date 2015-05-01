<?php
	//helps us reach certain files with minimal work
	require_once(__DIR__ . "/../model/config.php");

?>
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
	<!-- register-->
	<div id="loginHeader">
	 <h1> 
		Register
		<h5>
		<p>Are you a member or nah? <a href="login.php">Login</a> if you are or return <a href="index.php">home</a>.</p>
	</h5>
	</h1>
	</div>
	<!-- Form created so user can register so they can be able to post, posts -->
	<!-- method send the info in form to our database; action creates the path to follow to get to create user -->
	<form method="post" action="<?php echo $path . "controller/create-user.php";?>">

	<!-- label for user to register there user name  -->
		<div id="loginBody">
			<form>
			  <input type="text" name="username" placeholder="Username" />
		      <!-- label for user to input their password; password appears as dots not as text -->
		      <input type="password" name="password" placeholder="Password"/>
            </form>
		    <!-- button to submit the info  -->
		<button id="loginBtn">Register</button>
		
		</div>
	</form>
</div>