<?php
 
class product
    {
        function __construct()
                {
                    $this->con = mysqli_connect("127.0.0.1","root","","Sahajanand");
                }
         function add_product($uid,$psw)
            {
                $pnm=$_POST['pnm'];
			    $price=$_POST['price'];
			    $model=$_POST['model'];
		    
			$f="img/".$_FILES["im"]["name"];
		    
			 $r=$_FILES["im"]["tmp_name"];
			
			move_uploaded_file($r,$f);
			
            mysql_connect("localhost","root","");
			mysql_select_db("mj");
			mysql_query("insert into pro(nm,price,model,img) values('$pnm',$price','$model','$f')") or die(mysql_error());
			
			echo"<script>alert('Success')</script>";
														
            }
        
    }
?>