<body>
    <?php
        include("connection.php");
        require "sidebar.php";
    ?>
    <h3 style="margin-left: 250px;"><b><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Admin Dashboard</b></h3><br>
    <div class="w3-row-padding" style="margin-left: 200px; ">
    <div class="w3-third w3-padding">
   <a href="edit_hotel.php" style="text-decoration: none;"><div class="w3-card w3-green w3-padding" style="height: 150px;">
      <b><h2>Edit Hotel</h2></b>
      <i class="fa fa-list" style="font-size: 75px;"></i> 
      <span style="float: right; font-size: 50px; font-weight: bold;">  
        <?php
          $s1 = "select count(*) from hotels";
          $r1 = mysqli_query($con,$s1);
          $row1 = mysqli_fetch_array($r1);
          echo $row1[0];
         ?>  
      </span>
    </div></a>
  </div>
  <div class="w3-third w3-padding">
   <a href="addhotel.php" style="text-decoration: none;"><div class="w3-card w3-green w3-padding" style="height: 150px;">
      <b><h2>Add Hotel</h2></b>
      <i class="fa fa-list" style="font-size: 75px;"></i> 
      <span style="float: right; font-size: 50px; font-weight: bold;">  
        <?php
          $s1 = "select count(*) from hotels";
          $r1 = mysqli_query($con,$s1);
          $row1 = mysqli_fetch_array($r1);
          echo $row1[0];
         ?>  
      </span>
    </div></a>
  </div>
  <div class="w3-third w3-padding">
   <a href="hotelbooking.php" style="text-decoration: none;"><div class="w3-card w3-green w3-padding" style="height: 150px;">
      <b><h2>Bookings</h2></b>
      <i class="fa fa-list" style="font-size: 75px;"></i> 
      <span style="float: right; font-size: 50px; font-weight: bold;">  
        <?php
            $s1 = "select count(*) from hotel_book";
            $r1 = mysqli_query($con,$s1);
            $row1 = mysqli_fetch_array($r1);
            echo $row1[0];
          ?>  
      </span>
    </div></a>
  </div>
</div>
</body>
</html>