<?php 
	session_start();
	$con = mysqli_connect('localhost', 'root', 'Blake_007');
	if($con) {
		// echo "CONNECTION successful<br>";
	} else {
		// echo "no connection";
	}

	mysqli_select_db($con, 'register1');
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];

		$query = "SELECT * FROM signin WHERE username = '$username'";

		$result = mysqli_query($con, $query);

		$num = mysqli_num_rows($result);
		if($num == 1) {
			echo "Account with same username already exists.";
		} else {
			$qy = "INSERT INTO signin (username, phone, password) VALUES 
			('$username', '$phone', '$password')"; 
			if(mysqli_query($con, $qy)) {
				header('location:../login/login.php');
			} else {
				echo "ERROR";
			}
		}
	}


// 	if(!empty($_POST['name']) || !empty($_POST['tacoOrder'])){
// $query = "INSERT INTO orders (name, tacoOrder) VALUES ('$name', '$tacoOrder')";
// if(!mysqli_query($link,$query))
// {
//     die("DAMMIT");
// }
// else{ echo "Success"; }

// mysqli_close($link);

// }
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Mali:600|Roboto+Slab" rel="stylesheet">
</head>
<body>
	<form method = "post" action="register.php">
		<div id="container">
			<h1 id="title">Register</h1>
			<hr class="style-two">
			<br>
			<div class="form-group" class="label">	
				<label for="username">Username</label>
				<input type="username" id="username" class="form-control" name="username" placeholder="Username" required>
			</div>
			<br>
			<div class="form-group" class="label">	
				<label for="phone">Phone</label>
				<input type="tel" id="phone" class="form-control" name="phone" placeholder="Phone number" minlength="8" maxlength="10" required>
			</div>
			<br>
			<div class="form-group" class="label">	
				<label for="password">Password</label>
				<input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
			</div>
			<br>
			
			<div class="form-group-button">
				<button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
			</div>
			
		</div>	
		<br>
		<div class="forgot">
			<a href="../login/login.php"><u>Login</u></a>
		</div>
	</form>
 

</body>
</html>