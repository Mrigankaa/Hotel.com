<body>
    <?php
        include("connection.php");
        require "sidebar.php";
    ?>
    <h3 style="margin-left: 250px;"><b><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Admin Dashboard</b></h3><br>
    <div class="w3-row-padding" style="margin-left: 200px; ">
    <div class="w3-third w3-padding">
   <a href="addhotel.php" style="text-decoration: none;"><div class="w3-card w3-green w3-padding" style="height: 150px;">
      <b><h2>Edit Hotel</h2></b>
      <i class="fa fa-list" style="font-size: 75px;"></i> 
      <span style="float: right; font-size: 50px; font-weight: bold;">  
        <?php
          $sql = "select count(*) from hotels";
          $r = mysqli_query($con,$sql);
          $row = mysqli_fetch_array($r);
          echo $row[0];
         ?>  
      </span>
    </div></a>
  </div>
  <div class="w3-third w3-padding">
   <a href="addhotel.php" style="text-decoration: none;"><div class="w3-card w3-green w3-padding" style="height: 150px;">
      <b><h2>Add Room</h2></b>
      <i class="fa fa-list" style="font-size: 75px;"></i> 
      <span style="float: right; font-size: 50px; font-weight: bold;">  
        <?php
          
         ?>  
      </span>
    </div></a>
  </div>
  <div class="w3-third w3-padding">
   <a href="edit_user.php" style="text-decoration: none;"><div class="w3-card w3-green w3-padding" style="height: 150px;">
      <b><h2>Edit User</h2></b>
      <i class="fa fa-list" style="font-size: 75px;"></i> 
      <span style="float: right; font-size: 50px; font-weight: bold;">  
        <?php
          
         ?>  
      </span>
    </div></a>
  </div>
</div>
</body>
</html>