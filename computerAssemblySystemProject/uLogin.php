<?php 
  
  require_once('design.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User login and registration</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.uLogin{
			background-color: #956972;
			width: 400px;
			border: 2px solid #15F5EB;
			margin-top: 10px;
		}
	</style>
</head>
<body>

	<center>
		<div class="container">
		<div class="uLogin">
			<div class="login-box">
		<div class="row">
			<div class="col-md-12">
				<h2>Login here</h2>
				<form action="validation.php" method="POST">
					<div class="form-group">
						<label for="">Username</label>
						<input class="border border-success rounded-lg" type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input class="border border-success rounded-lg" type="password" name="pass" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-success btn-md">Login</button><br>	
					<span>Not a member?</span><a class="text-light text-decoration-none" href="uReg.php"><b>Register now!</b></a>

				</form>
			</div>

		</div>
		</div>
		</div>
	</div>
	</center>
</body>
</html>