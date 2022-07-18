 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Barangay 184 Zone 19</title>
    <link rel="icon" href="assets/img/Barangay184.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/slideshow.css">
  </head>
  <style>
.mySlides {display:none;}
   
</style>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.php" class="navbar-brand"><img src="assets/img/Barangay184.png" style="width: 100px;" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#announcement">
                  Announcement
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#mission">
                  Mission & Vision
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Barangay Council
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">
                  Login
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">      
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title">Barangay 184 Zone 19</h2>
                <p style="margin-left: 40px;">To Provide Our Services In A Most Accessible And Portable Way For Our Residents</p>
                <p> Who Needs Our Help And Guidance.</p>
               
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                <img class="img-fluid" src="assets/img/Barangayhall.jpg" alt="">
              </div>            
            </div>
          </div> 
        </div> 
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

     <!--Announcement Start -->
    <section id="announcement" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Announcement</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <!-- <img class="img-fluid" src="assets/img/brgysec.png" alt=""> -->
              </div>
              <div class="content">
                <div class="info-text">
                  <div class="row" style="overflow-y: scroll; height: 500px;" >
                      <?php 
            require 'process/conn.php';
            $query ="SELECT * FROM announcement GROUP BY id ORDER BY id DESC";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            foreach($stmt->fetchALL() as $j){
             echo'<div class="col-lg-12 col-md-12 col-xs-12">
              <p style="text-align:center;"> <img src="process/admin/'.$j['image'].'" style="width:50%; height:50%;"></p>
               <h2 id="date_created'.$j['id'].'" style="text-align:center; color:red;">'.$j['date_announce'].'</h2>
                  <h2 id="content'.$j['id'].'" style="text-align:center;">'.$j['announcement_description'].' 
                  </h2>
              <hr>
            </div>';
            }
            ?>
                  </div>
                </div>
               
              </div>
            </div>

          </div>
      </div>
    </section>
 <!-- Announcement Ends -->


    <!-- Mission & Vision Start -->
    <section id="mission" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Mission & Vision</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <!-- <img class="img-fluid" src="assets/img/brgysec.png" alt=""> -->
              </div>
              <div class="contetn">
                <div class="info-text">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                      <h3 style="text-align: center;">Mission:</h3><br>
                      <p>--Details--</p>
                    </div> 
                  </div>
                </div>
               
              </div>
            </div>
            <!-- Mission Ends -->
          </div>
           <div class="col-lg-12 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <!-- <img class="img-fluid" src="assets/img/brgysec.png" alt=""> -->
              </div>
              <div class="contetn">
                <div class="info-text">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                      <h3 style="text-align: center;">Vision:</h3><br>
                      <p>--Details--</p>
                    </div> 
                  </div>
                </div>
               
              </div>
            </div>
            <!-- Mission Vision -->
          </div>
      </div>
    </section>
    <!-- Mission & Vision End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Services</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-graduation"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Education</a></h3>
                <p>--Details--</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Environment</a></h3>
                <p>--Details--</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-world"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Government</a></h3>
                <p>--Details--</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-heart-filled"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Health</a></h3>
                <p>--Details--</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
              <div class="icon">
                <i class="lni-home"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Livelihood</a></h3>
                <p>--Details--</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon">
                <i class="lni-shield"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Peace & Order</a></h3>
                <p>--Details--</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Barangay Council</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/brgysec.png" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Eliana Maia</a></h3>
                  <p><b>Barangay Captain</b></p>
                </div>
               
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/brgysec.png" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Annie Lea</a></h3>
                  <p><b>Barangay Secretary</b></p>
                </div>         
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/brgysec.png" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Harley Briana</a></h3>
                  <p><b>Barangay Treasurer</b></p>
                </div>         
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
      </div>
    </section>
    <!-- Team Section End -->


    <!-- Contact Section Start -->
    <section id="contact" class="section-padding bg-gray">    
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Countact Us</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">   
         
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="contact-block">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Name:</b></label><input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><b>Email:</b></label><input type="text" placeholder="Email" id="email" class="form-control" name="email" required>
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                     <label><b>Subject:</b></label> <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                     <label><b>Message:</b></label> <textarea class="form-control" id="message" placeholder="Your Message" rows="7" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                     
                    </div>
                    <div class="submit-button text-left">
                      <br>
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
        
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="footer-logo"><img src="assets/img/Barangay184.png" style="width:100px;" alt=""></h3>
                <div class="textwidget">
                  <p><b>To Provide Our Services In A Most Accessible And Portable Way For Our Residents Who Needs Our Help And Guidance.</b></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">FAQ</h3>
              <ul class="footer-link">
                <li><a href="#"><b>Saan Ang Lokasyon ng Barangay Hall?</b></a></li>
                <li><a href="#"><b>Paano Magkaroon ng Account?</b></a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Contact</h3>
              <ul class="address">
                <li>
                  <a href="#"><i class="lni-map-marker"></i><b> Piccio Garden, <br> Villamor Airbase, Pasay City</b></a>
                </li>
                <li>
                  <a href="#"><i class="lni-phone-handset"></i> <b>(412)231235</b></a>
                </li>
                <li>
                  <a href="#"><i class="lni-envelope"></i><b>BSAISPhilsca@gmail.com</b></a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div> 
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-content">
                <p>Copyright © 2022 <a rel="nofollow" href="#"></a> All Right Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </footer> 
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>  
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>

    <script type="text/javascript">
      var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
    </script>
      
  </body>
</html>