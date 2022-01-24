<?php
    include("connection.php");
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class=" container container-fluid">
        <a class="navbar-brand" href="index.php"><strong>Hotel.com</strong></a>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="hotel.php"><strong>Hotels</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><strong>Contact Us</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><strong>About Us</strong></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-bs-toggle="dropdown"><strong>Account</strong></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <?php if(isset($_SESSION['email'])){ 
                          $email = $_SESSION['email'];
                          $sql = "SELECT * from users where email = '$email'";
                          $r = mysqli_query($con,$sql);
                          $row = mysqli_fetch_array($r);
                        ?>
                        <li><a class="dropdown-item" href="logout.php">Logout<strong><?php echo "  ".$row[1];?></strong></a></li>
                      <?php }else{ ?>
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="register.php">Register</a></li>
                      <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
