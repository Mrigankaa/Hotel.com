<?php
    include("connection.php");

        $h_name = $_POST["hotel_name"];
        $room = $_POST["room"];
        $price = $_POST["price"];
        $des = $_POST['des'];
        $hotel_type = $_POST["type"];
        $status = "Available";

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["url"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        if ($_FILES["url"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
      
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["url"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["url"]["name"])). " has been uploaded.";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
    
        $sql = "INSERT INTO hotels(hotel_name,rooms,price,photo,description,status,hotel_type) VALUES('$h_name','$room','$price','$target_file','$des','$status','$hotel_type')";
        $result = mysqli_query($con,$sql);
        if($result){
            header('Location:addhotel.php?save=1');
        }else{
            echo mysqli_error($con);
        }
?>    
