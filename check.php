<form method="get">
<?php
$conn = mysqli_connect("localhost", "root", "","placementDB");

$un = $_POST["uname"];
$ut = $_POST["usertype"];
$pwd = $_POST["pwd"];

$sql = "SELECT password, usertype from users where username='$un'";
$retval = mysqli_query( $conn, $sql  );

while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
{
    if ($row['password'] == $pwd && $row['usertype'] == $ut)
    {
	echo "login successful<br> ";
	session_start();
	$_SESSION['username'] = $un;
	if ($ut == "S")
		header('refresh:0;url=http://localhost:8088/placement/studash.php?uname='.$un);
	else if ($ut == "A")
		header('refresh:0;url=http://localhost:8088/placement/admdash.php?uname='.$un);
     }
    else
    {
	  echo "<script>alert('username or password incorrect');</script>";
	  if ($ut == "S")
		    header('refresh:0;url=http://localhost:8088/placement/stulogin.php');
	else if ($ut == "A")
		header('refresh:0;url=http://localhost:8088/placement/adminlogin.php');
    }
   } 
   
   mysqli_close($conn);
?>
</form>