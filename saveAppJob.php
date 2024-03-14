<?php 
$con=mysqli_connect("localhost","root","","placementdb");   
session_start();
$sid=$_SESSION['username'];
$jid=$_POST['jid'];

// Check if the student has already applied for the job
$checkQuery = "SELECT * FROM jobapply_tbl WHERE StuID = '$sid' AND JobID = $jid";
$checkResult = mysqli_query($con, $checkQuery);
if(mysqli_num_rows($checkResult) > 0) {
	echo "<script>alert('You have already applied for this job.');</script>";
	header('refresh:0;url=http://localhost:8088/placement/studash.php');
	exit();
}

$qry="insert into jobapply_tbl (StuID, JobID) values ('$sid',$jid)";

if (mysqli_query($con,$qry)==true)
{
	echo "<script>alert('Applied for Job');</script>";
	header('refresh:0;url=http://localhost:8088/placement/studash.php');
}		
else
{
	echo "<script>alert('could not save data');</script>";
	header('refresh:0;url=http://localhost:8088/placement/studash.php');
}
?>