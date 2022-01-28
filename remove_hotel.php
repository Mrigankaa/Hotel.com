<?php
    include("connection.php");

    $hotel_id = $_GET['hotel_id']; 
   
    $sql = "DELETE FROM hotels WHERE hotel_id = $hotel_id";
    $r = mysqli_query($con,$sql);
    if($r == FALSE){
        header("location:index.php");
    }
    else{
    ?>
        <script>
            window.alert("Hotel Remove Successfuly");
        </script>     
        <meta http-equiv="refresh" content="0;url=edit_hotel.php" />  
    <?php
    }
?>