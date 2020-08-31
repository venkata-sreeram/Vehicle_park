<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vehicle_park');

$name=$_POST['name'];
$phone_number=$_POST['phone'];
$address=$_POST['address'];
$user=$_POST['user'];
$pass=$_POST['password'];

$s="select * from customers where username='$user' && password='$pass'";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
	$row=mysqli_fetch_assoc($result);
	$_SESSION['name']=$row['name'];
	$_SESSION['user']=$row['username'];
	header('location:user-account.php');
}
else{
	header('location:login.php');
}
?>