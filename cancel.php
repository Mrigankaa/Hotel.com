<?php
    include("connection.php");

    $user_id = $_GET['user_id'];
    $hotel_id = $_GET['hotel_id']; 
    $people = $_GET['people'];
    $add_room = floor($people/2)+$people%2;

    $sql = "DELETE FROM hotel_book WHERE user_id = $user_id and hotel_id = $hotel_id";
    $r = mysqli_query($con,$sql);
    if($r == FALSE){
        header("location:index.php");
    }
    else{
        header("location:mybooking.php");
        $sql1 = "UPDATE hotels SET rooms = rooms+$add_room where hotel_id = $hotel_id";
        $r1 = mysqli_query($con,$sql1);
    }
?>