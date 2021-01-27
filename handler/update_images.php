<?php

include("../php/core.php");

if($_SESSION['login'] == 0){
  header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Image Handler</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
	  <div class="jumbotron" style="background-color:#000; color:white;">
   <center><strong><h1>Update<font color="red"> Panel</font></h1></strong>      
    	<p><font size="4px">Handle Images Here..</font></p>
    </center>
  </div>
  <center>
  	<div class="container" style=" padding-top:5px;width:auto;">
		<div class="row">
		  <!-- Button to Open the Modal -->
		<div class="col-4 offset-2"> <a  href="../add/insert_image.php"><button type="button" class="btn btn-primary">
			Add Images
		  	</button></a>
		</div>
		<div class="col-4"> 
		  <a href="../delete/delete_images.php"><button type="button" class="btn btn-primary" style="width:150px;">
		    Delete Images
		  </button></a>
		</div>
	</div>
</div>
	<br>

    <div class="jumbotron" style="background-color:#000; color:white; height:311px; background-attachment:fixed; margin-bottom: -10px;">

    </div>  

</body>
</html>