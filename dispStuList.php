<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#newJob").click(function(){
    $("#contents").load("CreateJob.php");
  });
  $("#newUser").click(function(){
    $("#contents").load("NewUser.php");
  });
    
  $("#ChangePwd").click(function(){
    $("#contents").load("chngpwd.php");
  });
  $("#UpdateRes").click(function(){
    $("#contents").load("AdmnJobResult.php");
  });
});
</script>
</head>
<body>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="container">
	<div class="top-menu">
	College Placement System
	</div>
	<div class="login-menu">
	<a href="logout.php"><?php session_start();  echo $_SESSION['username'];?>&nbspLogout</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</div>
	<div class="clearfix">
	<div class="left-menu">
		<div class="listItem"><a id="newJob" href="#"> Create a New Job</a></div>
		<div class="listItem"><a id="newUser" href="#"> Add a New user</a></div>
		<div class="listItem"><a id="ChangePwd" href="#">Change password</div>
		<div class="listItem"><a id="UpdateRes" href="#">Update Result</div>
	</div>
	
	<div class="dataform" ">
	<div class="form-data" id="contents" style=" box-shadow: 10px 10px lightgrey;">
	<?php
// dispStuList.php

// Check if form is submitted
if(isset($_POST['submit']) || $_GET['updateSuccess'] == 1) {
    if(isset($_POST['jid'])) {
		$jobID = $_POST['jid'];
	} elseif(isset($_GET['jobID'])) {
		$jobID = $_GET['jobID'];
		// Use $jobID as needed
	}
    // Connect to database
    $con = mysqli_connect("localhost", "root", "", "placementdb");
    
    // Select all students applied for the selected job
    $qry = "SELECT * FROM jobapply_tbl WHERE JobID = $jobID";
    $run = mysqli_query($con, $qry);
    
    // Display the list of students with update options
    echo '<html><body><table align="center" border="1" width="100%">';
    echo '<th>Student Name</th><th>Status</th>';
    while ($row = mysqli_fetch_array($run)) {
        $studentName = $row['StuID'];
        $status = $row['Qualified'];
        echo '<tr><td>'.$studentName.'</td>';
        echo '<td><form method="post" action="updateStatus.php">';
        echo '<select name="status">';
        echo '<option value="1" '.($status==1 ? 'selected' : '').'>SELECTED</option>';
echo '<option value="0" '.($status==0 ? 'selected' : '').'>NOT SELECTED</option>';
echo '<option value="NULL" '.($status===NULL ? 'selected' : '').'>Not Yet Decided</option>';
echo '</select>';
        echo '<input type="hidden" name="studentID" value="'.$studentName.'">';
        echo '<input type="hidden" name="jobID" value="'.$jobID.'">';
        echo '<input type="submit" name="update" value="Update"></form></td></tr>';
    }
    echo '</table></body></html>';
}
?>
	</div>
	</div>
	</div>
</div>

</body>
</html>