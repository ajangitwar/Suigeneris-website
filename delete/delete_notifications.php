<?php

include("../php/core.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Notifications</title>
	 <style>
	  .card{
	  	height:auto;
	  	width:600px;
	  	margin-top:13%;
	  	border:0.5px solid black;
	  	box-shadow: 5px 5px 5px #0f0f0f;
	  }
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
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
			<form method="post" action="delete_notifications.php">
				<br>
				<h4 style="margin-bottom:15px">Enter the Title of the Notification to be deleted</h4>
				<input type="text" name="title" placeholder="Title" style="margin-top: 5px;width:70%;" required /><br>
				<input type="submit" value="delete" class="btn btn-primary" style="margin-bottom:15px;margin-top:10px" name="submit" /><br>
			</form>
		</div>
	</center>
	<?php

	delete_notifications($connect);

	?>

</body>
</html>