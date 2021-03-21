
<script type="text/javascript">
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
       
        var email= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

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