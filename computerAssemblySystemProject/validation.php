<?php 

 session_start();
 $con = mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "computerassembly");

 $name = $_POST['user'];
 $pass = $_POST['pass'];

 $s= "SELECT * FROM ureg WHERE username='$name' && password='$pass'";
                                                                                                                                       
 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 $result1 = mysqli_fetch_array($result);

 if($num == 1){
 	$_SESSION['username']=$name;
 	$_SESSION['userId']=$result1['uid'];
 	
   header('location:uHome.php');
 }else{
   header('location:uLogin.php');
   echo "Username or password is wrong here!";
 }

 ?>