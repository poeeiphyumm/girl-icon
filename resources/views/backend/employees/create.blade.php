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
			<input type="name" name="employee_name" class="form-control" id="inputname" >
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Availability Status</label>
		<div class="col-sm-6">
			<input type="radio" name="availability_status" class="" id="inputname" value="enable">Enable<br>
			<input type="radio" name="availability_status" class="" id="inputname" value="disable">Disable
		</div>
	</div>

	{{-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Service</label>
				<select class="form-control form-control-md" id="inputBrand" name="service">
					<optgroup label="Choose Service ">
						@foreach($services as $service)
							<option value="{{ $service->id }}">{{ $service->service_name }}</option>
						@endforeach

					</optgroup>
				</select>
		
	</div> --}}
	
	
	<input type="submit" value="Create" class="btn btn-danger" >
</form>
@endsection