<?php

include("php/core.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suigeneris</title>
	  <link rel="icon" href="img/logo.png"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    

    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
   

    <link href="css/creative.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style1.css">

    <link rel="stylesheet" href="css/gallery.css"> 
    <link rel="stylesheet" href="style.css">


  </head>

  <body id="home" >




    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
   	
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="" id="home"  p"><img style="height:45px;margin:0px;" src="img/logo1.png"/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home" data-toggle="tooltip" title="Home"><i style="height:30px; width:auto;" class="fa fa-2x fa-home"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#forum" data-toggle="tooltip" title="Members List"><i style="height:30px;width:auto;" class="fa fa-2x fa-users"></i></a>

            </li>
            <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="#Gallery" data-toggle="tooltip" title="Gallery"><i style="height:30px;width:auto;" class="far fa-2x fa-images"></i></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#events" data-toggle="tooltip" title="Events"><i style="height:30px;width:auto;" class="far fa-2x fa-calendar-alt"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="tooltip" title="Notification" href="main/notification.php"><i style="height:30px; width:auto;" class="fa fa-2x fa-bell"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="tooltip" title="Projects" href="main/projects.php"><i style="height:30px; width:auto;" class="fas fa-2x fa-tasks"></i></a>
            </li>
            <li class="nav-item" style="margin-left: 50px;padding-top:10px">
              <?php

                $fetch = mysqli_query($connect,"SELECT * from counter") or die('Failed to Fetch');
                while($row = mysqli_fetch_assoc($fetch)){
                  $current_count = $row['counts'];
                  $updated_count = $current_count + 1;
                  $update = mysqli_query($connect,"UPDATE counter set counts = '$updated_count'");
                  echo '<font color="white">'.$updated_count.' Visits</font>';
                }

              ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>


        <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>
    <header class=" text-center text-white">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12" style="padding-right: 0px;padding-left: 0px;"> 
              <div class="jumbotron" style="background-color:#000;margin-bottom:-20px;padding-top: 2%;">
                   <img src="img/logo3.png"  height="180" width="210" class="big_logo"/> 
               

              <h1 class="text-uppercase">
               <strong style="font-size:50px;color:#fff;"><<font style='display:none;'>.</font><font style="color:#008cdf;">SUI</font><span class="site__title">GENER</span><font style="color:#008cdf;">I</font><span class="site__title">S</span>/></strong>
              <h1 class="vertical" style="font-size:30px;">Department of Computer Science & Engineering</h1>
            </h1><center>
            <span class="site__title"><hr style="width:25%;"/><hr style="width:11%;"/><hr style="width:3%;"/><hr  style="width:2px"/></span></center></canvas>
            <p class="lead" >
       
        <div id="particles-js" class="part" particles-number-value:"100"></div>
      </p>
          </div >
            </div>
        </div>
      </div>
    </header>
<marquee behaviour="" direction="left" style="background-color: #ccc;padding-top:22px;">
<table>
<tr>
  <td><img src="http://gifimage.net/wp-content/uploads/2017/08/michael-jackson-moonwalk-gif-6.gif" style="height:60px;"></td>
  <td style="padding-bottom:0px;">
    <span  class="marq"><b>Projects Are Available For Students, Check </b></span>
     <i class="fas  fa-tasks"></i> 
    <span  class="marq"><b> (Project Tab).</b> </span>
  </td>
</tr>
</table>
</marquee>
    <section id="info" style="padding-top:20px;">
      <div class="container">
        <div class="row">
          <div class="offset-1 col-lg-10 offset-1 text-center">
           <center> <h2 class="section-heading text-white"></h2>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <font size="5px"> <b id="Vision"> Vision:</b>
            <hr style="width:35%;border-color:#f05f40;">
                  </font>
                         <br>
                      <p align="center"><font size="4px"><b>To become a center for quality education in the field of computer science & engineering and to create competent professionals.</b></font></p><br>
                      <font size="5px"> <b>Mission:</b></font>
            <hr style="width:35%;border-color:#f05f40;">
                      <br>
                      <p align="left"><font size="4px">
                      To provide academic ambience and latest software tools to prepare competent Software Engineers with strong theoretical and practical knowledge.<br>
                      To foster professionalism and strong work ethics in students for the betterment of Society.<br>
                      To provide adequate infrastructure as well as experienced & skilled faculty members.<br>
                      To encourage the spirit of entrepreneurship and adaptability in our students in view of the ever-changing scenario of the Software Industry.
                    </p></font>


                </div>
                <div class="carousel-item">

                   <font size="4px"> <b>About Suigeneris:</b></font>
            <hr style="width:35%;border-color:#f05f40;">
                   <br>
                   <p align="justify"><font size="4px">suiGENERIS means its own kind and this goes hand in hand with the motto of the Student Forum to bring out the strengths of the students in unique manner which also leads to development of the students in all the aspects of life. suiGENERIS, the unique forum is organized and managed solely by the students of 3rd year and whole college participants. suiGENERIS organizes 3 days program which include various technical events like Brain Teaser, LAN Gaming ,etc. and non technical events like Arm Wrestling, Deadshot, etc. To fulfil the motto of the forum , suiGENERIS acts as a focal point at the institution for all around development of the students. It encourages the students to participate in various events and nurture their interest and skills. These activities also reflects and boosts the students leadership and management skills. The forum not only develops the students to be a better professionals but also develops them socially by providing them social awareness, to work for the betterment of the society. In this session, Forum has evolved the departmental magazine REVISTA 2K17 which was launched in the session 2016-2017, to provide a common platform for the students and teachers of the department to exchange ideas and information on the topics of their interest e.g. curriculum, employment/higher educational opportunities, emerging trends, new development etc. This initiative of the forum serves as the medium to know everyone in the department in a better way.</font></p>




                </div>
                <div class="carousel-item">
                  

                   <font size="4px"> <b>About Revista</b></font>
            <hr style="width:35%;border-color:#f05f40;">

                   <br>
                  <p align="justify"><font size="4px">Revista is a monthly magazine designed and conceptualized by students to bring forward the talent of the students and to make others aware about the various technical and non technical activities .The main aim of this magazine is to spread knowledge about
            various fields of interests available for younger generations to explorer upon. This magazine also provides a platform for students to showcase their talents and ideas. Apart from technical events,repots and articles, this magzine also covers non technical activities that should be under attention of every student . It highlightens the artistic and creative mind of students and also
provide them proper guidance to explore more of it.<br><b style="color:gray;font-family:arial;size:20px;">

                “Our ultimate aim is to balance the knowledge of the students with respect to all the latest trends and technologies.”</b></font></p>



                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                
              </a>
              </div>
          </div>
        </div>
      </div>
    </section>

      <center><div class="btn" id="download_magazine">Download Magazine</div><a href="main/faq.php"><div class="btn" id="download_magazine">FAQ's</div></a></center>

      <script>

        $(document).ready(function(){
          $('#download_magazine').click(function(){
            alert("Coming Soon!!");
          });
        });

      </script><br><br><br>
<div id="events">
        <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Events</h2>
            <hr style="width:35%;border-color:#f05f40;">
          </div>
        </div>
      </div><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card2" ><br><br>
          <center>
            <a href="main/technical_events.php" style="text-decoration: none;">
            <i class="fas fa-code text-light fa-7x"></i><br><br>
            <h1><font color="white"><b>Technical</b></font></h1>
          </a>
          </center>
        </div>        
      </div>
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card2"><br><br>
          <center>
            <a href="main/social.php" style="text-decoration: none;">
            <i class="fas fa-hands text-light fa-7x"></i><br><br>
            <h1><font color="white"><b>Social</b></font></h1>
          </a>
          </center>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card2"><br><br>
          <center>
            <a href="main/non_tech.php" style="text-decoration: none;">
            <i class="fas fa-cogs fa-7x text-light"></i><br><br>
            <h1><font color="white"><b>Non Technical</b></font></h1>
          </a>
          </center>
        </div>        
      </div>
    </div>
  </div>
</div>
   
   <section id="forum">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Forum Domains</h2>
            <hr style="width:35%;border-color:#f05f40;">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row offset-3">
          <div class=" col-lg-4 col-sm-6  text-center">
            <div class="service-box mt-5 mx-auto">
              <a style="text-decoration: none;" href="members/advisory.php">  
                <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3 text-primary">Advisory</h3>
              </a>  
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a style="text-decoration: none;" href="members/mentor.php">  
                <i class="fa fa-4x fa-universal-access text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3 text-primary">Mentor</h3>
              </a>  
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a style="text-decoration: none;" href="members/core_members.php">  
                <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3">Core</h3>
              </a>  
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
            <a style="text-decoration: none;" href="members/tech.php">
              <i class="fas fa-laptop-code mb-3 fa-4x sr-icons text-primary"></i>
              <h3 class="mb-3">Technical</h3>
            </a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a style="text-decoration: none;" href="members/Event.php">
                <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3">Event</h3>
              </a>
            </div>
          </div>
          <div class=" col-lg-3 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
            <a style="text-decoration: none;" href="members/PRO.php">
              <i class="fab fa-themeco fa-4x text-primary sr-icons mb-3"></i>
              <h3 class="mb-3">P.R.O</h3>
            </a>
            </div>
          </div>
        </div>
          <div class="row">
           <div class="col-lg-3 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a style="text-decoration: none;" href="members/Media&Documentation.php">             
                <i class="fa fa-camera-retro  mb-3 fa-4x sr-icons text-primary"></i>
                <h3 class="mb-3">Media<br> & Documentation</h3>
              </a>            
            </div>
          </div>
           <div class="col-lg-3 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a style="text-decoration: none;" href="members/Discipline.php">  
                <i class="fas fa-microphone-alt-slash  mb-3 fa-4x sr-icons text-primary"></i>
                <h3 class="mb-3">Discipline</h3>
              </a>
            </div>
          </div>
         <div class="col-lg-3 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a style="text-decoration: none;" href="members/Decoration.php">
               <i class="fas fa-palette fa-4x text-primary sr-icons mb-3"></i>
                <h3 class="mb-3">Decoration</h3>
              </a>
            </div>
          </div>
           <div class="col-lg-3 col-sm-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a style="text-decoration: none;" href="members/Sports.php">
                <i class="fas fa-futbol fa-4x text-primary sr-icons mb-3"></i>
                <h3 class="mb-3">Sports</h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><div  id="Gallery"></div>
   </section>

    <div class="container" >
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3 class="section-heading">Gallery</h3>
            <hr style="width:35%;border-color:#f05f40;">
          </div>
        </div>
      </div>

    <div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8">

<div class="card-cont">
  <div class="card">
    <div class="front">
      <img class="image"  id="gal"  src="img/forum1.jpeg" alt="" />
      
    </div>
    <div class="back">
      <h3 class="synopsis">Forum</h3>
      <p>suiGENERIS, the unique forum is organized and managed solely by the students of 3rd year and whole college participants. suiGENERIS organizes 3 days program which include various technical and non-technical events.</p><br>
      <a href="gallery/forum.php"><div class="btn">view</div></a>
    </div>
  </div>
</div>   
 </div>
<div class="col-lg-4 col-md-6 col-sm-8">
      
<div class="card-cont">
  <div class="card">
    <div class="front">
    
      <img class="image" id="gal" src="img/techno1.JPG" alt="" />
      
    </div>
    <div class="back">
      <h3 class="synopsis">Technotsav 2k18</h3>
      <p>Technotsav is the annual event of SBJITMR which was started in 2008 when the college was started. It is an inter-college event where students of various college across Nagpur parcticipate and show their skills. It helps in all over development of students.
    </p>
     <a href="gallery/techno.php"><div class="btn">view</div></a>
    </div>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8">
      

<div class="card-cont">
  <div class="card">
    <div class="front">
      
      <img class="image"  id="gal"  src="img/traditional1.JPG" alt="" />
       
    </div>
    <div class="back">
      <h3 class="synopsis">Traditional</h3>
      <p>Traditional day is the first day of 'Forum' which is celebrated with great enthusiasm by students.In order to make the young generation more aware about their Culture and Traditions. On this day, teachers as well as the students attend the college in the Traditional Attire to celebrate this day.</p>
     <a href="gallery/traditional_day.php"><div class="btn">view</div></a>
    </div>
  </div>
</div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8">

<div class="card-cont">
  <div class="card">
    <div class="front">
      <img class="image"  id="gal"  src="img/alumini1.JPG" alt="" />
      
    </div>
    <div class="back">
      <h3 class="synopsis">Alumini Interaction</h3>
      <p>Alumini meet is an initiative of the college where the aluminies of SBJITMR  reunite and share their experiances which they get from the industries. This helps in the development of the student. </p>
     <a href="gallery/alumini.php"><div class="btn">view</div></a>
    </div>
  </div>
</div>   
 </div>
    <div class="col-lg-4 col-md-6 col-sm-8">
      
<div class="card-cont">
  <div class="card">
    <div class="front">
    
      <img class="image" id="gal" src="img/naac1.JPG" alt="" />
      
    </div>
    <div class="back">
      <h3 class="synopsis">NAAC Visit</h3>
      <p>National Assessment and Accredation Council(NAAC) visited SBJITMR where they analysed the institute on various parameters.it is a priveliage that the college is accredated 'A' Grade by the NAAC.</p>
      <a href="gallery/naac_visit.php"><div class="btn">view</div></a>
    </div>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8">
      

<div class="card-cont">
  <div class="card">
    <div class="front">
      
      <img class="image"  id="gal"  src="img/neeri1.JPG" alt="" />
       
    </div>
    <div class="back">
      <h3 class="synopsis">NEERI Visit</h3>
      <p>NEERI visit was a departments initiative where the student visited National Environment Engineering Research Institute (NEERI).Where they were made aware about their role as an engineer towards the environment.</p>
     <a href="gallery/neeri_visit.php"><div class="btn">view</div></a>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

  

    <section  style="padding-top:0px; padding-bottom: 10px;background-color: #ff9933">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h3 class="section-heading">Suigeneris</h3>
            <hr style="border-color: #000; width:70%;">
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mr-auto text-center">
            <i class="fa fa-info-circle fa-3x mb-3"></i>
            <p>
              Suigenries Information
            </p>
            <p>Enquiry:- suigeneris@sbjit.edu.in</p><div class="row"><div class="col-6">
            <p><a style="color:#000;text-decoration: none;" href="our_team.html"><b>Tech Team</b></a></p></div><div class="col-6"><a style="color:#000;text-decoration: none;" href="contactme.html"><b>Contact Us</b></a></div></div>
            <p><i class="far fa-copyright"></i> All Rights reserved to Technical Team. &nbsp 2018-<?php echo date("Y")+1; ?> </p>
          </div>
          <div class="col-lg-3 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>+(91)-9422129534</p>
            <p>+(91)-9923280550</p>
            <p>+(91)-9923146219</p>
            <p> Telephones : +(91)-(712)-2667777</p><p> Fax : +(91)-(712)-2667666
            </p>
          </div>
          <div class="col-lg-3 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              Enquiry: info@sbjit.edu.in
              Principal: principal@sbjit.edu.in Admission:ng.alvi@rediffmail.com
            </p>
          </div>
           
           <div class="col-lg-3 mr-auto text-center">
           

            <i class="fa fa-graduation-cap fa-3x mb-3"></i>
            <p>
              S. B. Jain Institute of Technology, Management and Research , Near Jain International School, Yerla Village, Kalmeshwar Road, Nagpur-441501</p>
          </div>
        </div>
      </div>
    </section>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <!-- <script src="vendor/scrollreveal/scrollreveal.min.js"></script> -->
    <!-- <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script> -->

    <script src="js/creative.min.js"></script>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://v4-alpha.getbootstrap.com/assets/js/vendor/jquery.min.js"')</script>
    <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="http://v4-alpha.getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/particles.js"></script>
    <script src="particles.json"></script>
    <script src="js/app.js"></script>


  </body>

</html>
