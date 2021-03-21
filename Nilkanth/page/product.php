<?php
session_start();
if(isset($_SESSION['admin']))
{    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product  | Just Look</title>
<link href="../css/product-model.css" rel="stylesheet">

</head>
<body >
    <?php include"header.php"; ?>
    <br><br>
    <?php include"product-header.php"; ?>


<!-- MAIN  -->
<div class="main">                        
    <div class="row"><!-- Row-->
        <?php 

            $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
            $s=mysqli_query($con,"select * from product");

            while($r=mysqli_fetch_array($s))
                    {
        ?>
            <div class="column">
                <div class="content" style="height:470px;">
                    <span>
                        <?php echo $r['ptitle']; ?>
                    </span>
                    <br><br>
                    <img src="<?php echo $r['pimg'] ?>" alt="<?php echo $r['ptitle']; ?>" class="image">
                    <br><br>

                    <span class="price"> 
                        ₹ <?php echo $r['pprice']; ?>/-
                    </span>
                    
                    <span class="size"> 
                        Size :-  <?php echo $r['psize']; ?>
                    </span><br><br>

                    <br>
                    <span>
                    <a href="delete-product.php?pid=<?php echo $r['id'];?>" class="deleteprodbtn">
                     Delete Product
                    </a>
                    <a href="update-product.php?pid=<?php echo $r['id'];?>" class="editprodbtn">
                     Update Product
                    </a>
                    
                   </span>
                </div>
            </div>
        <?php } ?>
    </div> <!-- END Row -->
</div><!-- END MAIN -->




<?php include"footer.php"; ?>
</body>
</html>
<?php
}
else
{
    header("Location:../index.php");
} 
?>