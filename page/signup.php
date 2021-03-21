<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
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
                <img src="../icon/add-user.png" alt="Avatar" class="avatar">
            </div>
            
            <div class="signupcontainer">
            <center>
                <!-- get user name -->
                <img src="../icon/user.svg" class="icone" width="25px" height="25px">&nbsp;&nbsp;
                <input type="text"  class="in" placeholder="Enter Your name" name="username" onkeyup="unmverify()" id="unm"  required/> <!-- onkeyup="unmverify()" id="unm" -->
                <b id="umsg" style="color:red;"></b> 
                <br>

                <!-- get Mobile NO -->
                <img src="../icon/call.png" class="icone" width="25px" height="25px">&nbsp;&nbsp;
                <input type="text" class="in" placeholder="Enter Mobile No" name="mobile" onkeyup="mobileverify()" id="umob" required>
                <b id="mmsg" style="color:red;"></b> <br>

                <!-- get email -->
                <img src="../icon/mail.png" class="icone" width="25px" height="25px">&nbsp;&nbsp;
                <input type="email" class="in" placeholder="Enter Email" name="email" onkeyup="emailverify()" id="uemail" required>
                <b id="emsg" style="color:red;"></b> <br>

                <!-- get password -->
                <img src="../icon/lock.png" class="icone" width="25px" height="25px">&nbsp; &nbsp;
                <input type="password" class="in" placeholder="Enter Password" name="psw" onkeyup="pswverify()" id="upsw" required>
                <b id="pmsg" style="color:red;"></b> <br>

                <!-- get password -->
                <img src="../icon/lock.png" class="icone" width="25px" height="25px">&nbsp; &nbsp;
                <input type="password" class="in" placeholder="Enter Conform Password" name="cpsw" onkeyup="cpswverify()" id="ucpsw" required>
                <b id="cpmsg" style="color:red;"></b> <br><br>

                <input type="submit" value="Sign Up" name="sub" class="sub">
                <br>
            </center>
            <div align=center class="signupcontainer" >
                <span class="haveac">Already have an account? <span class="login" id="login" >Sign in</a></span>
                
            </div>
            </div>
        </form>
    </div>
    
    <?php include"footer.php"; ?>
<?php
    if(isset($_POST['sub']))
        {
            session_start();
            $name = $_POST['username'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $psw = $_POST['psw'];
            $cpsw = $_POST['cpsw'];
           

            if (!preg_match('/^[a-zA-Z -]+$/', $name)) 
                {
                    echo"<script>alert('Please enter your name proper')</script>";
                } 
            elseif(!preg_match('/^[0-9]{10}+$/', $mobile))
                {
                    echo"<script>alert('please Enter Valid Mobile Number')</script>";
                }
            elseif(!preg_match('/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/', $email))
                {
                    echo"<script>alert('please Enter Valid Email')</script>";
                } 
            elseif(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/', $psw))
                {
                    echo"<script>alert('please Enter Valid Password')</script>";
                }
            elseif($psw!=$cpsw)
                {
                    echo"<script>alert('Both password are not match')</script>";
                }
            else 
                { 
                    
                    
                    $log = new adduserclass();
                    $s=$log->ckuseremail($email);
        
                    if($r= mysqli_fetch_array($s))
                        {
                            ?>
                            <script>alert('User Already Exist')</script>
                            <?php
                            
                        }
                    else
                        {   
                            $log->adduser($name,$mobile,$email,$psw);
                            ?>
                                <script>alert('You Sign up Successfully')</script>
                            <?php
                            
                        } 
                }
           
        } 
?>

<script>
// Get the modal
var signup = document.getElementById('signup');
var signin = document.getElementById('signin');
var login = document.getElementById('login');
//ar closelogin = document.getElementById('closelogin');
//document.getElementById('signin').style.display='none'

// When the user clicks anywhere outside of the modal, close it
        function closelogin()
            {
                signin.style.display = "none";
                signup.style.display = "block";
            }
window.onclick = function(event) {
    if (event.target == modal) {
        signin.style.display = "none";
    }

    login.onclick = function() 
        {
            signin.style.display = "block";
            signup.style.display = "none";
        }
   
}
</script>
<!-- Validation --> 
<script type="text/javascript">
   
   //User name 
   function unmverify() 
    {
        var x = document.getElementById("unm");
        var msg=document.getElementById("umsg");
        var value=x.value; 
       
        var uname= /^[A-Za-z ]+$/;

        if(value.match(uname)) 
            { 
                document.getElementById("umsg").innerHTML = " ";
                x.style.color = "black";
                return true;
            }
        else
            { 
                document.getElementById("umsg").innerHTML = "*";
                x.style.color = "red";
                return false;
            }
    }
    //mobile number validation
    function mobileverify() 
    {
        var x = document.getElementById("umob");
        var msg=document.getElementById("mmsg");
        var value=x.value; 
       
        var mobile= /^\d{10}$/;

        if(value.match(mobile)) 
            { 
                document.getElementById("mmsg").innerHTML = " ";
                x.style.color = "black";
                return true;
            }
        else
            { 
                document.getElementById("mmsg").innerHTML = "*";
                x.style.color = "red";
                return false;
            }
    }

    //email validation
    function emailverify() 
    {
        var x = document.getElementById("uemail");
        var msg=document.getElementById("emsg");
        var value=x.value; 
       
        var email= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;

        if(value.match(email)) 
            { 
                document.getElementById("emsg").innerHTML = " ";
                x.style.color = "black";
                return true;
            }
        else
            { 
                document.getElementById("emsg").innerHTML = "*";
                x.style.color = "red";
                return false;
            }
    }

    //password validation
    function pswverify() 
    {
        var x = document.getElementById("upsw");
        var msg=document.getElementById("pmsg");
        var value=x.value; 
       
        var pass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

        if(value.match(pass)) 
            { 
                document.getElementById("pmsg").innerHTML = " ";
                x.style.color = "black";
                return true;
            }
        else
            { 
                document.getElementById("pmsg").innerHTML = "*";
                x.style.color = "red";
                return false;
            }
    }

    //password validation
    function cpswverify() 
    {
        var x = document.getElementById("ucpsw");
        var msg=document.getElementById("cpmsg");
        var value=x.value; 
       
        var y= document.getElementById("upsw");
        var z=y.value;
        if(value==z) 
            { 
                document.getElementById("cpmsg").innerHTML = " ";
                x.style.color = "black";
                return true;
            }
        else
            { 
                document.getElementById("cpmsg").innerHTML = "*";
                x.style.color = "red";
                return false;
            }
    }
</script>
</body>
</html>
