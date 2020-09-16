@extends ('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
           	<div class="col">
            	<h1 class="h3 mb-0 text-gray-800">Employee Create Form</h1>
            </div>
        </div>
    </div>

	<form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-6">
				<input type="text" name="employee_name" class="form-control" id="inputname" >
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Availability Status</label>
			<div class="col-sm-6">
				<input type="radio" name="availability_status" class="" id="inputname" value="enable">Enable<br>
				<input type="radio" name="availability_status" class="" id="inputname" value="disable">Disable
			</div>
		</div>

<<<<<<< HEAD
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-6">
				<input type="email" name="email" class="form-control" id="inputemail" >
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Service</label>
			<select class="form-control form-control-md" id="inputservice" name="service_id">
				<optgroup label="Choose Service ">
					@foreach($services as $service)
						<option value="{{ $service->id}}">{{ $service->service_name }}</option>
					@endforeach
=======
	<div class="form-group row">
				<label class="col-sm-2 col-form-label">Service</label>
				<select class="form-control form-control-md" id="inputservice" name="service_id">
					<optgroup label="Choose Service ">
						@foreach($services as $service)
							<option value="{{ $service->id}}">{{ $service->service_name }}</option>
						@endforeach
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0

				</optgroup>
			</select>
		
<<<<<<< HEAD
		</div>
	
	
		<input type="submit" value="Create" class=" btn btn-danger" >
	</form>
</div>
=======
	</div>
<<<<<<< HEAD

	
=======
		
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
	<input type="submit" value="Create" class=" btn btn-danger" >
</form>
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
@endsection