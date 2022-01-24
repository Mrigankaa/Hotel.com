<?php 
    include("connection.php");
    session_start();

    $hotel_id = $_GET["hotel_id"];
    $name = $_GET["hotel_name"];
?>

<html lang="en">
    <head>
        <title>Hotel.com</title>
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body><br><br><br><br><br><br><br>
        <div class="form">
            <form class="login-form" action="room_book_valid.php" method="post">
                <input type="text" name="name" value="<?php echo $name ?>">
                <input type="date" name="checkin" required/>
                <input type="date" name="checkout" required/>
                <input type="number" name="people" placeholder="Enter Total number of people" required/>
                <input type="text" name="address" placeholder="Enter the address" required/>
                <input type="number" name="id" value="<?php echo $hotel_id ?>"readonly>
                <button>Book</button></form><br>
        </div>
    </body>
</html>