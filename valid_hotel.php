<?php
    include("connection.php");

    $h_name = $_POST["hotel_name"];
    $room = $_POST["room"];
    $price = $_POST["price"];
    $hotel_type = $_POST["type"];


    $sql = "INSERT INTO hotels(hotel_name,rooms,price,hotel_type) VALUES('$h_name','$room','$price','$hotel_type')";
    $r = mysqli_query($con,$sql);
    if($r==FALSE){
        mysqli_error($con);
    }
    else{
?>
<script>
  alert("Hotel successfully added");
</script>
<meta http-equiv="refresh" content="0;url=addhotel.php" />
<?php
    }    
?>
