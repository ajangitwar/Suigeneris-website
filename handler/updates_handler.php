<?php

include("../php/core.php");

if($_SESSION['login'] == 0){
  header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Event Handler</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
	  <div class="jumbotron" style="background-color:#000; color:white;">
   <center><strong><h1>Update<font color="red"> Panel</font></h1></strong>      
    	<p><font size="4px">Handle Notitfications Here..</font></p>
    </center>
  </div>
  <center>
  	<div class="container" style=" padding-top:5px;width:auto;">
		<div class="row">
		  <!-- Button to Open the Modal -->
		<div class="col-3"> <a  href="../add/add_social_event.php"><button type="button" class="btn btn-primary" style="width: 160px">
			Add Social Events
		  	</button></a>
		</div>
		<div class="col-3"> <a  href="../add/add_events.php"><button type="button" class="btn btn-primary" style="width: 160px">
			Add Events
		  	</button></a>
		</div>
		<div class="col-3"> 
		  <a href="../main/delete_events.php"><button type="button" class="btn btn-primary" style="width:160px;">
		    Delete Events
		  </button></a>
		</div>
		<div class="col-3"> 
			<form method="post" action="delete_social_events.php">
		  <a href="../delete/delete_social_events.php"><button type="button" onclick="return confirm('Are you sure you want to delete all the entreis in the Social Tab');" class="btn btn-primary" style="width:160px;">
		    Delete Social Events
		  </button></a>
		</form>
		</div>
	</div>
</div>
	<br>

    <div class="jumbotron" style="background-color:#000; color:white; height:311px; background-attachment:fixed; margin-bottom: -10px;">

    </div>  

</body>
</html>