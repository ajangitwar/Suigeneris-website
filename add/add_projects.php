<?php

include("../php/core.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Projects</title>
    <style>
	  .card{
	  	height:auto;
	  	width:600px;
	  	margin-top:13%;
	  	border:0.5px solid black;
	  	box-shadow: 5px 5px 5px #0f0f0f;
	  }
  input{
  	width:70%;
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
			<form method="post" action="add_projects.php">
				<br>
				<h5>Add New Projects Here!!</h5>
				<input type="text" name="title" placeholder="Title" style="margin-top: 5px" required /><br>
				<input type="address" name="discription" placeholder="Discription" style="margin-top: 5px" required /><br>
				<button type="submit" class="btn tn-primary" name="submit" style="margin-bottom: 15px;margin-top:15px">Add Projects</button>
			</form>

			<?php

			add_projects($connect);

			?>
		</div>  
	</center>
</body>
</html>

</body>
</html>