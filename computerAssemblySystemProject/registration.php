
<?php 

 session_start();
 $con = mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "computerassembly");
                                                     
 $fName = $_POST['fName']; 
 $lName = $_POST['lName']; 
 $gender = $_POST['gender']; 
 $cno = $_POST['cno']; 
 $email = $_POST['email']; 
 $city = $_POST['city']; 
 $address = $_POST['address'];
 $username = $_POST['username'];
 $password = $_POST['password'];

 $s= "SELECT * FROM ureg WHERE username='$username'";

 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);

 if($num == 1){
   echo "Username already Taken";
 }else{

   $reg = "INSERT INTO ureg(fName, lName, gender, cNo, email, city, address, username, password) VALUES('$fName', '$lName', '$gender', '$cno', '$email', '$city', '$address', '$username', '$password')";
   
   mysqli_query($con, $reg);
   echo "Registration Successfully done!";
 }

 ?>