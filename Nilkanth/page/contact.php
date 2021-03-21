<?php
session_start();
if(isset($_SESSION['admin']))
{    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact  | Just Look</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body >
    <?php include"header.php"; ?>
    <br><br>
   


        <div class="container">
                    <div class="table-responsive">
                                    
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
        <?php 

            $con=mysqli_connect("127.0.0.1","root","","Sahajanand");
            $s=mysqli_query($con,"select * from contact");

            while($r=mysqli_fetch_array($s))
                    {
        ?>
                
                            <tbody>
                            <tr>
                                <td><?php echo $r['id']; ?></td>

                                <td><?php echo $r['name']; ?></td>

                                <td><?php echo $r['number']; ?></td>

                                <td><?php echo $r['email']; ?></td>

                                <td><?php echo $r['message']; ?></td>

                                <td>
                                    <a href="deletecontact.php?cid=<?php echo $r['id'];?>" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                           

        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <br><br>
            <?php include"footer.php"; ?>
</body>
</html>
<?php
}
else
{
    header("Location:../index.php");
} 
?>