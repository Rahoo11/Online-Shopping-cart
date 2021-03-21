<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>product | Just Look</title>
<link href="../Nilkanth/css/product-model.css" rel="stylesheet">

</head>
<body class="bg">
    <?php include"header.php"; ?>
    <br><br>
    


<!-- MAIN  -->
<div class="main">                        
    <div class="row"><!-- Row-->
        <?php 

            $search = $_POST['search'];

            $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
            $s=mysqli_query($con,"select * from product where ptitle like '%$search%'");

            while($r=mysqli_fetch_array($s))
                    {
        ?>
            <div class="column">
                <div class="content">
                    <span>
                        <h2 class="ptitle"><?php echo $r['ptitle']; ?> </h2>
                    </span>
                    <br>
                    <img src="../Nilkanth/page/<?php echo $r['pimg'] ?>" alt="<?php echo $r['ptitle']; ?>" class="image">
                    <br><br>

                    <span class="price"> 
                        ₹ <?php echo $r['pprice']; ?>/-
                    </span>
                    
                    <span class="size"> 
                        Size :-  <?php echo $r['psize']; ?>
                    </span><br><br>
                    
                    <a href="addtowishlist.php?p=<?php echo $r['pid'];?>" class="wishlistbtn">
                      Add To Wishlist
                    </a>
                    <a href="view-product.php?p=<?php echo $r['pid'];?>" class="viewdetailbtn">
                      View more detail
                    </a>
                    <br>
                </div>
            </div>
        <?php } ?>
    </div> <!-- END Row -->
</div><!-- END MAIN -->

</body>
</html>
