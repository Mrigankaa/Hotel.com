<?php 
    include("connection.php");
    session_start();
?>

<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body><br><br><br><br><br><br><br>
        <div class="form">
            <form class="login-form" action="validate_user.php" method="post">
                <input type="text" placeholder="Enter Username" name="name" required />
                <input class="text" type="email" placeholder="Enter your email" name="email" required />
                <input type="number" name="phone" placeholder="Enter your phone number" required/>
                <input type="password" class="text" placeholder="Enter your Password" required/>
                <button>Edit</button></form><br>
            <p class="message"><a href="admin.php">Dashboard</a></p>
        </div>
    </body>
</html>