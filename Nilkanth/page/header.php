<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="../img/logo.jpeg" />
<link href="../css/header-menu.css" rel="stylesheet">
<style>
 a{text-decoration:none;}
</style>

</head>
<body style="margin:0;">
	<div class="menu-bar">
    	&nbsp;&nbsp;&nbsp;
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>  &nbsp;&nbsp;
		<span class="brand-name">Sahajanand Sales Station </span>
		<span class="menu-user-ac"> <img src="../icon/user.svg" class="icone" width="25px" height="25px"></span>
	</div>
	<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <br><br>
  			<a href="index.php" class="menu">Home</a>
			<a href="product.php" class="menu">Product</a>
			<a href="contact.php" class="menu">Contact</a>
			<a href="wishlist.php" class="menu">Wishlist</a>
			<a href="user.php" class="menu">Users</a>
			
			<a href="logout.php" class="menu">Logout</a>
	</div>



<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("mySidenav");
var btns = header.getElementsByClassName("menu");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
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
