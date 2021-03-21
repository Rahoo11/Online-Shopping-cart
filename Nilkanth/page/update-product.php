<?php
session_start();
if(isset($_SESSION['admin']))
{    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Update Product</title>
<link href="../css/add-prod-model.css" rel="stylesheet">
<script src="../js/add-prod-model.js"></script>

</head>
<body class="bg">
<?php include"header.php"; ?>
<br><br>
   <?php include"product-header.php"; ?>
   <br><br>

    <?php
        $id =$_GET['pid'];
        $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
        $s=mysqli_query($con,"select * from product where id='$id'");

        $r=mysqli_fetch_array($s);
    ?>


<!-- The Modal -->
<div id="myModal" >
  <!-- Modal content -->
  <div align="center" class="modal-content">
    <div class="modal-header">
      <h2>UpdateProduct</h2>
    </div>
    <form name="addproduct" action="" method="POST" enctype="multipart/form-data">
    <div class="modal-body">
    <br>
        <input type="text" name="pid" value="<?php echo $r['pid'] ?>" placeholder="Enter Product ID" class="pinput" required/> <br>

        <input type="text" name="ptitle" value="<?php echo $r['ptitle'] ?>" placeholder="Enter Product Title" class="pinput" required/> <br><br>


        <select name="ptype" required  class="prodselect">
            <option value="<?php echo $r['ptype'] ?>" class="prodoption"><?php echo $r['ptype'] ?></option>

            <option value="Shirt" class="prodoption">Shirt</option>
            <option value="Formal Shirt" class="prodoption">Formal Shirt</option>
            <option value="T Shirt" class="prodoption">T-Shirt</option>
            <option value="Jeans Pant" class="prodoption">Jeans Pant</option>
            <option value="Cotton Pant" class="prodoption">Cotton Pant</option>
            <option value="Formal Pant" class="prodoption">Formal Pant</option>
            
        </select>   
        <br> <br>
        <select name="pbrand" required class="prodselect">
            <option value="<?php echo $r['pbrand'] ?>" class="prodoption"><?php echo $r['pbrand'] ?></option>

            <option value="Grevity" class="prodoption">Grevity</option>
            <option value="Glory" class="prodoption">Glory</option>
            <option value="Stride" class="prodoption">Stride</option>
            <option value="William Hazlite" class="prodoption">William Hazlite</option>
            <option value="Tago" class="prodoption">Tago</option>
        </select>
        <br>
      
        <input type="text" name="pprice"  value="<?php echo $r['pprice'] ?>" placeholder="Enter Product Price" class="pinput" onkeyup="priceverify()" id="price"  required/> <!-- onkeyup="priceverify()" id="price" -->
        <b id="msg" style="color:red;"></b>
        <br>

        <input type="text" name="psize" value="<?php echo $r['psize'] ?>" placeholder="Enter Product Size" class="pinput" required/> <br>
        
        <textarea  name="pdetail"  class="pdetail" required><?php echo $r['pdetail']; ?></textarea> <br><br>
          
        <input type="submit" name="save" value="Save"  class="psub" require>

    </div>
    </form>
    <div class="modal-footer">
      
        </div> 
    </div>
  <br>
  <br>
  <br>
  <br>
</div>

<?php
  if(isset($_POST['save']))
  {   
      $pid    = $_POST['pid']; 
      $ptype  = $_POST['ptype'];
      $ptitle = $_POST['ptitle'];
      $pbrand = $_POST['pbrand'];
      $pprice = $_POST['pprice'];
      $psize  = $_POST['psize'];
      $pdetail= $_POST['pdetail'];
      
        /* $pr= preg_match("/^[0-9]*$/",$pprice);*/
      if(empty($pid))
        { ?>
          <script> alert('please Enter Product ID') </script>
        <?php 
        }
      elseif(!preg_match('/^[a-zA-Z -]+$/', $ptitle))
        {
            echo"<script>alert('please Enter Valid Product Title')</script>";
        }
      else if(empty($ptype))
        { ?>
          <script> alert('please Select Product Type') </script>
        <?php 
        }
      else if(empty($pbrand))
        { ?>
          <script> alert('please Select Product Brand') </script>
        <?php 
        }
     
      else if(is_float($pprice))
        { ?>
          <script> alert('Enter valid price') </script>
        <?php 
        }
      else if(empty($psize))
        { ?>
          <script> alert('please Enter Product Size') </script>
        <?php 
        }
      else if(empty($pdetail))
        { ?>
          <script> alert('please Enter Product Detail') </script>
        <?php 
        }  
      else
        {
            include('../class/updateproduct.php');

              $add = new updateproduct();
               $add->upproduct($pid,$ptype,$ptitle,$pbrand,$pprice,$psize,$pdetail)
                ?>
              <script>alert('Product is Updated Successfully')</script>
               <?php      
        }

  }
?>


<!-- price verify -->
<script>
  function priceverify() {
  var x = document.getElementById("price");
  var msg=document.getElementById("msg");
 var value=x.value; /*x.value.toUpperCase(); */
  /*var decimal= /^[-+][0-9]+\.[0-9]+[eE][-+]?[0-9]+$/; */  
  var decimal= /^[0-9]+\.[0-9]+$/;
if(value.match(decimal)) 
{ 
  document.getElementById("msg").innerHTML = " ";
return true;
}
else
{ 
  document.getElementById("msg").innerHTML = "*";
return false;
}
}
</script>

</body>
</html>
<?php
}
else
{
    header("Location:../index.php");
} 
?>
