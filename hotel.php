<?php
    include("connection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color:#FEECE9;">
    <?php
        require "header.php";
        
        $sql = "Select hotel_name from hotels";
        $r = mysqli_query($con,$sql);
        $row = mysqli_fetch_row($r);
    ?>
    <br><br>
        <div class="container">
            <img src="img/5.jpg" alt="" style="height:200px;width:400px;">
            <h3>
               <?php
                    echo $row[0];
                ?>                              
            </h3>
            <p style="color:red;"><img src="img/7.gif" style="height:15px;">1000</p>
            <a href="book.php" class="btn btn-secondary">Book Now</a>
        </div>
    <?php 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>