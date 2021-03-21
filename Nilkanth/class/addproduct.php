<?php
 
class addproduct 
    {
        function __construct()
                {
                    $this->con = mysqli_connect("127.0.0.1","root","","Sahajanand");
                }
        function ckproduct($pid)
            {
                $this->pid = $pid; 
                $s=mysqli_query($this->con,"select * from product where pid='$pid'");
                return $s;
            }
        function addproduct($pid,$ptype,$ptitle,$pbrand,$pprice,$psize,$pdetail,$img)
            {
                $this->pid = $pid;
                $this->ptype = $ptype;
                $this->ptitle = $ptitle;
                $this->pbrand = $pbrand;
                $this->pprice = $pprice;
                $this->psize = $psize;
                $this->pdetail = $pdetail;
                $this->pimg = $img;

                $this->cmd = "insert into product (pid,ptitle,ptype,pbrand,pprice,psize,pdetail,pimg) values('$pid','$ptitle','$ptype','$pbrand','$pprice','$psize','$pdetail','$img')";
               
                $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error());
                
            }
        
    }
?>