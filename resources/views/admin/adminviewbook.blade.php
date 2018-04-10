@include('layouts.headnav')
<div id="page-banner" style="background-image: url({{asset('img/')}}/pamilacan.jpg);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1>Book No: {{$data['bookinfo']->user_id}}</h1><br>
			<h4>Submitted by: {{ $data['user']->name }} {{ $data['user']->lname }}</h4>
		</div>
	</div>
</div>
<div class="container">
	<div id="page-body">
		<div class="container">
			<h4>Book Title: {{$data['userinfo']->title}}</h4>
			<h4>Book by: {{ $data['user']->name }} {{ $data['user']->lname }}</h4>
			<h4>Departure Date:  {{ $data['bookinfo']->departuredate }}</h4>
			<h4>Email: {{ $data['user']->email }} </h4>
			<h4>No# of Guest: {{ $data['bookinfo']->guest }}</h4>
			<h4>Price Per Person: {{ 'PHP ' . $data['userinfo']->price }}</h4>
			<h4>Total Price: {{ ($data['bookinfo']->guest * $data['userinfo']->price)  }}</h4>
			<form class="form-horizontal" method="POST" action="{{ url('approve') }}">
				{{ csrf_field() }}
				<button type="submit" class="btn btn-default" name="id" value="{{$data['bookinfo']->id}}" data-dismiss="modal">Approve</button>
			</form>
			<form class="form-horizontal" method="POST" action="{{ url('reject') }}">
				{{ csrf_field() }}
				<button type="submit" class="btn btn-default" name="id" value="{{$data['bookinfo']->id}}" data-dismiss="modal">Reject</button>
			</form>
		</div>
	</div>
</div>
@include('layouts.footer')