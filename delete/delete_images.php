<?php

include("../php/core.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Images</title>
	 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	  .card{
	  	height:auto;
	  	width:600px;
	  	margin-top:13%;
	  	border:0.5px solid black;
	  	box-shadow: 5px 5px 5px #0f0f0f;
	  }
	</style>
</head>
<body>
	<div class="row">
		<div class="col-1 offset-10">
			<a href="../security/main.php">
				<button class="btn btn-dark" style="margin-top:30px">Back</button>
			</a>
		</div>
	</div>
	<center><div class="card">
		<center>
			<form method="post" action="delete_images.php">
				<select name="category" style="margin-top:15px ">
					<option>--select--</option>
					<option>techno</option>
					<option>forum</option>
					<option>alumini_meet</option>
					<option>traditional_day</option>
					<option>naac_visit</option>
					<option>neeri_visit</option>
				</select><br>
				<button type="submit" class="btn btn-outline-success" name="submit" style="margin-top:15px;margin-bottom: 15px">Delete</button>
				</center>
			</form>
	
			<?php
				delete_images($connect);
			?>
</body>
</html>