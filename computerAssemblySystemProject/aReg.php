<?php 
   require_once('design.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin login and registration</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .uReg{
            background-color: #956972;
            width: 350px;
            border: 2px solid #15F5EB;
            margin-top: 10px;
        }
    </style>
</head>
<body>

	<center>
       <div class="container">
        <div class="uReg">
           <div class="login-box">
        <div class="row">

            <div class="col-md-12">
                <h2>Register here</h2>
                <form action="aRegistration.php" method="POST">

                    <div class="form-group">
                     
                        <input type="text" name="name" class="form-control  border-success rounded-lg" placeholder="Name" required>
                    </div>
                    
                    <div class="form-group">
                     
                        <input type="text" name="email" class="form-control border-success rounded-lg" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                     
                        <input type="password" name="password" class="form-control border-success rounded-lg" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Login</button>

                </form>
            </div>

        </div>
        </div>      
        </div>
    </div>   
    </center>

</body>
</html>