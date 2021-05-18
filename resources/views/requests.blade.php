@extends('layout.app')
	
	<div class="space"></div>
	
@section('content')

	<p class="request-desc">This is the list of the sessions requested by our guest</p>

	<table id="requests" class="display">
		<thead>
			<tr>
				<th>Complete Name</th>
				<th>Email Address</th>
				<th>Contact No.</th>
				<th>Birthdate</th>
				<th>Religion</th>
				<th>BS Date</th>
				<th>BS Time</th>
				<th>BS Location</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($requests as $requests)
				<tr>
					<td>{{$requests->cname}}</td>
					<td>{{$requests->email}}</td>
					<td>{{$requests->contact}}</td>
					<td>{{$requests->bdate}}</td>
					<td>{{$requests->religion}}</td>
					<td>{{$requests->bsdate}}</td>
					<td>{{$requests->bstime}}</td>
					<td>{{$requests->location}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>


@endsection
	