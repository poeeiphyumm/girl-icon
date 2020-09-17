@extends('backend.backendtemplate')
@section('content')

			<h1>Make Appointment</h1>

			<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<form action="{{route('appointments.store')}}" method="post" enctype="multipart/form-data">
						@csrf
					{{-- <div class="form-group row">
						<label>Customer Name</label>
						<input class="form-control" type="text" name="appointment_name">
				    </div>
				    <div class="form-group row">
						<label>Email</label>
						<input calss="form-control" type="email" name="email" class="form-control">
					</div>
					<div class="form-group row">
						<label>Password</label>
					<input calss="form-control-lg" type="password" name="password">
					
					</div> --}}
					<div class="form-group row">
					<label>Phone Number</label>
					<input class="form-control" type="text" name="phone_no">
					</div>
					<div class="form-group row">
					<label>Date</label>
					<input class="form-control" type="date" name="date">
					</div>
					<div class="form-group row">
					<label>Time</label>
					<input class="form-control" type="time" name="time">
					</div>

					<div class="form-group row">
					<label>Customer No</label>
					<input class="form-control" type="text" name="customer_id">
					</div>
					
					<div class="form-group">
						<label>Appointment Status</label><br>

						<input type="radio" name="appointment_status" value="pending">Pending<br>
						<input type="radio" name="appointment_status" value="cancel">Cancel<br>
						<input type="radio" name="appointment_status" value="cancel">Accept


					 
					</div>
				
					<div class="form-control-lg">
					<button type="submit" class="btn btn-info">Appointment</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	
@endsection