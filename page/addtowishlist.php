
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Just Look</title>

<link href="../ravat/css/product-model.css" rel="stylesheet">

</head>
<body class="bg">
    <?php include"header.php"; ?>
    
    <br> <br>
    <?php
		
		if(isset($_SESSION['client']))
			{
                $pid= $_GET['pid'];
                $uid= $_SESSION['client'];
                $con=mysqli_connect("127.0.0.1","root","","Sahajanand");

                $s=mysqli_query($con,"select * from wishlist where uid='$uid' and pid='$pid'");

                if($r=mysqli_fetch_array($s))
                {
                    echo"<script>alert('Already Exist in  Wish List') </script>";
                    include("wishlistitem.php");
                }
                else
                {
                    $s=mysqli_query($con,"insert into wishlist (uid,pid) values('$uid','$pid')");
                    echo"<script>alert('Added To Wish List') </script>";
                    include("wishlistitem.php");
                }
               

                
                
            }
	    else
		    {
                echo"<script>alert('Please Sign In ') </script>";
                
            }      
    ?>

        <?php include"footer.php"; ?>
</body>
</html>