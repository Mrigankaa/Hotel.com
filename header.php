<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Hotel.com</a>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-bs-toggle="dropdown"> Menu </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <?php if(isset($_SESSION['email'])){ ?>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
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