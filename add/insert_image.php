<?php
include("../php/core.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
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
	<center>
		<div class="card">

			<form method="post" action = "insert_image.php" enctype="multipart/form-data">
				<br>
				<h4>Please select the category before Submitting!!</h4><br>
				<select name="category" style="margin-top:15px" required>
					<option>--select category--</option>
					<option>techno</option>
					<option>forum</option>
					<option>alumini_meet</option>
					<option>traditional_day</option>
					<option>naac_visit</option>
					<option>neeri_visit</option>
				</select><br>
				<input type="file" name="image" style="margin-top:15px" required><br>
				<input type="submit" name="submit" class="btn btn-primary" value="Upload" style="margin-top:15px;margin-bottom: 15px;"><br>
			</form>
			<?php

			insert_image($connect);

			?>
		</div>
	</center>
</body>
</html>