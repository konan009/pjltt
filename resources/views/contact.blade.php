@include('layouts.headnav')
<div id="page-banner" style="background-image: url(img/contact.jpg);">
  <div class="content  wow fdeInUp">
    <div class="container ">
      <h1>Contact</h1>
    </div>
  </div>
</div>

<!--page body-->

<div id="page-body">
  <div class="container">
    <div class="row"> 
      <!--blog posts container-->

      <div class="col-md-offset-3 col-md-6 page-block">
        <h1>Any questions?</h1>
            <form style="padding-bottom:80px">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="email" class="form-control" id="exampleInputName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputMessage">Message</label>
                    <textarea placeholder="Add your message"></textarea>
                </div>
                <div class="checkbox checkbox-success">
                    <input type="checkbox" value="yes" checked="">
                    <label> I agree to your terms. </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>


      <!--blog posts container-->
    </div>
  </div>
</div>
<hr>
<div class="col-md-10 col-md-offset-2 animate-box">
            <h3>Contact Information:</h3>
            <div class="row contact-info-wrap">
              <div class="col-md-3">

                <p><span><i class="fa fa-location-arrow"></i></span> <b>Imus, Cavite Branch 1:</b> <br> Unit B 9535 NIA Road, <br> Carsadang Bago II, Imus, Cavite</p>
              </div>
              <div class="row contact-info-wrap">
              <div class="col-md-3">
                <p><span><i class="fa fa-location-arrow"></i></span> <b>Imus, Cavite Branch 2:</b> <br> Pillars Executive Homes, <br> NIA Road, Bucandala III, Imus, Cavite <br>(in front of SM Center Imus)</p>
              </div>
              <div class="col-md-3">
                <p><span><i class="fa fa-phone"></i></span> <b>Phone:</b> (+639)151391245<br>
                <span><i class="fa fa-phone"></i></span> <b>Landline: </b>(046)454-2258</p>

              </div>
              <div class="col-md-3">
                <p><span><i class="fa fa-envelope"></i></span>&nbsp;pjltravelandtours@gmail.com<br>
                <span><i class="fa fa-facebook"></i></span>&nbsp;&nbsp;<a href="http://facebook.com/PJL.Travel">Facebook/PJL.Travel</a>
              </div>

              
            </div>
          </div>
     </div> </div> </div> 
    </div><br>




<!--div class="contact-one">
<div class="col-md-offset-7 col-md-4" col-md-push-10>
  <p>Phone: (+639)151391245</p>
        <p>Landline:(046)454-2258</p>
        <p>Email: pjltravelandtours.@gmail.com</p>
        <ul><p>We are here to assist you with your travel and hotel reservations anytime. Please   feel free to contact us or visit our physical shop at:</p>
        <li><p>Imus, Cavite Branch 1: Unit B 9535 NIA Road, Carsadang Bago II, Imus, Cavite</p></li>
        <li><p>Imus, Cavite Branch 2: Pillars Executive Homes, NIA Road, Bucandala III, Imus,  Cavite (in front of SM Center Imus)</p></li>
        </ul>
      </div>
</div-->
   <div class="clearfix"></div>
@include('layouts.footer')
