<?php
// updateStatus.php

// Check if form is submitted
if(isset($_POST['update'])) {
    $studentID = $_POST['studentID'];
    $jobID = $_POST['jobID'];
    $status = $_POST['status'];

    // Connect to database
    $con = mysqli_connect("localhost", "root", "", "placementdb");
    
    // Update the status in jobapply_tbl
    $qry = "UPDATE jobapply_tbl SET Qualified=$status WHERE JobID = $jobID AND StuID ='$studentID'";
    mysqli_query($con, $qry);
    
    // Redirect back to dispStuList.php
echo "<script>alert('Updated'); window.location='dispStuList.php?updateSuccess=1&jobID=$jobID';</script>";
exit();

}
?>
