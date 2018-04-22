<?php
include("top.html");
include("adventure_shared.php");
?>
	<br>
	<p>Thanks for your submission!</p>
	<h2> Your preferences for your next adventure were to go to a country...</h2>
	<p>...in the following continents:</p>
	<?php
		print_continents();
	?>
	<p>...where they speak the following languages:</p>
	<?php
		print_languages();
	?>
	<p>...and has a <?php print_economy(); ?> economy</p>
	
    <h2>Countries that fit your preferences for your next adventure are:</h2>
	<?php
		print_countries();
	?>
	<form action="screenshot2.html" method="get">
	<input type="submit" value="Adventure Screenshot" />
	</form>
  </body>
</html>

<?php
function print_continents() {
	$continents = $_GET["continent"];
?>
<ul>
<?php
foreach($continents as $continent){
?>
<li><?= $continent ?></li>
<?php
}
?>
</ul>
<?php
}
function print_countries() {
	
}
function print_languages() {
	$languages = $_GET["languages"];
?>
<ul>
<?php
foreach($languages as $language){
?>
<li><?= $language ?></li>
<?php
}
?>
</ul>
<?php

}
function print_economy() {
	?>
	<?php
	if($_GET["development"]){
	$value = $_GET["development"];
	if ($value == "either"){
		$value = "any";
	echo $value;
	}	
	else
    echo $value;
	}
	
	?>
	<?php
	}

?>
