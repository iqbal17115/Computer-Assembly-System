   <?php 
   session_start();
   require_once 'uOption.php';
   require_once 'dbms.php';
   if(isset($_POST['submit'])){
      $_POST['pId'];
      $_SESSION['userId'];
      $sql = "DELETE FROM addtocard WHERE pid='$_POST[pId]' AND uid='$_SESSION[userId]' AND confirm='0'";
      mysqli_query($con, $sql);
   }
   if(isset($_POST['sbt'])){
    $sql = "SELECT DISTINCT pname FROM pentry WHERE pentry.pid IN(SELECT pid FROM addtocard)";
    $res= mysqli_query($con, $sql);
    $apname="";
    while($res1 = mysqli_fetch_array($res)){
       $apname .= $res1['pname'].", ";
    }
    $sql1 = "INSERT INTO confirm(uid, cname, cno, cvvno, pList, tcost) VALUES('$_SESSION[userId]', '$_POST[cName]', '$_POST[cNo]', '$_POST[cvNo]', '$apname', '$_POST[tCost]')";
    mysqli_query($con, $sql1);
    
    $sql2="UPDATE addtocard SET confirm='1' WHERE uid='$_SESSION[userId]'";
    mysqli_query($con, $sql2);
   }
   ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
    #id{
      display: none;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#cl").click(function(){
        $("#id").show();
      });
    });

  </script>
 	<style>
 		table, th, td{
 			border: 1px solid black;
 		}body {
    background-image: url("images/vC.jpg");
    background-size: cover;
    }#sp{
      color: #9CF0F4;
    }#sp1{
      color: #E927E6;
    }#cost{
      color: #E49B32;
    }#cost1{
      color: #3027E9;
    }
 	</style>
 </head>
 <body>
 	<center>
 		<form action="" method="POST">
 		<table class="table table-dark table-striped table-sm table-hover" style="width: 70%">
 		<thead class="thead-light">
 			<tr>
 				<th>User Id</th>
 				<th>Product Id</th>
 				<th>Name</th>
 				<th>Price</th>
 				<th>Quantity</th>
 				<th>Price</th>
 			</tr>
 		</thead>
        <tbody>
        	<?php 
       $_SESSION['userId'];
       $sql = "SELECT uid, pid, cost, pamount, cost*pamount AS total FROM addtocard WHERE uId='$_SESSION[userId]' AND confirm='0'";
       $res = mysqli_query($con, $sql);
       while($res1=mysqli_fetch_array($res)){
       ?>
       
        <tr>
        	<td><?php echo $res1['uid']; ?></td>
        	<td><?php echo $res1['pid']; ?></td>
        	<td></td>
        	<td><?php echo $res1['cost']; ?></td>
        	<td><?php echo $res1['pamount']; ?></td>
        	<td><?php echo $res1['total']; ?></td>
          
        </tr>
        
       	<?php
       }
 	 ?>
        </tbody>
        <tfoot>
        	<tr>
            <td colspan="3" align="right">
              <span id="sp" ><b>Total cost:</b></span>
            </td>
           <td colspan="3">
             <?php 
                  $sql = "SELECT sum(cost*pamount) AS totalCost FROM addtocard WHERE uid='$_SESSION[userId]' AND confirm='0'";
                  $res = mysqli_query($con, $sql);
                  $res1 = mysqli_fetch_array($res);
                  ?>
                  <span id="cost">  
                  <?php
                  echo $res1['totalCost']." Tk";
                ?>
                </span>
           </td> 
          </tr>
        	<tr>
        		<td colspan="6">
        			<center>
        				<span id="sp"><b>Product Id:</b></span>
        			<select class="w-25" name="pId" id="">
        				<?php 	
                          $sql = "SELECT pid FROM addtocard WHERE uid='$_SESSION[userId]' AND confirm='0'";
       $res = mysqli_query($con, $sql);
       while($res1=mysqli_fetch_array($res)){
        				 ?>
       <option value="<?php echo $res1['pid']; ?>">
                           	<?php 
                   echo $res1['pid'];
                           	 ?>
       </option>            
        				 <?php
        				}
        				 ?>
        			</select>
        			<input class="btn btn-danger btn-sm" type="submit" name="submit" value="Delete">
        			</center>
        		</td>
        	</tr>
        </tfoot>     
 	</table>
 	</form>
        <br>
        
 	</center>

    <br>
    <center>
      <button id="cl" class="btn btn-success">Confirm</button>
    </center>

    <center>
    	<form action="" method="POST">
    		<table id="id" class="table table-secondary table-striped table-sm" style="width: 70%">
    			
    			<tbody>
    				<tr>
    					<td>Name on Card</td>
    					<td><input type="text" name="cName" required></td>
    				</tr>
    				<tr>
    					<td>Credit/Debit card No</td>
    					<td><input type="number" name="cNo" required></td>
    				</tr>
    				<tr>
    					<td>CVV No</td>
    					<td><input type="number" name="cvNo" required></td>
    				</tr>
    				
    			</tbody>

    			<tfoot>
            <tr>
              <td><span id="sp1"><b>Total cost:</b></span></td>
              <td>
                <?php 
                  $sql = "SELECT sum(cost*pamount) AS totalCost FROM addtocard WHERE uid='$_SESSION[userId]' AND confirm='0'";
                  $res = mysqli_query($con, $sql);
                  $res1 = mysqli_fetch_array($res);
                  ?>
                <span id="cost1">
                  <?php
                  echo $res1['totalCost']." Tk";
                ?>
                </span>
                <input type="number" name="tCost" value="<?php echo $res1['totalCost']; ?>" hidden>
              </td>
            </tr>
    				<tr>
              <td colspan="2" align="center"><input type="submit" name="sbt" value="Done" class="btn btn-warning"></td>
            </tr>
    			</tfoot>

    		</table>
    	</form>
    </center>
 </body>
 </html>