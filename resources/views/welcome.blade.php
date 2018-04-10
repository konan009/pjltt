@include('layouts.headnav')


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
                  <a href="{{url('booknow')}}/1"><button type="button">Book Now!</button></a>
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
                  <a href="{{url('booknow')}}/2"><button type="button">Book Now!</button></a>
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
                  <a href="{{url('booknow')}}/3"><button type="button">Book Now!</button></a>
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
                  <a href="{{url('booknow')}}/4"><button type="button">Book Now!</button></a>
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
                  <a href="{{url('booknow')}}/5"><button type="button">Book Now!</button></a>
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
                  <a href="{{url('booknow')}}/6"><button type="button">Book Now!</button></a>
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




@include('layouts.footer')