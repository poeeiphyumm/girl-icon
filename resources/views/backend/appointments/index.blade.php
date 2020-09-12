@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">

			<form class="col-lg-12"> 
				<label >Start Date</label>
				<input type="date" name="start_date" value="mm/dd/yyyy">
				<label >End Date</label>
				<input type="date" name="End_date" value="mm/dd/yyyy">

			</form><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
<<<<<<< HEAD
						<th>Name</th>
=======
						<th>Customer Name</th>
>>>>>>> edd0b2dbd861d4cee331cd83a71599744c976585
						<th>Date</th>
						<th>Time</th>
						<th>Customer_id</th>

						<th>Appointment Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
<<<<<<< HEAD
					
		    		@php $i=1; @endphp
		    		@foreach ($appointments as $appointment)
		    		<tr>
		    			<td>{{ $i++ }}</td>
			    		<td>{{ $appointment->appointment_name }}</td>
			    		<td>{{ $appointment->date }}</td>
			    		<td>{{ $appointment->time }}</td>
			    		<td>
			    			<a href="#" class="btn btn-primary">Detail</a>
			    			<a href="{{ route('appointments.edit',$appointment->id) }}" class="btn btn-secondary">Edit</a>
			    		</td>
			    	</tr>
			    	@endforeach
				</tbody>
=======
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
				
>>>>>>> edd0b2dbd861d4cee331cd83a71599744c976585
			</table>
			
		</div>
	</div>
</div>

@endsection