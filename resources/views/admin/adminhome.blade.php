@include('layouts.headnav')
<div id="page-banner" style="background-image: url({{asset('img/')}}/pamilacan.jpg);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1>Admin Backoffice</h1><br>
			<h4>Submitted book</h4>
		</div>
	</div>
</div>
<div class="container">
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
						@if($data['list'][$x][1]=='Pending')
						@endif
						<a href="{{url('adminstatus')}}/{{$data['list'][$x][0]}}"><button>View</button></a>
					</td>
				</tr>
				@endfor
			</tbody>
		</table>
	</div>
</div>
</div>
@include('layouts.footer')
