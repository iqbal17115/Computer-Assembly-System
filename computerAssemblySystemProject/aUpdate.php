<?php 
   require_once 'aOption.php';
   require_once 'dbms.php';
   if(isset($_POST['update'])){
      $sql1 = "UPDATE pentry SET pname='$_POST[name]', pprice='$_POST[price]', des='$_POST[des]', company='$_POST[company]', category='$_POST[category]'";
      mysqli_query($con, $sql1);
   }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
 		table, th, td{
 			border: 1px solid black;
 		}
 	</style>
 </head>
 <body>
 	<?php 

      if(isset($_GET['update'])){
         
          $sql = "SELECT * FROM pentry WHERE pid='$_GET[update]'";
          $result = mysqli_query($con, $sql);
          $result1 = mysqli_fetch_array($result);
          ?>
          <center>
             <form action="" method="POST">
             	   	<table>
          	<tr>
          		<td colspan="2">Update Details</td>
          	</tr>
          	<tr>
          		<td><h3>Product Id</h3></td>
          		<td><input type="number" value="<?php echo $result1['pid']; ?>" name="id" readonly></td>
          	</tr>

          	<tr>
          		<td><h3>Product Name</h3></td>
          		<td><input type="text" value="<?php echo $result1['pname']; ?>" name="name"></td>
          	</tr>

          	<tr>
          		<td><h3>Product view</h3></td>
          		<td><input type="number" value="<?php echo $result1['pid']; ?>" name="view"></td>
          	</tr>

          	<tr>
          		<td><h3>Product price</h3></td>
          		<td><input type="number" value="<?php echo $result1['pprice']; ?>" name="price"></td>
          	</tr>

          	<tr>
          		<td><h3>Overview</h3></td>
          		<td><input type="text" value="<?php echo $result1['des']; ?>" name="des"></td>
          	</tr>

          	<tr>
          		<td><h3>Company</h3></td>
          		<td><input type="text" value="<?php echo $result1['company']; ?>" name="company"></td>
          	</tr>

          	<tr>
          		<td><h3>Category</h3></td>
          		<td><input type="text" value="<?php echo $result1['category']; ?>" name="category"></td>
          	</tr>
            
            <tr>
            	<td colspan="2"><input type="submit" name="update" value="Update"></td>
            </tr>

          </table>
             </form>
          </center>
          <?php
      }
 	 ?>
 </body>
 </html>