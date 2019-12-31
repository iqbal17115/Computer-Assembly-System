
<?php 
 session_start();

 $con = mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "computerassembly");

 $email = $_POST['email'];
 $pass = $_POST['pass'];

 $s= "SELECT * FROM alog WHERE email='$email' && pass='$pass'";
                                                                                                                                       
 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 $result1 = mysqli_fetch_array($result);

 if($num == 1){
 	$_SESSION['email']=$email;
 	$_SESSION['pass']=$pass;
 	
 	header('location:aHome.php');
 }else{
  echo "Username or password is wrong here!";
 }

 ?>