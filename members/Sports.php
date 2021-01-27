
<?php


include('../php/core.php');
?>



<!DOCTYPE html>
<html>
<head>
  <title>Sports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/membercard.css">
</head>
<style type="text/css">
  .card1 {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
}
</style>

<body>
 <div class="card bg-dark text-white">
    <div class="card-body"><center><h1>Sports</h1></center></div>
  </div>
  <div class="container">
      
<?php

  $get = mysqli_query($connect, "SELECT * from sports");
  if(mysqli_num_rows($get) > 0){
    $i = 0;
    while($row = mysqli_fetch_assoc($get)){
      echo "<br>";
if($i%4 == 0){
        echo "<div class='row'>";
        echo "<div class='col-sm-3'>";
        echo '<div class="card1">';
        echo '<figure class="front">';
        echo '<img src="../add/img/'.$row['image'].'"style="height:250px;width:auto;">';
        echo '<div class="caption">';

        echo '<h2>'.$row['name'].'</h2>';
        echo '<p>'.$row['post'].'</p>';
        echo '<center><h1>'.$row['year'].'</h1></center>';
        echo '</div></figure></div></div>';
      }else{
        echo "<div class='col-sm-3'>";
        echo '<div class="card1">';
        echo '<figure class="front">';
        echo '<img src="../add/img/'.$row['image'].'"style="height:250px;width:auto;">';
        echo '<div class="caption">';

        echo '<h2>'.$row['name'].'</h2>';
        echo '<p>'.$row['post'].'</p>';
        echo '<center><h1>'.$row['year'].'</h1></center>';
        echo '</div></figure></div></div>';
      }
      $i = $i  + 1;
          if($i == 4){
            echo "</div>";
            $i = 0;
          }
    }
  }   
?>
