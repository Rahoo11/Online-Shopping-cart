<?php 
    $id=$_GET['pid'];
    $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
    $cmd ="delete  from product where id='$id'";
    mysqli_query($con,$cmd) or die(mysqli_error());
       
?>
    <script> alert("Product Is Deleted Successfully") </script>
<?php
	   include"product.php";
?>