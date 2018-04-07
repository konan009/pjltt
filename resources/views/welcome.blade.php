<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PJL Travel and Tours</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

<!-- Slider
    ================================================== -->
<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('css/animate.css')}}" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Navigation
    ==========================================-->
<nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.html"><img src="img/logo.png" width="53" height="54" class="img-responsive"><span>PJL Travel and Tours</span></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
   
      <!--nav icon--> 
      <a id="nav-icon"> <span></span> <span></span> <span></span> </a> 
      <!--nav icon end-->
      
      <ul id="nav-top" class="nav navbar-nav navbar-right">
        <li><a href="index.html" class="page-scroll">Home</a></li>
        <li><a href="page.html" class="page-scroll">About</a></li>
        <li><a href="faqs.html" class="page-scroll">FAQs</a></li>
        <li><a href="contact.html" class="page-scroll">Contact</a></li>
        <li><a href="offers.html" class="page-scroll">Offers</a></li>
        <li><a href="register.html" class="page-scroll">Register</a></li>
        <li><a href="login.html" class="page-scroll">LogIn</a></li>
      </ul>        
          <!--search form-->         
          <form method="get" action="/search" id="search">
            <input name="q" type="text" size="40" placeholder="Search..." />
          </form>
          <!--/search form--> 
          
           <nav class="bottom-nav">
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pricing</a></li>
          </ul>
        </nav>
          
          <ul class="social-link">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- banner Page
    ==========================================-->
<section id="home-banner">
  <video id="video-bg1" preload="auto" autoplay loop muted="muted">
      <source src="img/bg1.mp4" type="video/mp4">
      </video>
  <div class="content">
    <div class="container"  data-wow-duration="1s"> <span class="wow fadeIn">Your reliable travel companion.</span>
      <h1 class="wow fadeInUp">PJL TRAVEL AND TOURS</h1>
      <br></br>
      <button type="button">Book Now!</button>
    </div>
  </div>
  <div class="arrow bounce"><!--a href="#about-us-block"--><i class="fa fa-arrow-down fa-2x"></i><!--/a--> </div>
</section>

<!-- about us Page
    ==========================================-->
<section id="about-us-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>About us</h2>
        <a href="page.html">Read More</a>
        <p>PJL Travel and Tours, among the well-known travel agency companies based in Cavite, offers Passport & Visa Service to clients. For clients who are keen on visiting foreign locations can contact us for Passport & Visa Services.</p>
      </div>
      <!--/section-title-->
      
      <div class="clearfix"></div>
      <!--about features list-->
      <ul class="about-features wow fadeInUp">
        <li><i class="fa fa-cc-visa"></i>
          <h5>Passport and Visa Assitance</h5>
          <p>Authentication and Legalization, Permanent residency, Temporary Visa, Visa extension/Visa Waiver, Amendment of residency.</p>
        </li>
        <li><i class="fa fa-file-image-o"></i>
          <h5>Tour Packages</h5>
          <p>Domestic plane tickets, International plane Tickets, Travel and other Insurance.</p>
        </li>
        <li><i class="fa fa-file"></i>
          <h5>NSO Services</h5>
          <p>Recognition as Filipino, Dual citizenship, Foreign nationals registration, Change of status, Late registration assistance.</p>
        </li>
        <li><i class="fa fa-plane"></i>
          <h5>Local and International Tickets</h5>
          <p>Airlines Available:</p>
          <p>Cebu Pacific, SKYJET, Air Asia, Philippine Airlines, and other foreign airlines.</p>
        </li>
      </ul>
      <!--/about features list--> 
      
    </div>
  </div>
</section>

<!-- contact us Page
    ==========================================-->
<section id="home-contact-block">
  <div class="container">
    <div class="row wow fadeInUp">
      <p>If you have questions or suggestions about the services of PJL Travel and Tours, please read through our FAQs or directly contact us if the answer to your question is not listed.</p>
      <a href="contact.html">Contact us</a> </div>
  </div>
</section>

<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>Offers</h2>
        <a href="offers.html">more offers</a></div>
      <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
          <li>
          <figure> <img src="img/boracay.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content  wow fdeInUp">
                 <h6>Boracay Tour</h6>
                  <hr>
                  <center><h6>₱6,000&nbsp;per person&nbsp;/&nbsp;3 Days, 2 Nights</h6></center>
                  <br>
                  <a href="Domestic/boracay.html"><button type="button">Book Now!</button></a>
                  <!--ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul-->
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="img/samal.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Samal Island</h6>
                  <hr>
                  <center><h6>₱16,500&nbsp;per person&nbsp;/&nbsp;3 Days, 2 Nights</h6></center>
                  <br>
                  <a href="Domestic/samal.html"><button type="button">Book Now!</button></a>
                  <!--ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul-->
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="img/underground.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Underground River Tour</h6>
                  <hr>
                  <center><h6>₱4,500&nbsp;per person&nbsp;/&nbsp;3 Days, 2 Nights</h6></center>
                  <br>
                  <a href="Domestic/underground.html"><button type="button">Book Now!</button></a>
                  <!--ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul-->
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="img/cambodia.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Angkor Wat Cambodia</h6>
                  <hr>
                  <center><h6>₱10,000&nbsp;per person&nbsp;/&nbsp;3 Days, 2 Nights</h6></center>
                  <br>
                  <a href="International/cambodia.html"><button type="button">Book Now!</button></a>
                  <!--ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul-->
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="img/bangkok.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Bangkok Thailand</h6>
                  <hr>
                  <center><h6>₱3,500&nbsp;per person&nbsp;/&nbsp;3 Days, 2 Nights</h6></center>
                  <br>
                  <a href="International/bangkok.html"><button type="button">Book Now!</button></a>
                  <!--ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul-->
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="img/hongkong.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Hong Kong Disney Land</h6>
                  <hr>
                  <center><h6>₱10,000&nbsp;per person&nbsp;/&nbsp;3 Days, 2 Nights</h6></center>
                  <br>
                  <a href="International/hongkong2.html"><button type="button">Book Now!</button></a>
                  <!--ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul-->
                </div>
              </figcaption>
            </figure>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Company counter section
    ==========================================
<! /Company counter section --> 
<section id="company-counter" style="background-image:url(img/count-bg.jpg);">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 wow fadeInDown">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-heart-o"></i><span class="counter">17</span>
            <p>Customers Accommodated</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-envelope-o"></i><span class="counter">11</span>
            <p>Inquiries</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-plane"></i><span class="counter">9</span>
            <p>Air Tickets Sold</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-bus"></i><span class="counter">23</span>
            <p>Provincial Bus/2GO Travel Tickets Sold</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- the process block
    ==========================================-->

<section id="process-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>Why book with us</h2>
        <p> Travel worry-free with us!</p>
      </div>
      <!--/section-title--> 
      <!--process tab-->
      <div> 
        <!--tab nav-->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-file-text-o"></i>
                <p><h5>01</h5></p>
                </a>
            </li>
            <li><a href="#two" data-toggle="tab"><i class="fa fa-check-square-o"></i>
                <h5>02</h5>
                </a>
            </li>
            <li><a href="#three" data-toggle="tab"><i class="fa fa-laptop"></i>
                <h5>03</h5>
                </a>
            </li>
            <li><a href="#four" data-toggle="tab"><i class="fa fa-heartbeat"></i>
                <h5>04.</h5>
                </a>
            </li>
        </ul>
        <!--/tab nav--> 
        <!--tab container-->
        <div class="tab-content"> 
          
          <!--tab nav item 1-->
          <div id="one" class="tab-pane active"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="img/accredited.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Philippine Retirement Authority Accredited</h6>
              <p>We have successfully complied with the Accreditation Standards for Marketers of the Philippines Retirement Authority.</p>
              <!--a href="#">Read More</a--> </div>
            <!--/tab content-->             
          </div>
          <!--/tab nav item 1--> 
          
          <!--tab nav item 2-->
          <div id="two" class="tab-pane"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="img/travelagency.png" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Legally Certified Travel Agency</h6>
              <p>We have completed certifications for Travel Management and Operations Courses from Canadian Tourism and Hospitality Institute..</p>
              <!--a href="#">Read More</a--> </div>
            <!--/tab content-->             
          </div>
          <!--/tab nav item 2--> 
          
           <!--tab nav item 3-->
          <div id="three" class="tab-pane"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="img/reservation.png" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Reservation Proficient</h6>
              <p>We have attained a passing level of reservation proficiency in Sabre Basic Reservations.</p>
              <!--a href="#">Read More</a--> </div>
            <!--/tab content-->             
          </div>
          <!--/tab nav item 3-->     
          
          <!--tab nav item 4-->
          <div id="four" class="tab-pane"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="img/active.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>We're Active</h6>
              <p>We are actively participating in the seminars given by PHILIPPINES TRAVEL DEPOT CONSULTANCY INC.</p>
              <!--a href="#">Read More</a--> </div>
            <!--/tab content-->             
          </div>
          <!--/tab nav item 4-->          
        </div>
        <!--/tab container--> 
        
      </div>
      <!--\process tab--> 
      
    </div>
  </div>
</section>



<!-- Testimonials Section
    ==========================================-->
<!--section id="testimonials-block" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item"> <img src="img/team/01.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
          </div-->
          <!--div class="item"> <img src="img/team/02.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Rima Martin</strong> CEO Food Inc.</p>
          </div>
          <div class="item"> <img src="img/team/03.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Joe Martin</strong> CEO Chat Inc.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section-->
      


<footer id="bottom-footer">
  <div class="container">
    <div class="row wow fadeInUp">
      <div class="col-md-4 col-sm-4 col-xs-12"> 
        <!--copyright-->
        <p class="copyright">© 2018 <a href="index.html">SAD LIFE GROUP</a>. All rights reserved</p>
        <!--/copyright--> 
      </div>
      <!--bottom nav-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <nav class="bottom-nav">
          <ul>
            <li><a href="faqs.html">FAQ</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pricing</a></li>
          </ul>
        </nav>
      </div>
      <!--/bottom nav--> 
      
      <!--Social Links-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="social-link">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
      <!--/Social Links--> 
      
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<!-- Custom Javascripts
    ================================================== --> 
<script type="text/javascript" src="{{asset('js/main.js')}}"></script> 
<script src="js/wow.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script> 
<script>
new WOW().init();
</script>
</body>
</html>