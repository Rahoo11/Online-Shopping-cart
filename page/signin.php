<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
        <link rel="shortcut icon" href="icon/add-user.png" />
        <link rel="stylesheet" type="text/css" href="../css/signup.css">
        
        <script src="../js/signup-validation.js"></script>
        <?php include"../class/adduserclass.php"; ?>
</head>
<body class="bg">
<?php include"header.php"; ?>

     

        <!-- Sign up Modal -->
    <div id="signup"class="signupmodal">
    
    <form class="signupmodal-content animate" action="" method="post">
    
        <div class="signupimgcontainer">
            <img src="../icon/user.svg" alt="Avatar" class="avatar">
        </div>
        
        <div class="signupcontainer">
        <center>
        <img src="../icon/user.svg" class="icone" width="25px" height="25px">&nbsp;&nbsp;
              <input type="text" class="in" placeholder="Enter Email" name="email" required>
              <br><br>
              <img src="../icon/lock.png" class="icone" width="25px" height="25px">&nbsp; &nbsp;
              <input type="password" class="in" placeholder="Enter Password" name="psw" required>
              <br><br>
              <input type="submit" value="Login" name="sub" class="sub" id onclick="document.getElementById('id01').style.display='none'">
              <br><br>
              <span class="createac"><a class="cac" href="signup.php">Sign up</a></span>
                <span class="psw">Forgot <a class="fps" href="#">password?</a></span>
              <br>
        </center>
        <div align=center class="signupcontainer" >
           
            
        </div>
        </div>
    </form>
</div>
        <?php
		if(isset($_POST['sub']))
			{
			
				$email = $_POST['email'];
				$ps = $_POST['psw'];
				$log = new userclass();
				$s=$log->login($email,$ps);
				if($r= mysqli_fetch_array($s))
				{
					
					$_SESSION['client']=$email;
					
				}
				else
				{ 
					?>
					<script>alert('Please Check Username Or Password')</script>
					<?php
				}
			}
	?>
<br>
    <?php include"footer.php"; ?>


<script>
// Get the modal

var signin = document.getElementById('id01');

//ar closelogin = document.getElementById('closelogin');
//document.getElementById('signin').style.display='none'

// When the user clicks anywhere outside of the modal, close it
        function closelogin()
            {
                signin.style.display = "none";
                
            }

   

</script>
</body>
</html>
