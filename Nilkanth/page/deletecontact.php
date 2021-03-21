<?php
   $id = $_GET['cid'];
   $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
   $cmd ="delete  from contact where id='$id'";
   mysqli_query($con,$cmd) or die(mysqli_error());
   header('location:contact.php'); 
?>
  