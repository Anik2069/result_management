<?php
include "connection.php";
$name= $_POST['session'];
$query = mysqli_query($connection, "insert into session (session) values ('$name')");
echo "<script>
alert('Session Added');
window.location.href='borrowing.php';
</script>";
//header("Location: borrowing.php");
?>