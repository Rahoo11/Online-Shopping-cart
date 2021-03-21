<?php
 
class updateproduct
    {
        function __construct()
                {
                    $this->con = mysqli_connect("127.0.0.1","root","","Sahajanand");
                }
        
        function upproduct($pid,$ptype,$ptitle,$pbrand,$pprice,$psize,$pdetail)
            {
                $this->pid = $pid;
                $this->ptype = $ptype;
                $this->ptitle = $ptitle;
                $this->pbrand = $pbrand;
                $this->pprice = $pprice;
                $this->psize = $psize;
                $this->pdetail = $pdetail;
                

                $this->cmd = "update  product set ptitle='$ptitle',ptype='$ptype',pbrand='$pbrand',pprice='$pprice',psize='$psize',pdetail='$pdetail'  where pid ='$pid'"; 
        
               
                $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error());
                
            }
        
    }
?>