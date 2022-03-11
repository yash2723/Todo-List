<?php 

	include 'config.php';

	session_start();

	error_reporting(0);

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM `to_do_list`.`users`";

		$result = mysqli_query($conn,$sql);
            
		$email_flag = 0;
		$pass_flag = 0;

		while ($row=mysqli_fetch_array($result)) {
			$col1 = $row['email'];
			$col2 = $row['password']; 

			if ($col1 == $email) {
				$email_flag = 1;
				if ($col2 == $password) {
					$pass_flag = 1;
					break;
				}
			}
		}

		if ($email_flag == 1 && $pass_flag == 1) {
			$_SESSION['mail'] = $_POST['email'];
			$_SESSION['t_name'] = $_POST['email'].'_task';
			header("location: ../User-Section/index.php");
		}
		else {

			if($email_flag == 0) {
				echo '<script>alert("Your Email address is not registered.")</script>';
			}
			else {
				echo '<script>alert("Password is Incorrect.")</script>';
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form</title>
</head>
<body>

	<div class="container">
		<form action="login.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			<p class="login-register-text" style="text-align : center">Go to <a href="../index.php">Home</a>.</p>
		</form>
	</div>
</body>
</html>