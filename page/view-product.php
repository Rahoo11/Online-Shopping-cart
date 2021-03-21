<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product | Just Look</title>

<link href="../ravat/css/single-prodview.css" rel="stylesheet">
<link href="../ravat/css/product-model.css" rel="stylesheet">
</head>
<body class="bg">
    <?php include"header.php"; ?>
    
    <br> 
        <?php 
            
            $pid= $_GET['p'];
            $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
            $s=mysqli_query($con,"select * from product where pid='$pid'");

            if($r=mysqli_fetch_array($s))
                    {
        ?>

            
        <!-- MAIN  -->
        <div class="pmain">                        
            <div class="prow"><!-- Row-->

                <div class="pcolumn"><!-- Product Image Column-->
                    <div class="pcontent">
                        
                        <img src="../ravat/page/<?php  echo $r['pimg'] ?>" alt="<?php echo $r['ptitle']; ?>" class="pimage">
                       
                    </div>
                </div>

                <div class="pcolumn"><!-- Product Detail Column-->
                    <div class="pcontent">

                        <span>
                            <h1>
                            <?php echo $r['ptitle']; ?>
                            </h1>
                        </span>
                        
                        
                        <i><?php echo $r['pprice']; ?>/-</i>&nbsp;&nbsp;
                        <br><br>
                        <i><?php echo $r['psize']; ?></i><br>

                        <?php
                        $dt= $r['pdetail'];
                        $detail = str_replace(',', '<br />', $dt)
                        ?>

                        <i><?php echo $detail; ?></i>
                        <br><br><br>
                        <a href="addtowishlist.php?pid=<?php echo $r['pid'];?>" class="wishlistbtn">
                        Add To Wishlist
                        </a>
                    
                    </div>
                </div>
            </div> <!-- END Row -->
        </div><!-- END MAIN -->
            


        <?php } ?>
        <?php include"footer.php"; ?>
</body>
</html>