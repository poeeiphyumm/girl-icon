@extends('backend.backendtemplate')
@section('content')

			<h1>Appointment edit form</h1>

			<div class="row">
				<div class="col-md-6">
					<form action="{{route('appointments.update',$appointment->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
					<div class="form-group row">
						<label>Name</label>
						<input class="form-control" type="text" name="name" value="{{$appointment->name}}" readonly="readonly">
				    </div>
				    <div class="form-group row">
						<label>Email</label>
						<input calss="form-control" type="text" name="email" value="{{$appointment->email}}" class="form-control" >
					</div>
					<div class="form-control">
						<label>Password</label>
					<input calss="form-control" type="password" name="password">
					
					</div>
					
					<div class="form-group row">
					<label>Phone Number</label>
					<input class="form-control" type="text" name="ph_no" value="{{$appointment->ph_no}}">
					</div>
					<div class="form-group row">
					<label>Date</label>
					<input class="form-control" type="date" name="date" value="{{$appointment->date}}">
					</div>
					<div class="form-group row">
					<label>Time</label>
					<input class="form-control" type="time" name="time" value="{{$appointment->time}}">
					</div>

					<div class="form-group row">
					<label>Customer No</label>
					<input class="form-control" type="text" name="customer_id" value="{{$appointment->customer_id}}">
					</div>
					
					<div class="form-group">
						<label>Appointment Status</label><br>

						<input type="radio" name="status" value="pending" checked="checked">Pending<br>
						<input type="radio" name="status" value="cancel">Cancel<br>
						<input type="radio" name="status" value="cancel">Accept


					 
					</div>
				
					<div class="form-control-lg">
					<button type="submit" class="btn btn-info">Update Appointment</button>
					</div>
					</form>
				</div>
			</div>
	
@endsection