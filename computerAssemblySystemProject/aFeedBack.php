<?php 

  require_once 'aOption.php';
  require_once 'dbms.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User_Feedback</title>
	<style>
		body{
      font-family: sans-serif;
      background-image: url('images/fback.jpg');
      background-size: cover;
      }.box{
      background: rgba(25, 0, 0, .4);
      color: #fff;
      width: 600px;
      box-sizing: border-box;
      padding: 50px 30px;
      position: relative;
      left: auto;
      top: auto;
      overflow: hidden;
      align-content: center;
     }table, th, td{
 	  border: 1px solid black;
      text-align: center;
 	}
	</style>
</head>
<body>
   <center>
   	<div class="box">
   		<table>
		<thead>
			<tr>
				<th>User ID</th>
				<th>User Name</th>
				<th>Feedback</th>
			</tr>
		</thead>
		<tbody>
       <?php 

      $sql="SELECT uid, username, comments FROM feedback ORDER BY id DESC";

      $result=mysqli_query($con, $sql);

      while($result1=mysqli_fetch_array($result)){
      	?>
        
        <tr>
        	<td><?php echo $result1['uid']; ?></td>

        	<td><?php echo $result1['username']; ?></td>

        	<td><?php echo $result1['comments']; ?></td>
        </tr>

      <?php
        }
	 ?>
     </tbody>
	</table>
   </div>
   </center>
</body>
</html>