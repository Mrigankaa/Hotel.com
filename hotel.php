<?php
    include("connection.php");
    session_start();
    if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color:#FEECE9;">

<?php
        require "header.php";
        echo '<div class="container"><br><br>';
        $sql = "Select * from hotels where status='available'";
        $r = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($r)){
    
        echo'
        <div style="display:inline-block">
        <div class="card card-body" style="width: 23rem ;">
        <img hotel_id ="'.$row[0].'" src="'.$row[4].'" class="card-img-top">
        <div class="card-body">
            <h4 class="card-title">'.$row[1].'</h4>
            <p class="card-text">Price: ₹'.$row[3].'</p>
            <p>Description: '.$row[5].'</p>
            <a href="book.php?hotel_id='.$row[0].'&hotel_name='.$row[1].'" class="btn btn-primary">Book</a>
        </div>
        </div>
        </div>';
        }
        echo '<br>';
        
    ?>
</div><br><br>
    <?php require "footer.php"; ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
    }else{
?>
        <script>
            window.alert("Please Login/Register First");
        </script>     
        <meta http-equiv="refresh" content="0;url=login.php" />  
<?php
    }
?>
