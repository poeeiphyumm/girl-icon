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



<form action="{{ route('employees.update',$employee->id) }}" method="post" enctype="multipart/form-data">
	@csrf
	{{-- //methos put က  update  လုပ်တာ --}}
	@method('PUT')
	{{-- // --}}
	
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="name" name="category_name" class="form-control" id="inputname" value="{{ $employee->employee_name}}" >
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Availiability Status</label>
		<div class="col-sm-6">
			<input type="radio" name="availability_status" class="" id="inputname" value=" {{ $employee->availability_status}}">Enable<br>
			<input type="radio" name="availability_status" class="" id="inputname" value=" {{ $employee->availability_status}}">Disable
		</div>
	</div>
	
	

	<input type="submit" value="Update" class="btn btn-danger">
</form>
@endsection