@include('layouts.headnav')
			<!-- banner Page
			==========================================-->
			<div id="page-banner" style="background-image: url(img/portfolio-bg.jpg);">
				<div class="content  wow fdeInUp">
					<div class="container ">
						<h1>Offers</h1>
						<h5>best offers and packages are here!</h5>
					</div>
				</div>
			</div>
			<!-- our works block
			==========================================-->
			<section id="our-work-block">
				<div class="container">
					<div class="row">
						<!-- Modal -->
						<div class="section-title text-center wow fadeInUp">
							<h2>Domestic Tour Packages</h2>
						</div>	
						<div class="works">
							
							<!--portfolio grid-->
							<ul class="grid">
								@foreach($data['domestic'] as $tour)
								<li class="wow fdeInUp">
									<figure> <img src="{{asset('img/')}}/{{$tour->image}}" alt="Screenshot 01">
										<figcaption>
										<div class="caption-content  wow fdeInUp">
											<h6>{{$tour->title}}</h6>
											<hr>
											<center><h6>₱{{$tour->price}}&nbsp;per person&nbsp;/&nbsp;{{$tour->day}} Days, {{$tour->night}} Nights</h6></center>
											<br>
											<a href="{{url('booknow')}}/{{$tour->id}}"><button type="button">Book Now!</button></a>
										</div>
										</figcaption>
									</figure>
								</li>
								@endforeach
							</ul>
							<!--/portfolio grid-->
							
							<div class="clearfix"></div>
							
							<!--/portfolio page nav-->
							
						</div>
					</div>
				</div>
			</section>
			<hr style="height:5px;border:none;color:#7e7e7e;background-color:#7e7e7e;" />
			<section id="our-work-block">
				<div class="container">
					<div class="row">
						<!-- Modal -->
						<div class="section-title text-center wow fadeInUp">
							<h2>International Tour Packages</h2>
						</div>	
						<div class="works">
							
							<!--portfolio grid-->
							<ul class="grid">
								@foreach($data['international'] as $tour)
								<li class="wow fdeInUp">
									<figure> <img src="{{asset('img/')}}/{{$tour->image}}" alt="Screenshot 01">
										<figcaption>
										<div class="caption-content  wow fdeInUp">
											<h6>{{$tour->title}}</h6>
											<hr>
											<center><h6>₱{{$tour->price}}&nbsp;per person&nbsp;/&nbsp;{{$tour->day}} Days, {{$tour->night}} Nights</h6></center>
											<br>
											<a href="{{asset('booknow/')}}/{{$tour->id}}"><button type="button">Book Now!</button></a>
										</div>
										</figcaption>
									</figure>
								</li>
								@endforeach
							</ul>
							<!--/portfolio grid-->
							
							<div class="clearfix"></div>
							
							<!--/portfolio page nav-->
							
						</div>
					</div>
				</div>
			</section>
<!--/portfolio grid-->
<div class="clearfix"></div>
<!--/portfolio page nav-->
</div></div></div>
</section>

@include('layouts.footer')
