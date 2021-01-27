<?php

include("../php/core.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title>Non Technical Events</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suigeneris</title>
    <link rel="icon" href="logo.png"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link href="../css/creative.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/style1.css">

    <link rel="stylesheet" href="css/gallery.css"> 
    <link rel="stylesheet" href="style.css">
 


</head>
<style type="text/css">
  .card{
    height: 470px;
    width: 350px; 
  }
</style>
<body style="background-image:url(../img/bkwall.jpg);background-size: cover;background-attachment: fixed; background-repeat: no-repeat;">
    <div class="card1 bg-dark text-white">
    <div class="row card-body">
      <div class="col-2">

      </div>
    <div class="col-8"><center><h1>Non Technical Events</h1></center></div>
  </div>
</div>
  <div class="container" >
  <?php 


  $get = mysqli_query($connect, "SELECT * from non_tech");
  if(mysqli_num_rows($get) > 0){
    $i = 0;
    while($row = mysqli_fetch_assoc($get)){
      echo "<br>";
      if($i%3 == 0){
  echo '


    <div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8">

<div class="card-cont">
  <div class="card">
    <div class="front">
      <img class="image"  id="gal"  src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" />
      
    </div>
    <div class="back">
       <h3 class="synopsis">'.$row['title'].'</h3><br>
      <p>'.$row['discription'].'</p><br>
      <p>'.'<b>Contact : </b>'.$row['number'].'</p><br>
   
    </div>
  </div>
</div>   
 </div>
 ';
}
else{
 echo '
<div class="col-lg-4 col-md-6 col-sm-8">
      
<div class="card-cont">
  <div class="card">
    <div class="front">
    
      <img class="image" id="gal" src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" />
      
    </div>
    <div class="back">
      <h3 class="synopsis">'.$row['title'].'</h3><br>
      <p>'.$row['discription'].'</p><br>
      <p>'.'<b>Contact : </b>'.$row['number'].'</p><br>
    </div>
  </div>
</div>
    </div>
';
}
      $i = $i  + 1;
          if($i == 3){
            echo "</div></div>";
            $i = 0;
          }
        }
      }else{
        echo "<script>alert('Currently not Available!!');</script>";
      }
    ?>
  </div>
</body>
</html>