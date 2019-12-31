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
                <form action="registration.php" method="POST">

                    <div class="form-group">
                    
                        <input type="number" name="uid" class="form-control border-success rounded-lg" placeholder="User Id" required>
                    </div>

                    <div class="form-group">
                     
                        <input type="text" name="fName" class="form-control border-success rounded-lg" placeholder="First Name" required>
                    </div>

                    <div class="form-group">
                     
                        <input type="text" name="lName" class="form-control  border-success rounded-lg" placeholder="Last Name" required>
                    </div>
                    
                     <div class="form-group">
                     <select class="form-control" name="gender" id="" required>
                        <option value="">Gender</option>
                        <option value="male">Male</option>

                        <option value="female">Female</option>

                        <option value="other">Other</option>

                     </select>   
                     </div>

                    <div class="form-group">
                     
                        <input type="text" name="cno" class="form-control border-success rounded-lg" placeholder="Contact No" required>
                    </div>

                    <div class="form-group">
                     
                        <input type="text" name="email" class="form-control border-success rounded-lg" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                     
                        <input type="text" name="city" class="form-control border-success rounded-lg" placeholder="City" required>
                    </div>

                    <div class="form-group">
                     
                        <input type="text" name="address" class="form-control border-success rounded-lg" placeholder="Address" required>
                    </div>

                    <div class="form-group">
                     
                        <input type="text" name="username" class="form-control border-success rounded-lg" placeholder="Username" required>
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