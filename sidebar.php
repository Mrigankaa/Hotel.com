<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=" https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
		<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card"  id="mySidebar" style="width:200px;">
  <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
  class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
        <a href="admin.php" style="text-decoration: none;"><h3 class="w3-bar-item w3-black">Admin Panel</h3></a>
         	<a href="admin.php" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i>Dashboard</a>
         	<a href="#" class="w3-bar-item w3-button">Edit User</a>
         	<a href="#" class="w3-bar-item w3-button">Add Hotel</a>
            <a href="#" class="w3-bar-item w3-button">Add Room</a>
            <a href="#" class="w3-bar-item w3-button">View User</a>
            <a href="#" class="w3-bar-item w3-button">Remove User</a>
            <a href="#" class="w3-bar-item w3-button">Edit User</a>
            <a href="#" class="w3-bar-item w3-button">Edit Hotel</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-round w3-blue"><i class="fa fa-sign-out"></i>Logout</a>
    
            
</nav>
</body>
</html>
