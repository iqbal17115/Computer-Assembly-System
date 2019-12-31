<?php 
  
  require_once('design.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Computer Assembly System Project</title>
	
	<style>
		#adminUser{
			background-color: #956972;
			width: 300px;
			height: 120px;
			border: 2px solid #15F5EB;
			margin-top: 10px;
		}#adminUser > a > img{
			width: 100px;
			height: 80px;
			margin-top: 10px;
		}#bdy{
			background-color: #E3F31C;
    
            -webkit-transition: background-color 1000ms linear;
            -moz-transition: background-color 1000ms linear;
            -o-transition: background-color 1000ms linear;
            -ms-transition: background-color 1000ms linear;
            transition: background-color 1000ms linear;
		}
	</style>
</head>
<body id="bdy">
	 
     <center>
     	<div id="adminUser">

     		<a href="aLogin.php"><img  src="images/admin.png" alt=""></a>
     	    <a href="uLogin.php"><img  src="images/user.jpg" alt=""></a>

     	</div>
     </center>
</body>
</html>