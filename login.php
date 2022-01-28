<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Hotel.com</title> 
    <link rel="stylesheet" href="css/index.css">   
</head>
<body><br><br><br><br><br><br><br>
        <div class="form">
            <form class="login-form" action="validate_login.php" method="post">
                <input class="text" type="email" placeholder="Enter your email" name="email" required /><br>
                <input type="password" name="password" placeholder="Enter your Password" required>
                <button>Sign In</button></form><br>
            <p class="message">New User? <a href="register.php">Register</a></p>
            <p class="message"><a href="index.php">Home</a></p>
        </div>    
</body>
</html>