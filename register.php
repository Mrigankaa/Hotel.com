<?php 
    include("connection.php");
    session_start();
?>

<html lang="en">
    <head>
        <title>Hotel.com</title>
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body><br><br><br><br><br><br><br>
        <div class="form">
            <form class="login-form" action="validate_user.php" method="post">
                <input type="text" placeholder="Enter Username" name="name" required />
                <input class="text" type="email" placeholder="Enter your email" name="email" required />
                <input type="number" name="phone" placeholder="Enter your phone number" required/>
                <input type="password" name="password" placeholder="Enter your Password" required/>
                <button>Sign Up</button></form><br>
            <p class="message">Already Register? <a href="login.php">Login</a></p>
            <p class="message"><a href="index.php">Home</a></p>
        </div>
    </body>
</html>