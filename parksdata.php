<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vehicle_park');


if(isset($_POST['insert'])){
	$vehicle_number=$_POST['vehicle_no'];
	$type=$_POST['optradio'];
	$intime=date("h:i:s");
	$indate=date("y-m-d");
	$outdate='vehicle-in';
	$outtime='vehicle-in';
	$_SESSION['concate']=$indate." ".$intime;
	$bill=0;
	$user=$_SESSION['user'];
	$query="INSERT INTO $user(vehicle_no,type_of_vehicle,in_date,out_date,in_time,out_time,bill) VALUES ('$vehicle_number','$type','$indate','$outdate','$intime','$outtime','$bill')";
	mysqli_query($con,$query);
}
header('location:waiting.php');
?>