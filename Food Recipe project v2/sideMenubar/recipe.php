<!-- //Retrieve name from query string and store to a local variable
	// print_r($_POST);
	// $name = $_POST;
	// if(isset($name["anirudh"]) == 1 || isset($name["devesh"])
	//  == 1 || isset($name["reyansh"]) == 1) {
	// 	echo "boy";
	// } else if(isset($name["aditi"]) == 1 || isset($name["neha"]) == 1) {
	// 	echo "girl";
	// } else {
	// 	echo "Other";
	// }
	// echo $names["anirudh"];
	// $recipe = [
	// 	'recipe name' => $_POST['name']
	// ];
	// echo $recipe['recipe name']; -->

 <!DOCTYPE html>
<html>
<head>
	<title>Recipe</title>
	<link rel="stylesheet" type="text/css" href="recipe.css">
</head>
<body>
<?php
	$name = $_POST;
	if(isset($name["cottage"])==1&&isset($name["tomato"])==1&&isset($name["onion"])==1&&isset($name["garlic"])==1&&isset($name["capsicum"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["fenugreek"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1) {
		echo "<div class='recipe'>";
		echo "Paneer Kadai";	
		echo "</div>";
	
	}
	echo "<br>";
	if(isset($name["bread"])==1&&isset($name["butter"])==1&&isset($name["cheese"])==1) {
		// echo "<div class='title'><h2>Cheese Sandwhich</h2></div>";
		echo "<div class='container'>";
		echo "<div class='recipe'>";
		echo " go to Recipe";
		echo "</div>";
		echo "<div class='ytLink'>";
		echo "<h1>Recipe:</h1> Cheese Sandwhich";
		echo "</div>";
		echo "</div>";
		// echo "<div></div>";
	}
	
	if(isset($name["bread"])==1&&isset($name["onion"])==1&&isset($name["tomato"])==1&&isset($name["potato"])==1&&isset($name["butter"])==1) {
		// echo "<div class='title'><h2>Vegetable Sandwhich</h2></div>";
		echo "<div class='container'>";
		echo "<div class='recipe'>";
		echo " go to Recipe";
		echo "</div>";
		echo "<div class='ytLink'>";
		echo "<h1>Recipe:</h1> Vegetable Sandwhich";
		echo "</div>";
		echo "</div>";
		
	}
	echo "<br>";
?>


<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="recipe.js"></script>
</body>
</html>