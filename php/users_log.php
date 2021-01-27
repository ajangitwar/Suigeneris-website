<?php

include("connect.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Logs</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
	margin-top:5%;
	font-size: 1rem;
	height:auto;
	border: 0.5px solid black;
}
tr{
	border:0.5px solid black;
}
td,th{
	max-width: 700px;
	border: 0.5px solid black;
}
.title{
	max-width:400px;
}
</style>
</head>
<body>
	<div class="card bg-dark text-white">
    <div class="card-body"><center><h1>User Logs</h1></center></div>
  </div><center>

		
	<div class="container">
			
					
<?php

	$get = mysqli_query($connect, "SELECT * from logs");
	if(mysqli_num_rows($get) > 0){
		$i = 1;
		echo "<table><tr><th>Sr. no.</th><th>Login ID</th><th class='title'>Login Time</th><th class='title'>Logout Time</th></tr>";
		while($row =mysqli_fetch_assoc($get)){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['loginid']."</td>";
			echo "<td>".$row['login_time']."</td>";
			echo "<td class='title'>".$row['logout_time']."</td></tr>";
			$i = $i + 1;
		}	
		echo "</table>";
	}
?>
</div>
	</center>
</body>
</html>