<?php 
    include("connection.php");
?>

<html lang="en">
    <head>
        <title>Hotel.com</title>
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body><br><br><br><br><br><br><br>
        <div class="form">
            <form class="login-form" action="valid_hotel.php" method="post">
                <input type="text" name="hotel_name" placeholder="Enter Hotel name" required />
                <input type="number" name="room" placeholder="Enter Total no of Rooms"  required />
                <input type="number" name="price" placeholder="Enter Room price" required/>
                <input type="text" name="type" placeholder="Enter Hotel type" required/>
                <button>Add Hotel</button></form><br>
        </div>
    </body>
</html>