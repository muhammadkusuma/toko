<?php
include_once("config_user.php");

$id=$_GET['id'];

$result=mysqli_query($mysqli,"DELETE FROM users WHERE id=$id");

header("Location: ../frontend/dashboard.php");

?>