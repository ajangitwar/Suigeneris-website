
<?php
include("../php/core.php");

if($_SESSION['login'] == 0){
  header("location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<title>Admin Panel</title>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	// For the preview of Image
  	function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
  <style type="text/css">
  	input{
  		margin-top: 15px;
  		border-color: none;
  		padding-bottom: 10px;
  		width: 60%;

  	}
  </style>
</head>
<body>
  <div class="jumbotron" style="background-color:#000; color:white;">
    <div class="row">
      <div class="col-2 offset-1">
        <a href="../php/users_log.php" target="">
          <button type="submit" class="btn btn-primary">View Logs</button>
        </a>
      </div>
      <div class="col-2 offset-6">
        <center>
            <a href="logout.php">
            <button type="submit" onclick="return confirm('Are you sure you want to logout!')" class="btn btn-danger">Logout</button>
        </a>
      </center>
      </div>
    </div>
   <center><strong><h1>Admin Panel</h1></strong>      
    	<p>No one is Allowed here...Except
    	<strong><font color="red" size="5px">Admin</font></strong>
    	....!
    	</p>
    </center>
  </div>
<center>
<div class="container" style=" padding-top:5px;width:auto;">
<div class="row">
		  <!-- Button to Open the Modal -->
	<div class="col-2"> <a  href="../handler/update_images.php"><button type="button" class="btn btn-primary">
			Update Images
		  </button></a>
	</div>
	<div class="col-2"> 
		  <a href="../add/register_users.php"><button type="button" class="btn btn-primary" style="width:150px;">
		    Register
		  </button></a>
	</div>
	<div class="col-2"> 
		  <a href="../handler/updates_handler.php"><button type="button" class="btn btn-primary">
		    Handle Events
		  </button></a>
	</div>
	<div class="col-2"> 
		  <a href="../handler/members_handler.php"><button type="button" class="btn btn-primary">
		    Manage Members
		  </button></a>
	</div>
	<div class="col-2"> <a href="../handler/projects_handler.php">
		  <button type="button" class="btn btn-primary">
		    Handle Projects and FAQ
		  </button></a>
    </div>
  <div class="col-2"> <a href="../handler/notification_handler.php">
      <button type="button" class="btn btn-primary">
        Notifications
  </button></a>
  </div>
	</div>
</div>
</center>
<br><br>
 <div class="jumbotron" style="background-color:#000; color:white; height:311px; background-attachment:fixed; margin-bottom: -10px;">

  </div>     
</body>
</html>
