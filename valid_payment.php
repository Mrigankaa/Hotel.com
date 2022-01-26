<?php 
    include("connection.php");
    session_start();

    $upi_id = $_POST["upi"];
    $payment_type = "Online";
    $user_id = $_SESSION["id"];

    $sql = "INSERT INTO payments(upi_id,payments_type,user_id)VALUES('$upi_id','$payment_type','$user_id')";
    $r = mysqli_query($con,$sql);
    if($r==false){
        header("loaction:hotel.php?error=1");
    }
    else{
        $sql1 = "UPDATE hotel_book SET status = 'Booked' Where user_id = $user_id";
        $r1 = mysqli_query($con,$sql1);
?>
<script>
    window.alert("Successfully Booked");
</script>     
    <meta http-equiv="refresh" content="0;url=mybooking.php" />  
<?php
    }
?>

