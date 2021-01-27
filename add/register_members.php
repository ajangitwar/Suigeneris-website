<?php
include("../php/core.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Members</title>
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
	<form method = "post" action="register_members.php" enctype="multipart/form-data">
		<center><br>
			<h4>Add new Members</h4><br>
		<select name="category" style="width: 70%">

	<option>technical</option>
	<option>eventss</option>	
	<option>core</option>
	<option>media_documentation</option>
	<option>discipline</option>
	<option>pro</option>
	<option>sports</option>
	<option>decoration</option>
	<option>advisory</option>
	<option>mentor</option>

</select><br>
		<input type="text" maxlength="30" minlength="06" placeholder="Name" name = "name" required /><br>
		<input type="text" maxlength="10" minlength="5" placeholder="Year" name="year" required /><br>
		<input type="text" maxlength="30" minlength="4" placeholder="Post" name="post" required /><br>
		<input type="file" name="image" required /><br>
		<button type="submit" name="submit" class="btn btn-dark" style="margin-top: 10px;margin-bottom: 10px" >Register</button>
	<center>
	</form>
</div>
<center>
	<?php
		register_members($connect);
	?>

</body>
</html>