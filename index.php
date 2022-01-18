<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#D6E5FA;">    
    <?php
        require "header.php";
    ?>
    <div class="button">
      <a href="hotel.php"><button class="btn">Book A Stay</button></a>
    </div>
    <?php
        echo "<br>";
        require "body.php";
    ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script><br>
    <?php
      require "footer.php";
    ?>
</body>
</html>