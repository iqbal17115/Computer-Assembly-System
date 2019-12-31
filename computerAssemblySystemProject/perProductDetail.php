<?php 
   session_start();

   require_once 'uOption.php';
   require_once 'dbms.php';

   if(isset($_POST['add'])){

     echo $_POST['uid'];
     echo $_POST['pid'];
     echo $_POST['price'];
     echo $_POST['qntity'];

     $sql = "INSERT INTO addtocard(uId, pId, cost, pamount, confirm) VALUES('$_POST[uid]', '$_POST[pid]', '$_POST[price]', '$_POST[qntity]', '0')";

     mysqli_query($con, $sql);
     
   }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <style>    
      .css{
        border: 2px solid #BCB635;"
      }body{
        background-image: url('images/per.jpg');
        display: cover;
      }#sp{
         color: #030308;
      }
    </style>
 </head>
 <body>

 	<form action="" method="POST">
 	<?php 

      if(isset($_GET['per'])){
        $uid=$_SESSION['userId'];
        $sql = "SELECT * FROM pentry WHERE pid='$_GET[per]'";
        $res=mysqli_query($con, $sql);
        $res1 = mysqli_fetch_array($res);
        ?>
        	<div class="container">

        		    <div class="css">
                       <input style="border: 2px solid #BCB635;" type="number" name="uid" value="<?php echo $uid; ?>" hidden>

                    <input style="border: 2px solid #BCB635;" type="number" name="pid" value="<?php echo $_GET['per']; ?>" hidden>

                    <center>

                    <div class="card">
                      <center>
                        <img width="120px" height="100px" src="<?php echo $res1['pview']; ?>" alt="Product Image">
                      </center>
                    </div>

                    <h3><span style="color: #9C259E;">Product:</span> <span style="background-color: #E8A3E5; color: #330000;"><?php echo $res1['pname']; ?></span></h3>
                    <h3>Cost</h3>

                    <h4><?php echo $res1['pprice']." Taka"; ?><input style="border: 2px solid #BCB635;" type="number" name="price" value="<?php echo $res1['pprice']; ?>" hidden></h4>

                    <div class="form-group">
                        <textarea style="border: 2px solid #BCB635;" name="" id="" cols="30" rows="5" readonly><?php echo $res1['des']; ?></textarea>
                    <h3></h3>
                    <input style="border: 2px solid #BCB635;" type="number" name="qntity" required placeholder="Quantity">
                    <br><br>
                    <button class="btn btn-success btn-sm" name="add">Add to cart</button>
                    
                    <button class="btn btn-info btn-sm" name="buy">Buy now</button>
                    </div>
                </center>
                </form>      
                    </div>
        	</div>
        <?php
      }
 	 ?>

 </body>
 </html>