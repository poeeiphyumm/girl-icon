@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">

			<form class="col-lg-12"> 
				<label >Start Date</label>
				<input type="date" name="start_date" value="mm/dd/yyyy">
				<label >End Date</label>
				<input type="date" name="end_date" value="mm/dd/yyyy">
				<input class="btn btn-success" type="submit" value="Search">

			</form><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Date</th>
						<th>Time</th>
						<th>Appointment Status</th>
						<th>Customer_id</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					
		    		@php $i=1; @endphp
		    		@foreach ($appointments as $appointment)
		    		<tr>
		    			<td>{{ $i++ }}</td>
		    			<td>{{ $appointment->date }}</td>
		    			<td>{{ $appointment->time }}</td>
			    		<td>{{ $appointment->status }}</td>
			    		<td>{{ $appointment->customer_id }}</td>
			    		<td>
			    			{{-- <a href="#" class="btn btn-primary">Detail</a> --}}
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