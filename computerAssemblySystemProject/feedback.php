<?php 
   session_start();
   require_once 'uOption.php';
   require_once 'dbms.php';
   if(isset($_POST['submit'])){
     echo $_SESSION['userId'];
     echo $_SESSION['username'];
     $sql = "INSERT INTO feedback(uid, username, comments) VALUES('$_SESSION[userId]', '$_SESSION[username]', '$_POST[cmnt]')";
     mysqli_query($con, $sql);
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body {
    background-image: url("images/f.jpg");
    background-size: cover;
    }#txt{
    	border: 2px solid #27E6E9;
        padding: 10px;
        box-shadow: 3px 7px 6px 7px #8F58A2;
    }
	</style>
</head>
<body>
	<center>
		<h3><u>Your Feedback</u></h3>
	<form action="" method="POST">
		<textarea name="cmnt" id="txt" cols="30" rows="10"></textarea>
		<br><br>
		<input class="btn btn-info" type="submit" name="submit" value="Submit">
	</form>
	</center>
</body>
</html>