<?php

include("../php/core.php");

//delete all

$category = $_POST['category1'];
$truncate = mysqli_query($connect,"truncate table $category");
if($truncate){
	echo  "<script>alert('Deleted Successfully!!');</script>";
}
else{
	echo "<script>alert('Failed to Delete');</script>";
}
?>