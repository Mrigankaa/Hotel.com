<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel.com</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#FEECE9;">
    
    <?php
        require "header.php";
    ?>  
    <div class="container">
    <div class="buttons">
        <a href="hotel.php"><button class="btn-hover color-10">Book A Stay</button></a>        
    </div>
    <div class="container">
        <?php require "body.php"; ?>
    </div><br>
    </div>  
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script><br>
    <?php
      require "footer.php";
    ?>
</body>
</html>