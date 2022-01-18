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
                <input type="date" name="checkin" placeholder="Enter Check_in date" required/>
                <input type="date" name="checkout" placeholder="Enter Check_out date" required/>
                <input type="number" name="rooms" placeholder="Total rooms bookd">
                <input type="text" name="address" placeholder="Enter the address" required/>
                <button>Book</button></form><br>
        </div>
    </body>
</html>