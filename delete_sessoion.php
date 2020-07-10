<?php
include "connection.php";
$v= $_GET['xxx'];
$vv=mysqli_query($connection,"delete from session where session_id='$v'");
header("Location: ../borrowing.php");
?>

