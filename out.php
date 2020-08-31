<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vehicle_park');
$user=$_SESSION['user'];
if(isset($_POST['update'])){

	$otime=date("h:i:s");
	$odate=date("y-m-d");
	$s="select * from $user where out_time='vehicle-in'";
	$result=mysqli_query($con,$s);
	$row=mysqli_fetch_assoc($result);
	$sno=$row['sno'];
	$itime=$row['in_time'];
	$idate=$row['in_date'];
	$type=$row['type_of_vehicle'];
	$past=strtotime($odate." ".$otime);
	$current=strtotime($_SESSION['concate']);
	$hours=($current-$past)/3600;
	$h=sprintf("%2d",$hours);
	$bill=0;
	if($type=='bicyle'){
		$bill=$h*10;
	}
	else if($type=='bike'){
		$bill=$h*15;
	}
	else{
		$bill=$h*30;
	}
	$update="UPDATE $user set out_time='$otime',out_date='$odate',bill='$bill' where sno='$sno'";
	mysqli_query($con,$update);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Out Vehicle</title>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style type="text/css">
		h1{
	color: #fff !important;
	margin-top: !important;
	margin-top: 50px;
	text-transform: uppercase;
	text-align: center;
}

	</style>
</head>
<body>
<a class="float-right" href="logout.php">Logout</a>
<h1><?php echo $bill; ?>/-</h1>
<h1><b>Your vehicle is out</b></h1>
</body>
</html>