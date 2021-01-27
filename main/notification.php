
<?php


include('../php/core.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Notificaton</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
.card1{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	transition: 0.3s;
	width:260px;
	border:0.5px solid grey;
	height: 300px;
	background-color:#fff;
}
.card1:hover{
	box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}
.container{
	padding:2px 16px;
}

</style>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body style="background-image:url(../img/bkwall.jpg);background-size: cover;background-attachment: fixed; background-repeat: no-repeat;">
 <div class="card bg-dark text-white">
    <div class="card-body"><center><h1>Notification</h1></center></div>
  </div>
	<div class="container">
			
<?php

	$get = mysqli_query($connect, "SELECT * from notification");
	if(mysqli_num_rows($get) > 0){
		$i = 0;
		while($row = mysqli_fetch_assoc($get)){
			echo "<br>";
			if($i%4 == 0){
				echo "<div class='row'>";
				echo "<div class='col-3'>";
				echo '<div class="card1">';
				echo '<div class="card-body"><div class="container">';

				echo '<b><h4>'.$row['title'].'</h4></b>';
				echo "<hr>";
				echo '<h5>'.$row['discription'].'</h5></center>';
				echo '</div></div></div></div>';

			}else{
				echo "<div class='col-3'>";
				echo '<div class="card1">';
				echo '<div class="card-body"><div class="container">';

				echo '<b><h4>'.$row['title'].'</h4></b><hr>';
				echo '<h5>'.$row['discription'].'</h5></center>';
				echo '</div></div></div></div>';

			}
			$i = $i  + 1;
			  	if($i == 4){
		  			echo "</div>";
		  			$i = 0;
		  		}
		}
	}		
?>