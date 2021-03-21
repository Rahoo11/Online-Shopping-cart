<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/menu.css" rel="stylesheet">
<link href="../css/search-input.css" rel="stylesheet">
<link href="../css/footer.css" rel="stylesheet">
<link href="../css/userprofile.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/signin.css">
<link rel="shortcut icon" type="image/x-icon" href="../img/logo.jpeg" />
<title>Sahajanand Sales Station</title>
<?php 
	include"../class/userclass.php";
	include"../class/userprofileclass.php";
	session_start();
?>

</head>
<body style="margin:0;" >
<!-- navbar -->
	<div class="menu-bar">
    	&nbsp;&nbsp;&nbsp;
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>  &nbsp;&nbsp;
		<span><a href="index.php" class="brand-name">Sahajanand Sales Station</a> </span>

		<span class="menu-user-ac" onclick="openSearch()">
		<img src="../icon/search.png"  width="25px" height="25px">
	`	</span>
		<span class="menu-user-ac" id="openprofile">
			 <img src="../icon/user.svg" class="icone" alt="Avatar" width="25px" height="25px">
		</span>
		<span class="menu-user-ac">
			<a href="wishlist.php">
			 <img src="../icon/empty-heart.png"  width="30px" height="30px">
			</a>
		</span> 
	</div>

	<?php
		
		if(isset($_SESSION['client']))
			{
				$email =$_SESSION['client'];
				$profile = new userprofileclass();
                $s=$profile->getprofile($email);
			?>
				<!-- user profile -->
				<div id="myModal1" align=center class="loginmodal" style=" display: none;">
					<div class="modal-content">
						<div class="modal-header">
						<span id="closelogin" class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span> <br><br>
							
							<img src="../icon/user.svg" class="icone" alt="Avatar" width="100px" height="100px">
						</div>
						<br><br>
						<div class="modal-body">
							<span class="usernm"><?php echo $s['username']; ?></span><br><br>

							<span class="userdetail"><?php echo $s['mobile']; ?></span><br>
							<span class="userdetail"><?php echo $s['email']; ?></span><br>

							<br><br><br>
							<a href="logout.php" class="logout">Log out</a><br><br>
							<button id="openlogin" onclick=""></button> 
						</div>
						
					</div>
				</div>
			<?php
			}
		else
			{
			?>
				<!-- user profile -->
				<div id="myModal1" align=center class="loginmodal" style="display: none;">
					<div class="modal-content">
						<div class="modal-header">
							<span id="closelogin" class="close" onclick="close()">&times;</span> <br><br>
							
							<img src="../icon/user.svg" class="icone" alt="Avatar" width="100px" height="100px">
						</div>
						<br><br><br><br><br>
						<div class="modal-body">
						<button id="openlogin" onclick=""> <a href="signin.php">Sign in</a></button>
						</div>
						
					</div>
				</div>
			<?php
			}
			?>
	

  

	
	
	<!-- Search model -->
	
	<div id="myOverlay" class="overlay">
  		<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  		<div class="overlay-content">
   			<form action="search.php" method="post">
      			<input type="text" placeholder="Search.." class="searchinput" name="search">
      			<input type="image"  src="../icon/search.png"  alt="Submit" class="searchimg" width="48" height="48" onclick="openSearch()">
    		</form>
  		</div>
	</div>
			
	

	<!-- Menu Side bar model -->
	<div id="mySidenav" class="sidenav">
		  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  	<br><br>
  			<a href="index.php" class="menu">Home</a>
			<a href="product.php" class="menu">Product</a>
			<a href="Wishlist.php" class="menu">Wishlist</a>
			<a href="contact.php" class="menu">Contact</a>
			<a href="about.php" class="menu">About Us</a>
			
			<?php
			  if(isset($_SESSION['client']))
				{
					?>
						<a href="logout.php" class="menu">Sign Out</a>
					<?php
				}
			else
				{
					?>
						<a href="signin.php" class="menu">Sign In</a>
						<a href="signup.php" class="menu">Sign Up</a>
					<?php
				}
			?>
			
			
	</div>

	



<script>
		var modal = document.getElementById("myModal1");
		 function close()
			{
				modal.style.display = "none";
			}
</script>
<!-- sign in modal script -->
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<!-- user profile -->
<script>
// Get the modal
var modal = document.getElementById("myModal1");

// Get the button that opens the user profile modal
var btn = document.getElementById("openprofile");

// Get the button that opens the sign in modal
var opnlog = document.getElementById("openlogin");

// Get the <span> element that closes the modal
var close = document.getElementById("closelogin");

var logmodal = document.getElementById('id01');

// When the user clicks the button, open the modal 
opnlog.onclick = function() {
	logmodal.style.display = "block";
    modal.style.display = "none";

}

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  logmodal.style.display = "none";

}

// When the user clicks on <span> (x), close the modal
close.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
