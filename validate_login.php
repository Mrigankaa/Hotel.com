<?php
    require('connection.php');
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "select * from users where email = '$email' and password = '$password'";
    $r = mysqli_query($con,$q) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($r);
    if($rows_fetched==0){        
?>
        <script>
            window.alert("Wrong username or password");
        </script>     
        <meta http-equiv="refresh" content="0;url=login.php" />  
<?php
       
    }else{
        if($email == 'mrihanka9@gmail.com')
        {
            header('location: admin.php');
        }
        else{
            $row=mysqli_fetch_array($r);
            $_SESSION['email']=$email;
            $_SESSION['id']=$row['id']; 
            header('location: hotel.php');
        }
    }
    
 ?>