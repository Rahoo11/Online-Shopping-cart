<?php
   $id = $_GET['id'];
   $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
   $cmd ="delete  from wishlist where id='$id'";
   mysqli_query($con,$cmd) or die(mysqli_error());
  
   header('location:wishlist.php');
?>
  