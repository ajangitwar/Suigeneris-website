<?php

include('../php/core.php');


$delete = mysqli_query($connect,"truncate table social") or die();
if($delete){
	echo "<script>alert('Deleted Successfully!!');
	window.location.assign('../handler/updates_handler.php');</script>";
}
?>