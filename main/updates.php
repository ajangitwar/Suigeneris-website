<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style>
.card1{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	transition: 0.3s;
	width:480px;
	border:2px solid;
	height: 250px;
	background-color:#fff;
	color:#fff;

}
.card2{
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
  }
.card1 button{
	margin-top:40px;
	padding: 10px;
	width: 100px;
	font-size:15px;
}
.card1:hover{
	box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}
body{
	
}
h2{
	margin-top:70px;
}

</style>
</head>

<body style="background-image:url(../img/bkwall.jpg);background-size: cover;background-attachment: fixed; background-repeat: no-repeat;"> <div class="card2 bg-dark text-white">
    <div class="card-body"><center><h1>Our Events</h1></center></div>
  </div>
	<div class="container" style="margin-top: 10px;">
		<div class="row">
			<div class="col-4" style="margin-bottom: 10px;">
				<div class="card1" style="background-image:url(../img/bk1.jpg);">
					<center>
						<h2>Technical Events</h2>
						<a href="technical_events.php"><button class="btn btn-light">See More..</button></a>
					</center>
				</div>		
			</div>
		</div>
		<div class="row" >	
			<div class="col-lg-6 offset-6" style="margin-bottom: 10px;">
				<div class="card1" style="background-image:url(../img/bk2.jpg);background-repeat: no-repeat;background-size: cover;">
					<center>
							<h2 style="color:black;">Social Activity</h2>
							<a href="social.php"><button class="btn btn-light">See More..</button></a>
					</center>
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-4" style="margin-bottom: 10px;">
				<div class="card1" style="background-image:url(../img/bk3.jpg);">
					<center>
						<h2>Non-Technical Events</h2>
						<a href="nont-tech.php"><button class="btn btn-light">See More..</button></a>
					</center>
				</div>		 
			</div>
		</div>
	</div>
		