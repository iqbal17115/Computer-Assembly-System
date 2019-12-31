<?php 
   session_start();

   require_once 'uOption.php';
   require_once 'dbms.php';
   
   echo $_SESSION['userId'];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>

 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>

     <style>	
      
      h3, p{
      	text-align: center;
      }.hde{
        border: 1px solid #9E9AD4;
        background-color: #A6CACF;
      }body {
        background-image: url("images/uWall.jpg");
        display: cover;
    }

     </style>
 </head>
 <body>
 	
    <div class="container-fluid">
        
  <div class="row row-sm-12">
    <div class="col-sm-3">
      <div class="card">
                <img  src="images/s.jpg" height="200px" alt="">
        <div class="card-body bg-danger">
          <h6>Select category and company</h6>
          <hr>
          <form action="" method="POST">

            <select name="cat" id="">
              <?php 

                      $sql = "SELECT DISTINCT category FROM pentry";
                      $res = mysqli_query($con, $sql);
                      while($res1=mysqli_fetch_array($res)){
                      ?>
                      <option value="<?php echo $res1['category']; ?>">
                        <?php echo $res1['category']; ?>
                      </option>
               <?php
                      }
               ?>
            </select>
            <select name="com" id="">
              <?php 

                      $sql = "SELECT DISTINCT company FROM pentry";
                      $res = mysqli_query($con, $sql);
                      while($res1=mysqli_fetch_array($res)){
                      ?>
                      <option value="<?php echo $res1['company']; ?>">
                        <?php echo $res1['company']; ?>
                      </option>
               <?php
                  }
               ?>
            </select>
            <br>  
            <button class="btn btn-success" name="search">Search</button>
          </form>
        </div>
      </div>
    </div>

    <?php   
      
      if(isset($_POST['search'])){
          ?>
           
           <style>
             .hde{
              display: none;
             }
           </style>
           <?php 
           echo $_POST['cat'];
           echo $_POST['com'];
     $sql = "SELECT pview, pid, pprice, pname FROM pentry WHERE company='$_POST[com]' AND category='$_POST[cat]'";
     $res = mysqli_query($con, $sql);
     while($res1 = mysqli_fetch_array($res)){
     ?>
    <div class="col-sm-3">
      <div class="card">
        <img  src="<?php echo $res1['pview']; ?>" height="200px" alt="">
      
      <div class="card-body">
        <h3 class="card-title"><a href="perProductDetail.php?per=<?php echo $res1['pid']; ?>"><?php echo $res1['pname']; ?></a></h3>
        <p class="card-text"><?php echo "Price-".$res1['pprice']." Taka"; ?></p>
      </div>
      </div>
    </div>
    <div><br></div>
    <?php 
      }
     ?>
          <?php
      }
     ?>

    <?php 
     $sql = "SELECT pview, pid, pprice, pname FROM pentry";
     $res = mysqli_query($con, $sql);
     while($res1 = mysqli_fetch_array($res)){
     ?>
    <div class="col-sm-3 hde">
      <div class="card">
      	<img  src="<?php echo $res1['pview']; ?>" height="200px" alt="">
      
      <div class="card-body">
      	<h3 class="card-title"><a href="perProductDetail.php?per=<?php echo $res1['pid']; ?>"><?php echo $res1['pname']; ?></a></h3>
      	<p class="card-text"><?php echo "Price-".$res1['pprice']." Taka"; ?></p>
      </div>
      </div>
    </div>
    <div><br></div>
    <?php 
      }
     ?>
  </div>
</div>

 </body>
 </html>