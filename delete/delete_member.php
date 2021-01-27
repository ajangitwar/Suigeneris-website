<?php

include("../php/core.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Members</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
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
			<form method="post" action="delete_member.php">
				<input type="text" placeholder="Member Name" name="name" style="margin-top:30px;width:70%" required /><br>
				<select name="category1" style="margin-top:15px; width:60%">
					<option>--select--</option>
					<option>technical</option>
					<option>event</option>	
					<option>core</option>
					<option>media_documentation</option>
					<option>discipline</option>
					<option>pro</option>
					<option>sports</option>
					<option>decoration</option>
					<option>advisory</option>
					<option>mentor</option>
				</select><br>
				<button type="submit" class="btn btn-outline-success" name="submit" style="margin-top:15px;margin-bottom: 15px">Delete</button>
			</form>
				</center>
				<form method="post" action="delete_all.php">
				<select name="category" style="margin-top:15px; width:60%">
					<option>--select--</option>
					<option>technical</option>
					<option>event</option>	
					<option>core</option>
					<option>media_documentation</option>
					<option>discipline</option>
					<option>pro</option>
					<option>sports</option>
					<option>decoration</option>
					<option>advisory</option>
					<option>mentor</option>
				</select><br>
				<a href="delete_all.php"><button type="submit" style="margin-top:15px;margin-bottom: 15px" class="btn btn-outline-success">Delete All</button></a>
			</form>
	
			<?php
				select_all_members($connect);
			?>
</body>
</html>