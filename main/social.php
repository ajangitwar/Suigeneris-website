<?php

include('../php/core.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>SOCIAL EVENTS</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link href="../css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top" style="background-image:url(img/bkwall.jpg);background-size: cover;background-attachment: fixed; background-repeat: no-repeat;">

   
   
    
    
    <div class="card bg-dark text-white" id="mainNav">
    <div class="card-body"><center><h1>SOCIAL EVENTS</h1></center></div>
  </div>
  <section class="p-0" id="portfolio">
      <div class="container">
      <?php

  $get = mysqli_query($connect, "SELECT * from social");
  if(mysqli_num_rows($get) > 0){
    $i = 0;
    while($row = mysqli_fetch_assoc($get)){
      echo "<br>";
      if($i%3 == 0){

        echo "<div class='row no-gutters popup-gallery'>";
        
                echo "<div class='col-lg-4 col-md-6 col-sm-8'>";
      
                echo '<a class="portfolio-box" href="data:image/jpg;base64,'.base64_encode($row['image']).'">';
        echo '<img class="img-fluid" src="data:image/jpg;base64,'.base64_encode($row['image']).'"style="height:250px;width:340px"/>';
        echo '</a></div>';
      }else{
        echo "<div class='col-lg-4 col-md-6 col-sm-8'>";
        echo '<a class="portfolio-box" href="data:image/jpg;base64,'.base64_encode($row['image']).'">';
        echo '<img class="img-fluid" src="data:image/jpg;base64,'.base64_encode($row['image']).'"style="height:250px;width:340px"/>';
        echo '</a></div>';
      }
      $i = $i  + 1;
          if($i == 3){
            echo "</div>";
            $i = 0;
          }
    }
  }else{
    ?>
      <script>alert('Currently Unavailable!!');</script>
    <?php
  }  
?>
</div>


 <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  
    <script src="../js/creative.min.js"></script>
</body>
</html>