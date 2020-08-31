<?php
session_start();
header('location:login.php');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vehicle_park');

$name=$_POST['name'];
$phone_number=$_POST['phone'];
$address=$_POST['address'];
$user=$_POST['user'];
$pass=$_POST['password'];

$s="select * from customers where username='$user'";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
	echo "User already taken!";
}
else{
	$reg="INSERT INTO customers(name,phone_number,address,username,password) values ('$name','$phone_number','$address','$user','$pass')";
	mysqli_query($con,$reg);
	$sql="CREATE TABLE $user(sno INT NOT NULL AUTO_INCREMENT,vehicle_no VARCHAR(10),type_of_vehicle VARCHAR(15),in_date date,out_date date,in_time time(6),out_time time(6),bill VARCHAR(10000),PRIMARY KEY(sno))";
	$result=mysqli_query($con,$sql) or die("Bad Create:$sql");
}
?>