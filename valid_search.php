<?php
    include("connection.php");
    session_start();

    if(isset($_SESSION['email'])){

    $search = $_POST["search"];

    $sql = "Select hotel_name from hotels where hotel_name = '$search'";
    $r = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($r);
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php
                require "header.php";
                echo $row["hotel_name"];                
            ?>
        </div>
    </body>
    </html>
<?php
    }
else{
    header('location:login.php');
}
    
