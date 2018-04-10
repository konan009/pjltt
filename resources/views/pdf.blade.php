<!DOCTYPE html>
<html>
<body>
<h1 style="color:#91d177;margin-left:200px;">PJL Travel and Tour</h1>
<img src="{{asset('img/paid.png')}}" alt="paid" width="139" height="42" align="left" style="margin-left:200px;">
<img src="{{asset('img/receipt header.png')}}" alt="logo" width="328" height="82" align="right" style="margin-right:200px; margin-top:50px;">
<hr style="margin-left:200px; margin-right:200px;margin-top:50px; background-color:#91d177;">
<b style="margin-left:200px;" >BOOKING ID: {{ $data['bookinfo']->id }}</b><br><br>
<b style="margin-left:200px;">Booking Date: {{ date("Y-m-d H:i" ,strtotime($data['bookinfo']->enddate)-86400) }}</b><br><br>
<b style="margin-left:200px;">Total Amount (PHP): {{ ($data['bookinfo']->guest * $data['userinfo']->price)  }}</b><br><br>
<hr style="margin-left:200px; margin-right:200px;" ><br>
<b style="margin-left:200px;">Customer's First Name:  {{ $data['user']->name }}</b><br><br>
<b style="margin-left:200px;">Customer's Last Name:  {{ $data['user']->lname }}</b><br><br>
<b style="margin-left:200px;">Customer's E-mail Address:  {{ $data['user']->email }}</b><br><br>
<b style="margin-left:200px;">Rooms and Guests Availed: {{ $data['bookinfo']->guest }} </b><br><br>
<b style="margin-left:200px;">Departure Date: {{ $data['bookinfo']->departuredate }}</b><br><br>
<hr style="margin-left:200px; margin-right:200px;">
<h2 style="margin-left:200px;">Cancellation policy</h2>
<p style="margin-left:200px;">Strictly no cancellation and modification upon confirmation of booking. No refund will be extended for any unused services.</p>
<footer style="margin-left:200px; margin-right:200px; text-align:center; color:#4c4b4b">Thank you for booking with PJL Travel and Tours. Get in touch with us anytime.
 Landline: (046) 454-2258 Mobile: 09151391245 Email: pjltraveltours@gmail.com</footer>

<hr style="margin-left:200px; margin-right:200px;margin-top:50px; background-color:#91d177;">

</body>
</html>
