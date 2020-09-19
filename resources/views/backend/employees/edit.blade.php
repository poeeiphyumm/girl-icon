@extends ('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
            <div class="col">
            	<h1 class="h3 mb-0 text-gray-800">Employee Edit Form</h1>
            </div>
        </div>
    </div>

	<form action="{{ route('employees.update',$employees->id) }}" method="post" enctype="multipart/form-data">
	@csrf
	{{-- //methos put က  update  လုပ်တာ --}}
	@method('PUT')
	{{-- // --}}
	
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-6">
				<input type="name" name="employee_name" class="form-control" id="inputname" value="{{ $employees->employee_name}}" >
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-6">
				<input type="name" name="email" class="form-control" id="inputname" value="{{ $employees->email}}" >
			</div>
		</div>
	

		

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Availiability Status</label>
			<div class="col-sm-6">
				<input type="radio" name="availability_status" class="" id="inputname" value=" enable">Enable<br>
				<input type="radio" name="availability_status" class="" id="inputname" value=" disable">Disable
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Service</label>
			<select class="form-control form-control-md" id="inputservice" name="service_id">
				<optgroup label="Choose Service ">
					@foreach($services as $service)
<<<<<<< HEAD
						<option value="{{ $service->id }}" @if($employees->service_id == $service->id) {{ 'selected'}} @endif>{{ $service->service_name }}</option>
=======
						<option value="{{ $service->id }}" @if($service->id == $employee->service_id) {{ 'selected'}} @endif>{{ $employee->service_name }}</option>
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
					@endforeach

				</optgroup>
			</select>
		</div>

		<input type="submit" value="Update" class="btn btn-danger">
	</form>
</div>

@endsection