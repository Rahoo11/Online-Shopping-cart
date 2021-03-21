<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
        <link rel="shortcut icon" href="icon/add-user.png" />
        <link href="../css/contact.css" rel="stylesheet">
        <?php include"../class/contactclass.php"; ?>
<style>
* {
  box-sizing: border-box;
}
::placeholder{opacity:1.0;color:black;}

body {
  margin:0%;
  
}

/* Center website */
.cmain {
  padding-top:10px;
  width:100%;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.crow {
  margin: 8px 1px;
  
}

/* Add padding BETWEEN each column */
.crow,
.crow > .ccolumn {
  padding:0px;
  
  
}

/* Create four equal columns that floats next to each other */
.ccolumn {
  float: left;
  width:25%;
  
}

.columnshopdt {
  float: left;
 
  width:30%;
  height:320px;
}
.columnconform{
  float: left;
  
  width:40%;
  height:320px;
}

/* Clear floats after rows */ 
.crow:after {
  content: "";
  display: table;
  clear: both;
  
}

/* Content */
.ccontent {
  
  padding: 10px;
}

.contentshopdt
{
  padding:10px 10px 20px 10px;
}
.contentconform
{
  padding:10px 10px 20px 100px;
}
.image
{
  width:100%;
  height:280px;
}
.conlbl
{
  font-size:1.8em;
}
.shopimage
{
  width:100%;
  height:200px;
}

.directionbtn
{
  border-color: #2196F3;
  color: white;
  /*background-color: white;*/
  background: #2196F3;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width:40%;
  border:solid;
  border-radius:20px 20px 20px 20px;
}
.directionbtn:hover
  {
    border-radius:20px 20px 20px 20px;
    color: dodgerblue;
    background-color:white;
    font-weight:bold;
    opacity: 0.8;
  }
  .contextarea
  {
    width:340px;
    height:80px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border:none;
    border-bottom:solid;
    box-sizing: border-box;
    
  }
  
  .coninput
  {
    width:168px;
    padding: 5px 10px;
    margin: 8px 0;
    display: inline-block;
    border:none;
    border-bottom:solid;
    box-sizing: border-box;
    
  }
  .coninputemail
  {
    width:340px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border:none;
    border-bottom:solid;
    box-sizing: border-box;
    
  }
  .consub
  {
  border-color: #2196F3;
  color: dodgerblue;
  background-color:white;
  font-size:1.1em;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width:120px;;
  border:solid;
  border-radius:20px 20px 20px 20px;
}
.consub:hover
  {
    border-radius:20px 20px 20px 20px;
    color: white;
    background: #2196F3;
    font-weight:bold;
    opacity: 0.8;
  }
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  
  .ccolumn {width:50%;}
  .columnshopdt{width:50%;height:380px;}
  .columnconform{width:50%;height:380px;}
  .contentconform{padding:20px 10px 20px 10px;}
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width:500px) {
  .ccolumn {width: 100%;}
  .coninput{width:340px;}
  .columnshopdt{width:100%;height:330px;}
  .columnconform{width:100%;height:380px;}
  .contentconform{padding:20px 10px 20px 10px;}
}
</style>

</head>
<body>
<?php include"header.php"; ?>
   <!-- MAIN (Center website) -->
    <div class="cmain">
    <!-- Portfolio Gallery Grid -->
        <div class="crow">
            <center>
                <b class="conlbl">Contact Us</b>
            </center>
           <br><br>
             <!-- Shop detail div -->
            <div class="columnshopdt">
                <div class="contentshopdt">               
                      <h3>Sahajanand Sales Station</h3>
                      
                      <span class="shopcon">
                          <i class="fa fa-map-marker"></i>
                          <i class="shopad" style="padding-left:5px;">
                          Shreeji Chamber,College Road,Junagadh, Gujarat <br>362001.
                          </i>
                      </span>
                      <br>
                      <span class="shopcon">
                            <i class="fa fa-envelope"></i> &nbsp;&nbsp;
                            <i class="shopad">
                            sahajanand1008@gmail.com
                            </i> 
                      </span>
                      <br>
                      <span class="shopcon">
                        <i class="fa fa-phone"></i> &nbsp;&nbsp;
                        <i class="shopad">
                          +91 9265474985
                        </i> 
                      </span>
                </div>
            </div>

            <div align=center class="columnshopdt">
                <div class="contentshopdt">  <br><br>
                    <img src="../img/map.png" class="shopimage">
                    <br><br>
                    <a href="https://goo.gl/maps/kd6J2XtPNrwwkqL97">
                        <span class="directionbtn">Direction<span>
                    </a>
                </div>
            </div>
              <!-- contact form div -->
            <div class="columnconform">
                <div align="center"class="contentconform">  
                    
                    <form  action="" method="post">
                        <textarea type="text" name="msg" placeholder="Enter Your Message" class="contextarea"></textarea>
                         <br>
                        <input type="text" name="cnm" value="" class="coninput" placeholder="Enter Your Name" onkeyup="cnmverify()" id="connm">
                        <b id="cnmmsg" style="color:red;"></b> 

                        <input type="text" name="cnum" value="" class="coninput" placeholder="Enter Your Number" onkeyup="cnumverify()" id="connum"> 
                        <b id="cnummsg" style="color:red;"></b><br>

                        <input type="text" name="cmail" value="" class="coninputemail" placeholder="Enter Your Email" onkeyup="cmailverify()" id="conmail">
                        <b id="cmailmsg" style="color:red;"></b><br><br>
                        
                        <input type="submit" name="csub" class="consub" value="Send" >
                    </form>
                </div>
            </div>

            
             <!-- shop image div -->
            <div class="ccolumn">
                <div class="ccontent">
                    <img src="../img/shopimg2.jpeg" class="shopimage">
                </div>
            </div>

            <div class="ccolumn">
                <div class="ccontent">
                    <img src="../img/shopimg3.jpeg" class="shopimage">
                </div>
            </div>

            <div class="ccolumn">
                <div class="ccontent">
                    <img src="../img/shopimg4.jpeg" class="shopimage">
                </div>
            </div>

            <div class="ccolumn">
                <div class="ccontent">
                    <img src="../img/shopimg1.jpeg" class="shopimage">
                </div>
            </div><!-- shop image div  end-->
             
        <!-- END GRID -->
        </div>
    <!-- END MAIN -->
    </div>

<?php
  //Submit contact form
    if(isset($_POST['csub']))
        {
            
            $msg = $_POST['msg'];
            $cnm = $_POST['cnm'];
            $cnum = $_POST['cnum'];
            $cmail = $_POST['cmail'];
            
            
           

            if (empty($msg)) 
                {
                    echo"<script>alert('Please enter your Detail')</script>";
                } 
            elseif(!preg_match('/^[a-zA-Z -]+$/', $cnm))
                {
                    echo"<script>alert('please Enter Name in Only String ')</script>";
                }
            elseif(!preg_match('/^[0-9]{10}+$/', $cnum))
                {
                    echo"<script>alert('please Enter Valid Mobile Number')</script>";
                } 
            elseif(!preg_match('/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/', $cmail))
                {
                    echo"<script>alert('please Enter Valid Email')</script>";
                }
          
            else 
                { 

                  
                    
                   
                    $log = new contactclass();
                    $log->sendmsg($msg,$cnm,$cnum,$cmail);
                  ?>
                      <script>alert('Your Message is Successfully Sended')</script>
                  <?php
                            
                  
                }
           
        } 
?>


  <?php include"footer.php"; ?>

  <script type="text/javascript">

   //contact name
      function cnmverify() 
      {
          var x = document.getElementById("connm");
          var msg=document.getElementById("cnmmsg");
          var value=x.value; 
        
          var pattern= /^[A-Za-z ]+$/;

          if(value.match(pattern)) 
              { 
                  document.getElementById("cnmmsg").innerHTML = " ";
                  x.style.color = "black";
                  return true;
              }
          else
              { 
                  document.getElementById("cnmmsg").innerHTML = "*";
                  x.style.color = "red";
                  return false;
              }
      }
 //contact number
      function cnumverify() 
      {
          var x = document.getElementById("connum");
          var msg=document.getElementById("cnummsg");
          var value=x.value; 
        
          var pattern= /^\d{10}$/;

          if(value.match(pattern)) 
              { 
                  document.getElementById("cnummsg").innerHTML = " ";
                  x.style.color = "black";
                  return true;
              }
          else
              { 
                  document.getElementById("cnummsg").innerHTML = "*";
                  x.style.color = "red";
                  return false;
              }
      }

      //contact email

      function cmailverify() 
      {
          var x = document.getElementById("conmail");
          var msg=document.getElementById("cmailmsg");
          var value=x.value; 
        
          var pattern= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;

          if(value.match(pattern)) 
              { 
                  document.getElementById("cmailmsg").innerHTML = " ";
                  x.style.color = "black";
                  return true;
              }
          else
              { 
                  document.getElementById("cmailmsg").innerHTML = "*";
                  x.style.color = "red";
                  return false;
              }
      }
  </script>

</body>
</html>