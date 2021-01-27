<?php
include("../php/core.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Events</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<style>
	  input{
	  	margin-top:5px;
	  	width:70%;
	  }
	  .card{
	  	height:auto;
	  	width:400px;
	  	margin-top:9%;
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
	<form method = "post" action="add_events.php" enctype="multipart/form-data">
		<center><br>
			<h4>Add new Events</h4><br>
		<select name="category" style="width: 70%">

	<option>tech</option>
	<option>non_tech</option>
</select><br>
		<input type="text" placeholder="Title" name = "title" required /><br>
		<input type="text" placeholder="Discription" name="discription" required /><br>
		<input type="text" maxlength= '10' placeholder="Phones" name="phone" required /><br>
		<input type="file" name="image" required /><br>
		<button type="submit" name="submit" class="btn btn-dark" style="margin-top: 10px;margin-bottom: 10px" >Add</button>
	<center>
	</form>
</div>
<center>
	<?php
		add_events($connect);
	?>

</body>
</html>