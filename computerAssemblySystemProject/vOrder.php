<?php 

   require_once 'aOption.php';
   require_once 'dbms.php';

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
 		body{
      font-family: sans-serif;
      background-image: url('images/vo.jpg');
      background-size: cover;
      }table, th, td{
 			border: 1px solid black;
 		}.box{
      background: rgba(255, 100, 100, .2);
      color: #fff;
      width: 600px;
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
    <div class="box">
      
      <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email Id</th>
          <th>Contact No</th>
          <th>Address</th>
          <th>Order List</th>
          <th>Total Cost</th>
        </tr>
      </thead>
      <tbody>
        <?php 
             
             $sql = "SELECT confirm.uid AS uid, confirm.cno AS cno, confirm.pList AS pl, confirm.tcost AS tc, ureg.fName AS f, ureg.lName AS l, ureg.email AS email, ureg.address AS address FROM confirm, ureg WHERE ureg.uid IN(SELECT uid FROM confirm)";
              $res=mysqli_query($con, $sql);
              while($res1=mysqli_fetch_array($res)){
              ?>

                <tr>

                  <td><?php echo $res1['uid']; ?></td>
                  <td><?php echo $res1['f']." ".$res1['l']; ?></td>
                  <td><?php echo $res1['email']; ?></td>
                  <td><?php echo $res1['cno']; ?></td>
                  <td><?php echo $res1['address']; ?></td>
                  <td><?php echo $res1['pl']; ?></td>
                  <td><?php echo $res1['tc']; ?></td>

                </tr>

                <?php
              }
         ?>
      </tbody>
      <tfoot>
        
      </tfoot>
    </table>
   
    </div>
     </center>

 </body>
 </html>