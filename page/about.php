<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
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

.columnstorytitle {
  float: left;
  width:50%;
  height:300px;
  
}
.columnstory {
  float: left;
  width:50%;
  height:300px;
  
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
.contentstorytitle
{
  padding-top:15%;
}
.contentstory{padding: 20px;}

.ourstory
{
    color:#3277a8;
    font-size:2.5em;
}
.story
{
    color:#3277a8;
    font-size:1.2em;
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
    background-color:#3291a8;
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
    background-color:#3291a8;
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
    background-color:#3291a8;
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
  .columnstory{width:50%;height:380px;}
  
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width:500px) {
  .ccolumn {width: 100%;}
  .columnstorytitle {width:100%; height:200px;}
  .columnstory{width:100%;height:auto;}
  .contentstorytitle{padding-top:20px;}
}
</style>

</head>
<body>
<?php include"header.php"; ?>
            <br>
            <center>
                <b class="conlbl">About Us</b>
            </center>
   <!-- MAIN (Center website) -->
    <div class="cmain">
    <!-- Portfolio Gallery Grid -->
        <div class="crow">

            <!-- Our Story div -->
           <div class="columnstorytitle">
                <div class="contentstorytitle">
                    <center>
                        <h1 class="ourstory">Our Story </h1>
                    </center>
                </div>
            </div>

            <div class="columnstory">
                <div class="contentstory">
                    <p class="story">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sahajanand Sales Station began in 23 November 2018. After years in the Clothing Market, we realized that it was near impossible for the average Rohit or Mohit to Start their own Business. 
                    <p class="story">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Since that time we are providing branded and quality cloths. 
                    </p>
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



  <?php include"footer.php"; ?>

</body>
</html>