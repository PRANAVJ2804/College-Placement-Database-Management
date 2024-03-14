<?php 
$con=mysqli_connect("localhost","root","","placementdb");   
session_start();
$un=$_POST['username'];
$pwd=$_POST['password'];
$utype=$_POST['userType'];
echo "<script>console.log('$un + $pwd + $utype');</script>";

$qry="Insert into users (username,password,usertype) values ('$un','$pwd','$utype')" ;

	if (mysqli_query($con,$qry)==true)
	{
		
		echo "<script>alert('New User Created');</script>";
		header('refresh:0;url=http://localhost:8088/placement/admdash.php');
	}		
	else
	{
		echo "<script>alert('could not update password');</script>";
		header('refresh:0;url=http://localhost:8088/placement/admdash.php');
	}


?>
