<?php
    include("connection.php");
    session_start();
    $name= mysqli_real_escape_string($con,$_POST["name"]);
    $email=mysqli_real_escape_string($con,$_POST["email"]);
    $number = $_POST["phone"];
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
      ?>
      <script>
          window.alert("Enter a valid mail");
      </script>
        <meta http-equiv="refresh" content="0;url=register.php" />
        <?php
    }
    $password = $_POST['password'];
    if(strlen($password)<6){
      ?>
      <script>
          window.alert("Password length atleast 6 character");
      </script>
      <meta http-equiv="refresh" content="0;url=register.php" />
      <?php
    }

    $duplicate_user_query="select email from users where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=register.php" />
        <?php
    }else{
      $q = "INSERT INTO users(name,email,phone,password) VALUES('$name','$email','$number','$password')";
      $r=mysqli_query($con,$q) or die(mysqli_error($con));
      if($r==False)
    {    
      die(mysqli_error($con));
    }
    else
    {
?>
<script>
  alert("User successfully added");
</script>
<meta http-equiv="refresh" content="0;url=login.php" />
<?php
    } 
  }   
?>