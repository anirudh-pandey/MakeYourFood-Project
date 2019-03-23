<?php 
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:login.php');
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 </head>
 <body>
 	<h1>Welcome <?php echo $_SESSION['username']; ?>	</h1>
 	<a href="logout.php"> Logout </a>
 </body>
 </html>