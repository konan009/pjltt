<footer id="bottom-footer">
	<div class="container">
		<div class="row wow fdeInUp">
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
			<!--powered by-->
			<div class="col-md-4 col-sm-4 col-xs-12">
				<ul class="social-link">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				</ul>
			</div>
			<!--/powered by-->
		</div>
	</div>
</footer>
<!-- Modal -->
<div id="confirm" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		                    <form class="form-horizontal" method="POST" action="{{ url('confirm') }}">
                        {{ csrf_field() }}
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirm your Email</h4>
			</div>
			<div class="modal-body">
					<div class="form-group row">
						<label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>
						<div class="col-md-6">
							<input id="code" type="code" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" required>
							@if ($errors->has('code'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('code') }}</strong>
							</span>
							@endif
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default" >Submit</button>
			</div>
		</div>
	</form>
	</div>
</div>
<div id="register" class="modal fade" role="dialog">
	<form method="POST" action="{{ route('register') }}">
		@csrf
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Register</h4>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
							@if ($errors->has('name'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
						<div class="col-md-6">
							<input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>
							@if ($errors->has('lname'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('lname') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
							@if ($errors->has('email'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
						<div class="col-md-6">
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
							@if ($errors->has('password'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>
					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">
					{{ __('Register') }}
					</button><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</form>
</div>
<div id="login" class="modal fade" role="dialog">
	<form method="POST" action="{{ route('login') }}">
		@csrf
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Log In</h4>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
							@if ($errors->has('email'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
						<div class="col-md-6">
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
							@if ($errors->has('password'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6 offset-md-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
								</label>
							</div>
						</div>
					</div>
					{{-- 		<div class="form-group row mb-0">
						<div class="col-md-8 offset-md-4">
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						</div>
					</div> --}}
					
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">
					{{ __('Login') }}
					</button><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Javascripts
================================================== -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
new WOW().init();
</script>
<script>
jQuery(document).ready(function( $ ) {
$('.counter').counterUp({
delay: 10,
time: 1000
});
});
</script>
</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.4/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>