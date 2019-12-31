<?php 
   require_once 'aOption.php';
   require_once 'dbms.php';
   if(isset($_GET['delete'])){
    echo $_GET['delete'];
    $sql = "DELETE FROM pentry WHERE pid='$_GET[delete]'";
    mysqli_query($con, $sql);
   }
    ?>

      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 


 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>View Product</title>
 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#myModal").modal();
  });
});
</script>
 	<style>
  body{
      font-family: sans-serif;
      background-image: url('images/vp.jpg');
        background-size: cover;
      }.box{
      background: rgba(20, 0, 10, .4);
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
      
 		}a#up{
      text-decoration: none;
      font-size: 20px;
      color: #E89EF2;
    }a#del{
      text-decoration: none;
      font-size: 20px;
      color: #35E8D2;
    }
 	</style>
 </head>
 <body>
 	
   <center>
     
     <div class="box">
     
     <center>
       <table>
    <thead>
      <tr>
        <th>Product Id</th>
        <th>Name</th>
        <th>Product</th>
        <th>Price</th>
        <th>Company</th>
        <th>Category</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 

              $sql = "SELECT * FROM pentry";
              $result = mysqli_query($con, $sql);

              while($result1 = mysqli_fetch_array($result)){
              ?>

              <tr>
                <td><?php echo $result1['pid']; ?></td>
                <td><?php echo $result1['pname']; ?></td>
                <td>
                  <img src="<?php echo $result1['pview']; ?>" alt="" width="150px" height="100px"></td>
                <td><?php echo $result1['pprice']; ?></td>
                <td><?php echo $result1['company']; ?></td>
                <td><?php echo $result1['category']; ?></td>
                <td><a id="up" href="aUpdate.php?update=<?php echo $result1['pid']; ?>">Update</a></td>
                <td><a id="del" href="vProduct.php?delete=<?php echo $result1['pid']; ?>">Delete</a></td>
              </tr>

              <?php  
              }
       ?>
    </tbody>
  </table>
     </center>

   </div>

   </center>

 </body>
 </html>