<?php
session_start();

$_SESSION["department"]=$_POST["department"];
$_SESSION["session_year"]=$_POST["session_year"];
$_SESSION["year"]=$_POST["year"];
$_SESSION["exam"]=$_POST["exam"];
header("Location:tabulation.php");
?>