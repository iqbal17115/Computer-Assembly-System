
<?php 

 session_start();
 $con = mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "computerassembly");
                                                     
 $name = $_POST['name']; 
 $email = $_POST['email']; 
 $pass = $_POST['password'];

 $s= "SELECT * FROM alog WHERE pass='$pass' AND email='$email'";

 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);

 if($num == 1){
   echo "Username already Taken";
 }else{

   $reg = "INSERT INTO alog(name, email, pass) VALUES('$name', '$email', '$pass')";
   
   mysqli_query($con, $reg);
   echo "Registration Successfully done!";
 }

 ?>