<?php
    include("connection.php");
	session_start();
   
		$user_id = $_SESSION['id'];
		$hotel_name = $_POST['name'];
		$hotel_id = $_POST['id'];
		$people = $_POST['people'];
		$address=$_POST['address'];
    	$cin=$_REQUEST['checkin'];
    	$cout=$_REQUEST['checkout'];
		$sdate=$cin;
		$edate=$cout;
		$n=date('Y-m-d');
		$cin = strtotime($cin);
        $cout = strtotime($cout);
		$bookedFrom = date('Y-m-d', $cin);
        $bookedUpto = date('Y-m-d', $cout);
        $diff = ceil(($cout - $cin )/(60 * 60 * 24));
		$status = "Unbooked";

		$room_booked = floor($people/2)+$people%2;

		$sql = "UPDATE hotels SET rooms = rooms-$room_booked WHERE hotel_id=$hotel_id";
		$r = mysqli_query($con,$sql) or die($con);

		$sql3 = "SELECT price from hotels WHERE hotel_id='$hotel_id'";
		$r3 = mysqli_query($con,$sql3);
		$result = mysqli_fetch_array($r3);
		$price = $result[0]*$diff*$room_booked;
		
		$sql1 = "SELECT rooms from hotels WHERE hotel_id=$hotel_id";
		$r1 = mysqli_query($con,$sql1);	
		$row = mysqli_fetch_array($r1);
		if($row[0]==0){
			$sql2 = "UPDATE hotels SET status = 'Unavalable' WHERE hotel_id=$hotel_id";
			$r2 = mysqli_query($con,$sql2);
		}

		if($bookedFrom < $bookedUpto)
		{
			if($bookedFrom < $n)
		{
			header('location:hotel.php?error=1');
		}	
		else if($sdate>$edate)
		{
    		header('location:hotel.php?error=1');
    	}
        else
		{
			$sql = "INSERT INTO hotel_book(hotel_name,checkin,checkout,people,price,address,status,user_id,hotel_id) 
					VALUES('$hotel_name','$sdate','$edate','$people','$price','$address','$status','$user_id','$hotel_id')";
			$r = mysqli_query($con,$sql);
			if(!$r){
				mysqli_error($con);
				header("location:hotel.php");
			}
			else{
				header("location:payment.php?hotel_name=$hotel_name&price=$price");
			}
		}
	}

?>