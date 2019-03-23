<?php 
	session_start();
	$con = mysqli_connect('localhost', 'root', 'Blake_007');
	if($con) {
		// echo "connection successful<br>";
	} else {
		// echo "no connection";
	}

	mysqli_select_db($con, 'register1');
	if(isset($_POST['login'])) {
		$username = $_POST['username'];
		// $phone = $_POST['phone'];
		$password = $_POST['password'];

		$query = "SELECT * FROM signin WHERE username = '$username' && password =
		 '$password'";

		$result = mysqli_query($con, $query);

		$num = mysqli_num_rows($result);
		if($num == 1) {

			$_SESSION['username'] = $username;
			header('location:../sideMenubar/home.php');
		} else {
			
			echo "<br>Login failed as wrong password entered.<br>";
			// header('location:login.php');
		}
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Mali:600|Roboto+Slab" rel="stylesheet">
</head>
<body>
	<form method="POST" action="login.php">
		<div id="container">
			<h1 id="title">Login</h1>
			<hr class="style-two">
			<br>
			<div class="form-group" class="label">	
				<label for="username">Username</label>
				<input type="username" id="username" class="form-control" name="username" placeholder="Username" required>
			</div>
			<br>
			<div class="form-group" class="label">	
				<label for="password">Password</label>
				<input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
			</div>
			<br>
			
			<div class="form-group-button">
				<button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
			</div>
			
		</div>	
		<br>
		<div class="forgot">
			<a href="../signup/register.php"><u>Register</u></a>
		</div>
	</form>
 

</body>
</html>