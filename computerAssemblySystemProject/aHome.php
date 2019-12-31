<?php
 
   require_once 'aOption.php';
   require_once 'dbms.php';

      

   if(isset($_FILES['pview'])){
  $fileName = "images/".$_FILES['pview']['name'];
  $filetmp = $_FILES['pview']['tmp_name'];
  move_uploaded_file($filetmp, $fileName);
   
  $sql = "INSERT INTO pentry(pid, pname, pview, pprice, des, company, category) VALUES('$_POST[pid]', '$_POST[pname]', '$fileName', '$_POST[pprice]', '$_POST[pdes]', '$_POST[pcompany]', '$_POST[product]')";
     mysqli_query($con, $sql);
   }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>product-entry</title>
  <style>
     body{
        font-family: sans-serif;
        background-image: url('images/aDesign.jpg');
        background-size: cover;
      }
     .box{
      background: rgba(40, 50, 200, .5);
      color: #fff;
      width: 350px;
      box-sizing: border-box;
      padding: 50px 30px;
      position: relative;
      left: auto;
      top: auto;
      overflow: hidden;
      align-content: center;
     }#brd{
      border: 2px solid #15F5EB;
     }

  </style>
 </head>
 <body>
 	<center>
 		<h1>Product entry</h1>
 		<form action="" method="post" enctype="multipart/form-data">
 			<?php 

              $sql = "SELECT pId FROM pentry ORDER BY pId DESC";
              $result = mysqli_query($con, $sql);
              $result1 = mysqli_fetch_array($result);

 			 ?>
        
         <div class="box">
           
           <div class="container">
             
            <div class="form-group">
               
               <input id="brd" style="width: 100%" class="form-item" type="number" name="pid" value="<?php echo ++$result1['pId']; ?>" id="pi">

           </div>

          <div class="form-group">
           
           <input id="brd" style="width: 100%" class="form-item" type="text" name="pname" placeholder="Product Name" required>

          </div>

          <div class="form-group">
            
              

    <div class="custom-file">
    <input id="brd" style="width: 100%;" class="form-item" type="file" name="pview" id="inputGroupFile01" required>
    
  </div>

          </div>

          <div class="form-group">
        
            <input id="brd" style="width: 100%" class="form-item" type="number" name="pprice" placeholder="Product Price" required>
          </div>

         <div class="form-group">
           
            <input id="brd" style="width: 100%" class="form-item" type="text" name="pdes" placeholder="Description" required>

         </div>

         <div class="form-group">
            
            <input id="brd" style="width: 100%" class="form-item" type="text" name="pcompany" placeholder="Company" required>

         </div>

          <div class="form-group">
             
          <select id="brd" style="width: 100%" name="product" id="">
            
            <option value="Motherboard">Motherboard</option>
            <option value="Processor">Processor</option>
            <option value="Memory(RAM)">Memory (RAM)</option>
            <option value="Case/chassis">Case/chassis</option>
            <option value="Power supply">Power supply</option>
            <option value="Floppy drive">Floppy drive</option>
            <option value="Hard disk">Hard disk</option>
            <option value="CD-ROM, CD-RW, or DVD-ROM drive">CD-ROM, CD-RW, or DVD-ROM drive</option>
            <option value="Keyboard">Keyboard</option>
            <option value="Mouse">Mouse</option>
            <option value="Video card">Video card</option>
            <option value="Monitor(display)">Monitor (display)</option>
            <option value="Sound card">Sound card</option>
            <option value="Speakers">Speakers</option>
            <option value="Modem">Modem</option>

          </select>
          

          </div>
          
            
            <button class="btn btn-success btn-block" type="submit" name="submit">Submit</button>

         

           </div>

         </div>
      
 		</form>
 	</center>
 </body>
 </html>