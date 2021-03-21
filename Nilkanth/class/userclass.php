<?php
 
class userclass 
    {
        function __construct()
                {
                    $this->con = mysqli_connect("127.0.0.1","root","","Sahajanand");
                }
         function login($uid,$psw)
            {
                $this->uid = $uid;
                $this->psw = $psw;
                $s=mysqli_query($this->con,"select * from varniraj where uname='$uid' and psw='$psw'");
                return $s;
            }
        
    }
?>