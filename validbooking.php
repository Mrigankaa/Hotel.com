<?php
    include("connection.php");
	session_start();
    if (isset($_POST['submit']))
    {
		$email = $_SESSION['email'];
		$people = $_POST['people'];
		$address=$_POST['address'];
    	$cin=$_REQUEST['checkin'];
    	$cout=$_REQUEST['checkout'];
		$sdate=$cin;
		$edate=$cout;
		$n= date('Y-m-d');
		$cin = strtotime($cin);
        $cout = strtotime($cout);
		$bookedFrom = date('Y-m-d', $cin);
        $bookedUpto = date('Y-m-d', $cout);
        $diff = ceil(($cout - $cin )/(60 * 60 * 24));
		if($bookedFrom < $bookedUpto)
		{
			if($bookedFrom < $n)
		{
			header( 'location:index.php?error=1');
		}	
		else if($sdate>$edate)
		{
    		 header( 'location:index.php?error=1');
    	}
        else
		{
				
		}
	}
}

?>