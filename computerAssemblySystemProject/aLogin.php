<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>	
     body{
     	font-family: sans-serif;
     	background-image: url('images/aLogin.jpg');
     	background-size: cover;
     }.box{
     	background: rgba(0, 0, 0, .5);
     	color: #fff;
        width: 250px;
        height: 250px;
        top: 20%;
        left: 35%;
        box-sizing: border-box;
        padding: 50px 30px;
        position: absolute;
     }
    </style>
</head>
<body>
	<center>
		<div class="box">
		<form action="aValidate.php" method="POST">
			<div class="form-group">
				<input class="form-control" type="email" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="pass" placeholder="Password">
			</div>
			<input class="btn btn-success" type="submit" name="submit" value="Submit">
		</form>
        <a class="text-light text-decoration-none" href="aReg.php"><b>Register now!</b></a>
	</div>
	</center>
</body>
</html>