<?php

include('php/core.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <style>
  input{
    width: 70%;
    margin-top:5px;
  }
  .card{
      height:auto;
      width:600px;
      margin-top:13%;
      border:0.5px solid black;
      box-shadow: 5px 5px 5px #0f0f0f;
    }
  </style>

</head>
<body>
  <center>
    <div class="card">
      <center>
        <form method="post" action="verify_login.php">    
          <img src = "img/login.png" style="height:100px;width:100px;margin-top:20px;margin-bottom: 20px"><br>
          <input type="text" name="username" placeholder="Username" min-length='10' max-length='30' required/><br>
          <input type="password" name="password" placeholder="Password" min-length='10' max-length='30' required /><br>
          <button type="submit" name='submit' class="btn btn-success" style="margin-top:10px;margin-bottom:10px">Login</button>
        </form>
      </center>
    </div>
  </center>
  <?php
  
  verify_admin($connect);

  ?>

</body>
</html>