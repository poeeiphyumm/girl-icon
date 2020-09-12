@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Customer Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Appointment Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($appointments as $appointment)
					<tr>
					<td>{{$i}}</td>
					<td>{{$appointment->customer->name}}</td>
					<td>{{$appointment->email}}</td>
					<td>{{$appointment->password}}</td>
					<td>{{$appointment->phone}}</td>
					<td>{{$appointment->date}}</td>
					<td>{{$appointment->time}}</td> 
					<td>{{$appointment->status}}</td>
					<td><a href="#" class="btn btn-info">Detail</a>
						<a href="#" class="btn btn-danger">Edit</a></td>
					@php $i++; @endphp
				</tr>
				@endforeach
				</tbody>
				
			</table>
			
		</div>
	</div>
	
</div>

@endsection