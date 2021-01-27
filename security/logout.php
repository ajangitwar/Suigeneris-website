<?php
	
	include('../php/core.php');

	$user = $_SESSION['username'];
	$update = mysqli_query($connect,"UPDATE logs set logout_time = NOW()");
	$_SESSION['login'] = 0;
	session_destroy();
	header("location: ../index.php");

?>