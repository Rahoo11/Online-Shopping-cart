<?php
    $pid =$_GET['pid'];
    $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
    $s=mysqli_query($con,"delete from wishlist where pid='$pid'");
     include"wishlist.php"; 
?>