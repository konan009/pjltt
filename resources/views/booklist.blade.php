@include('layouts.headnav')
<div class="content  wow fdeInUp">
	<div class="container "></div>
</div>
<div id="page-banner" style="background-image: url({{asset('img/')}}/pamilacan.jpg);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1>Book Request</h1><br>
			<h4>list of submitted book</h4>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Successful</h4>
			</div>
			<div class="modal-body">
				<p>You Have Successfully send a booking request</p>
				MODE OF PAYMENT:<br>
				Via LBC / Palawan Express Remittance Center:<br>
				Receiver Name: Vilma Lastimado<br>
				Location: Imus,  Cavite<br>
				Contact Number: (Smart) 09996621255, (Globe)  09151391245<br>
				Via Smart Padala:<br>
				Account Number: 5577519482790103<br>
				Via Bank (BDO or Any Branch)<br>
				Account Number: 4370726835<br>
				Account Name: Via Philippines Travel Corporation<br>
				Reference Number and Payor's Name: FRAG 491416 PJL travel and Tours<br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--page body-->
<div id="page-body">
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Book Title</th>
					<th>Status</th>
					<th>Total Price</th>
					<th width="10%">Action</th>
				</tr>
			</thead>
			<tbody>
				@for($x=0; $x<count($data['list']);$x++)
				<tr>
					<td>{{$data['list'][$x][3]}}</td>
					<td>{{$data['list'][$x][1]}}</td>
					<td>{{$data['list'][$x][2]}}</td>
					<td>
						@if($data['list'][$x][1]=='Approved')
						<a href="{{url('printpdf')}}/{{$data['list'][$x][0]}}">Print</a>
						@endif
						</td>
				</tr>
				@endfor
			</tbody>
		</table>
	</div>
</div>

@include('layouts.footer')
<script>
@if(!empty(Session::get('Flag')))
       $("#myModal").modal();
       <?php Session::pull('Flag'); ?> 
@endif

       
</script>