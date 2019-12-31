<?php 

  session_start();
  session_destroy();
  header('location:aLogin.php');

 ?>