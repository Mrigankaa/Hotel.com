<?php
    include("connection.php");
    session_start();
    $id = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color:#FEECE9;">
    <?php
        require "header.php";
    ?><br><br>
    <div class="container">
    <table class="table table-light">
    <thead>
    <tr>
      <th scope="col">Hotel Name</th>
      <th scope="col">Checkin Date</th>
      <th scope="col">Checkout Date</th>
      <th scope="col">People</th>
      <th scope="col">Price</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Booking</th>
    </tr>
  </thead>
  <?php
        $sql = "SELECT * from hotel_book where user_id = $id and status = 'Booked'";
        $r = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($r)){
    ?>
    <tr>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[7]; ?></td>
    <td><a href="<?php echo 'cancel.php?hotel_id='.$row[9].'&user_id='.$row[8].'&people='.$row[4].' '?>"><button class="btn btn-primary">Cancel</button></a></td>

    </tr>
    <?php          
        }
    ?>
    </table>

    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script><br>
</body>
</html>