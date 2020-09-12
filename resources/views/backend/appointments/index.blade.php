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
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Customer_id</th>

						<th>Appointment Status</th>
					</tr>
				</thead>
				<tbody>
					
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
			</table>
			
		</div>
	</div>
</div>

@endsection