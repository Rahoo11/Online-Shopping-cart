<?php 
    if(isset($_SESSION['client']))
		{
    ?>

    <!-- MAIN  -->
    <div class="main">                        
        <div class="row"><!-- Row-->
            <?php 
                
                $con=mysqli_connect("127.0.0.1","root","","Sahajanand");

                $uid=$_SESSION['client'];

                $s=mysqli_query($con,"select * from wishlist where uid='$uid'");

                while($x=mysqli_fetch_array($s))
                    {
                        $pid= $x['pid'];
                        $t=mysqli_query($con,"select * from product where pid='$pid'");

                        while($r=mysqli_fetch_array($t))
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
                                    
                                    <a href="removewishlist.php?pid=<?php echo $r['pid'];?>" class="wishlistbtn">
                                    Remove from Wishlist
                                    </a>
                                    
                                    <br>
                                </div>
                            </div>
            <?php           
                            }
                    } 
            ?>


        </div> <!-- END Row -->
    </div><!-- END MAIN -->
<?php
        }
	else
		{
            echo"<script>alert('Please Sign In ') </script>";
        }      
    ?>
