
<div id="posts">
<?php
	require_once(__DIR__ . "/../model/config.php");

	//selects posts from database
	$query = "SELECT * FROM posts";

	//variable stores a connecton to $query variable
	$result = $_SESSION["connection"]->query($query);

	//div 'posts' hold our posts on our index page
	if($result){
		while ($row = mysqli_fetch_array($result)) {
			echo "<div class='posts'";
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<p>" . $row['DateTime'] . "</p>";
			echo "<br />";
			echo "<p>" . $row['post'] . "</h1>";
			echo "<br />";
			echo "</div>";
		}
	}

?>
</div>

<!-- div hold image on index page -->
<div id="aboutMe">
	<img src="pic1.jpg" alt="..." class="img-circle">
	<p>
		Biodiesel irony McSweeney's flannel butcher. 
		<br>Raw denim bitters Pinterest Vice PBR&B, DIY 8-bit High Life ethical Tumblr kitsch master cleanse typewriter umami blog. 
		<br>Try-hard 3 wolf moon American Apparel kogi. Kale chips crucifix PBR&B, typewriter fixie sustainable gluten-free Bushwick lo-fi selfies. 
		<br>PBR&B wolf XOXO fixie, Portland cred fanny pack cronut. Occupy cornhole pug tofu food truck, fashion axe small batch Marfa synth. 
		<br>Heirloom Neutra fixie letterpress, salvia listicle Brooklyn yr tousled shabby chic PBR&B health goth biodiesel 3 wolf moon.
	</p>
</div>

<div id="div2">
<img src="pic2.jpg" alt="..." class="img-circle">
	<p>
		Biodiesel irony McSweeney's flannel butcher. 
		<br>Raw denim bitters Pinterest Vice PBR&B, DIY 8-bit High Life ethical Tumblr kitsch master cleanse typewriter umami blog. 
		<br>Try-hard 3 wolf moon American Apparel kogi. Kale chips crucifix PBR&B, typewriter fixie sustainable gluten-free Bushwick lo-fi selfies. 
	</p>


</div>