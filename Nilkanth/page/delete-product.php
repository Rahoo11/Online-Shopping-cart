<?php
session_start();
if(isset($_SESSION['admin']))
{    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Delete Product</title>
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

            $id =$_GET['pid'];
            $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
            $s=mysqli_query($con,"select * from product where id='$id'");

            $r=mysqli_fetch_array($s);

            
        ?>
            <div class="column">
                <div class="content">
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
                    </span><br><br><br><br>
                    
                    
                    
                    <a href="delprod.php?pid=<?php echo $r['id'];?>" class="deleteprodbtn" style="width:95%;">
                      Delete Product
                    </a>
                    
                   
                </div>
            </div>
        
    </div> <!-- END Row -->
</div><!-- END MAIN -->





</body>
</html>
<?php
}
else
{
    header("Location:../login.php");
} 
?>