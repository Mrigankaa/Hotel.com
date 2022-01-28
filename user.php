<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><br><br>
    <div class="container">
        <table class="table table-light">
        <thead>
        <tr>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Edit</th>
        </tr>
    </thead>
    <?php
        $sql = "SELECT * from users";
        $r = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($r)){
    ?>
    <tr>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><button class="btn btn-primary" herf="">Edit</button></td>
    </tr>
    <?php
        }
    ?>
    </table>
    <div class="container">
    <h2 style="text-align: center;"><a class="btn btn-primary" href="admin.php">Admin Pannel</a></h2>
</div>
</body>
</html>