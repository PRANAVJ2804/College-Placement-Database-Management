<?php
session_start();
session_destroy();
//echo "<script>alert('Logout successful');</script>";
header('refresh:0;url=http://localhost:8088/placement/index.php');
?>
