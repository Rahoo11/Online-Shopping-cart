
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wishlist | Just Look</title>
<link href="../Nilakanth/css/product-model.css" rel="stylesheet">
<style>
  .divterm
  {
      padding-left:30px;
  }
  .term
  {
      color:red;
      
  }
  .terms{ padding-left:40px;}
  li
  {
       
        color:#1599e6;
        font-size:1.5em;
  }
</style>
</head>
<body class="bg">
    <?php include"header.php"; ?>
    <br><br>
    <?php 
    if(isset($_SESSION['client']))
		{
    
            include"wishlistitem.php"; 
            ?>
            <div class="divterm">
               <h1 class="term"> * Term & condition </h1>
               <div class="terms">
                    <ul>
                    <li>You Can Add Product To Wishlist.</li>
                    <li>If You Want To Buy This Product Please Visit Our Store. </li>
                    <li>Please Buy Your Wishlist Product In 10 Days. </li>
                    </ul>
                </div>
            </div>
            <?php
        }
	else
		{
            echo"<script>alert('Please Sign In ') </script>";
            ?>

            <?php
        }      
    ?>

    
<?php include"footer.php"; ?>
</body>
</html>
