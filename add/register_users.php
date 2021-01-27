<?php

include('../php/core.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <style>
	  input{
	  	margin-top:5px;
	  	width:70%;
	  }
	  .card{
	  	height:auto;
	  	width:400px;
	  	margin-top:6%;
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
	<div class='card'>
		<form method="post" action="register_users.php">

			<br>
			<center><img src = "../img/register.png" style="width:100px;height:100px"></center><br>
			<input type='text' placeholder="Name" name="name" minlength="10" maxlength="30" required><br>
			<input type='text' placeholder="Username" name="username" minlength="10" maxlength="30" required><br>
			<input type='number' placeholder="Mobile" name="mobile" minlength="10" maxlength="30" required><br>
			<input type='email' placeholder="Email" name="email" minlength="10" maxlength="30" required><br>
			<input type='password' placeholder="Password" name="password" minlength="10" maxlength="30" required><br>
			<input type='password' placeholder="Confirm Password" name="cpassword" minlength="10" maxlength="30" required><br>
			<button type="submit" name="submit" class="btn btn-primary" style="margin-bottom:10px;margin-top:10px">Register</button>
		</form>

		<?php

		register_admin($connect);

		?>
	</div>
	</center>
</body>
</html>



