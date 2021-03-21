<!DOCTYPE html>
<html>
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In</title>
  <link rel="shortcut icon" href="icon/user.png" />
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <?php include"class/userclass.php"; ?>
</head>
<body class="bg">
  <div id="id01" class="modal">
  <br><br>
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <img src="icon/user.svg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <center>
        <img src="icon/user.svg" class="icone" width="25px" height="25px">&nbsp;&nbsp;
        <input type="text" class="in" placeholder="Enter Username" name="uname" required>
        <br>
        <img src="icon/lock.png" class="icone" width="25px" height="25px">&nbsp; &nbsp;
        <input type="password" class="in" placeholder="Enter Password" name="psw" required>
        <br><br>
        <input type="submit" value="Login" name="sub" class="sub">
        <br>
      </center>
      <div class="container" >
        <span class="psw">Forgot <a class="fps" href="#">password?</a></span>
        <br>
      </div>
    </div>
  </form>
</div>

<?php
 if(isset($_POST['sub']))
 {
   session_start();
    $id = $_POST['uname'];
    $ps = $_POST['psw'];
    $log = new userclass();
    $s=$log->login($id,$ps);
    if($r= mysqli_fetch_array($s))
      {
        $_SESSION['admin']=$id;
        header('location:page/index.php');
      }
      else
      { 
        ?>
        <script>alert('Please Check Username Or Password')</script>
        <?php
      }
  }
?>

</body>
</html>
