
<?php


include('../php/core.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
.card1{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	transition: 0.3s;
	width:260px;
	border:0.5px solid grey;
	border-radius: 1px 1px;
}
.card1:hover{
	box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}
.container{
	padding:2px 16px;
}
table{
	width: 100%;
	margin-top:10%;
	font-size: 1rem;
	height:auto;
	border: 0.5px solid black;
}
tr{
	border:0.5px solid black;
}
td,th{
	padding-top: 5px;
	padding-bottom: 5px;
	max-width: 700px;
	border: 0.5px solid black;
}
th{
	font-size:1.5rem;
}
.title{
	max-width:400px;
}

</style>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
 <div class="card bg-dark text-white">
    <div class="card-body"><center><h1>Projects</h1></center></div>
  </div><center>
	<div class="container">
			
<?php

	$get = mysqli_query($connect, "SELECT * from projects");
	if(mysqli_num_rows($get) > 0){
		$i = 1;
		echo "<table><tr><th><center>Sr. no.</th><th><center>Project Name</center></th><th class='title'><center>Aim</center></th></tr>";
		while($row =mysqli_fetch_assoc($get)){
			echo "<tr>";
			echo "<td><center>".$i."</center></td>";
			echo "<td><center>".$row['title']."</center></td>";
			echo "<td class='title'>".$row['discription']."</td></tr>";
			$i = $i + 1;
		}	
		echo "</table>";
	}
?>

		</div>
	</center>
</body>
</html>