<?php 

   require_once 'aOption.php';
   require_once 'dbms.php';

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>

 	<script>
$(document).ready(function(){
  $("#sr").click(function(){
    $("thead").removeClass(".hde");
  });
});
</script>
 	<style>
 		body{
      font-family: sans-serif;
      background-image: url('images/vcu.jpg');
        background-size: cover;
      }table, th, td{
 			border: 1px solid black;
 		}
 		.hde{
 			 display: none;     
 		}.box1{
      background: rgba(255, 255, 255, .4);
      color: #fff;
      width: 500px;
      box-sizing: border-box;
      padding: 50px 30px;
      position: relative;
      left: auto;
      top: auto;
      overflow: hidden;
      align-content: center;
     }.box2{
      background: rgba(20, 0, 100, .4);
      color: #fff;
      width: 500px;
      box-sizing: border-box;
      padding: 50px 30px;
      position: relative;
      left: auto;
      top: auto;
      overflow: hidden;
      align-content: center;
     }td, th{
      text-align: center;
     }
 	</style>
 	
    
 </head>
 <body>

 	  <center>
      <div class="box1">
      <form action="" method="POST">

      <div class="form-group">
        <input style="width: 60%" class="form-control" type="text" placeholder="Name" name="sName">
      </div>
      <input class="btn btn-outline-danger" id="sr" type="submit" name="search" value="Search">
      
    </form>
    </div>
    </center>
      
      <center>
        
        <div class="box2">
        <table>
        
        <thead class="hde">
              
             

                 <tr>

        <th>User Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>

        </tr>

           
        </thead>
        <tbody>
          <?php 

         if(isset($_POST['search'])){
          
           $sql="SELECT * FROM ureg
         WHERE fName LIKE '$_POST[sName]%' OR lName LIKE '$_POST[sName]%'";
           $res=mysqli_query($con, $sql);
           
           while($res1=mysqli_fetch_array($res)){
           ?>
            <tr>
                <td><?php echo $res1['uid']; ?></td>
                <td><?php echo $res1['fName']." ".$res1['lName']; ?></td>
                <td><?php echo $res1['address']; ?></td>
                <td><?php echo $res1['cNo']; ?></td>
                <td><?php echo $res1['email']; ?></td>
              </tr>
            <?php
           }
         }
     ?>
        </tbody>

      </table>
     
    <table>
      <thead>
        
        <tr>

        <th>User Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>

        </tr>
      </thead>
      <tbody>
        <?php 

        $sql = "SELECT * FROM ureg";
        $result = mysqli_query($con, $sql);
        while($result1 = mysqli_fetch_array($result)){
            ?>
              <tr>
                <td><?php echo $result1['uid']; ?></td>
                <td><?php echo $result1['fName']." ".$result1['lName']; ?></td>
                <td><?php echo $result1['address']; ?></td>
                <td><?php echo $result1['cNo']; ?></td>
                <td><?php echo $result1['email']; ?></td>
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