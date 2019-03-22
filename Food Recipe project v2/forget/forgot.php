<?php
	// session_start();
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require_once "functions.php";

	$con = mysqli_connect('localhost', 'root', 'Blake_007');
	if($con) {
		// echo "CONNECTION successful.<br>";
	} else {
		// echo "no connection";
	}
	mysqli_select_db($con, 'register');//db name register

	if(isset($_POST['submit'])) {

		$email = $_POST['email'];
		$query = "SELECT ID FROM signin WHERE email = '$email'";

		$result = mysqli_query($con, $query);

		$num = mysqli_num_rows($result);

		if($num > 0) {
			//Code to calculate our token
			$token = stringGenerator();

			$qy = "UPDATE signin SET token = '$token',
			tokenTime = date_add(NOW(), INTERVAL 5 MINUTE)
			WHERE email = '$email'";

			if(!mysqli_query($con, $qy)) {
				echo "ERROR occured.<br>";
				} else {
					// echo "check email<br>";
					
					require '../../vendor/autoload.php';

					$mail = new PHPMailer(true);                    

					try {
						$mail->SMTPDebug = 0;                

						$mail->isSMTP();                                 

						$mail->Host = 'smtp.gmail.com'; 
						$mail->SMTPAuth = true;         
						$mail->Username = 'johnnydoework123@gmail.com';                 
						$mail->Password = 'asdfghjkl_123';            
						$mail->SMTPSecure = 'tls';                    
						$mail->Port = 587;                            

						$mail->setFrom('johnnydoework123@gmail.com', 'Naruto');
						$mail->addAddress($email);     

						// message to be displayed	
						$body = "<h3>Hi,</h3>
								<p>In order to reset your password,Please click on the link below:</p><br>
								<a target='_blank' href='
								http://localhost/phpsandbox/Internship/ForgotPasswordPage/resetPassword.php?email=$email&token=$token
								'>
								http://localhost/phpsandbox/Internship/ForgotPasswordPage/resetPassword.php
								</a><br><br>


								Kind Regards,<br>
								Anonymous.";

						$mail->isHTML(true);                      
						$mail->Subject = 'Reset Password';
						$mail->Body    = $body;
						$mail->AltBody = strip_tags($body);

						$mail->send();
	    				echo 'Please Check Your Inbox.';
					} catch (Exception $e) {
						// echo 'Message could not be sent. Mailer Error: ',
						// $mail->ErrorInfo;
					}
				}
			} else {
				echo "Please Check your email address.(I think it is not registered)<br>";
			}
		} else {
		// echo "huh<br>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Forgot Password</title>
		<link rel="stylesheet" type="text/css" href="forgot.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Mali:600|Roboto+Slab" rel="stylesheet">
	</head>
	<body>
		<form method = "post" action = "forgot.php">
			<div id="container">
				<h1 id="title">Forgot Password</h1>
				<hr class="style-two">
				<br>
				<div class="form-group" class="label">
					<label for="email">E-mail id</label>
					<input type="email" class="form-control" name="email" placeholder="E-mail">
				</div>
				<br>
				<div class="form-group-button">
					<button type="submit" name="submit" class="btn btn-primary btn-lg">Reset Password</button>
				</div>
				
			</div>
		</form>
		
	</body>
</html>