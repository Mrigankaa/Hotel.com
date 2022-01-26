<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Pannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <table class="table table-light">
    <thead>
    <tr>
        <th scope="col">Booking Id</th>
        <th scope="col">Hotel Name</th>
        <th scope="col">Checkin Date</th>
        <th scope="col">Checkout Date</th>
        <th scope="col">People</th>
        <th scope="col">Price</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
        <th scope="col">User Id</th>
        <th scope="col">Hotel Id</th>
        <th scope="col">Edit</th>
        
    </tr>
  </thead>
<?php   
    $sql = "SELECT * from hotel_book";
    $r = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($r)){
?>
<tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[7]; ?></td>
    <td><?php echo $row[8]; ?></td>
    <td><?php echo $row[9]; ?></td>
    <td><a href="remove_booking.php"><button class="btn btn-primary">Edit</button></a></td>

<?php
    }
?>


    
</body>
</html>