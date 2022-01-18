<?php
    session_start();
    echo "logout successfully";
    header('location:index.php');
    session_unset();
    session_destroy();
?>