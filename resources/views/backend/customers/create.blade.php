@extends ('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Customer Create Form</h1>
            	</div>
            </div>
    </div>



<form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="name" name="customer_name" class="form-control" id="inputname" >
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-6">
			<input type="email" name="email" class="form-control" id="inputemail">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Date</label>
		<div class="col-sm-6">
			<input type="date" name="date" class="form-control" id="inputdate">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Phone No</label>
		<div class="col-sm-6">
			<input type="text" name="phone_no" class="form-control" id="inputphoto">
		</div>
	</div>
	
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Gender</label>
		<div class="col-sm-6">
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">service</label>
		<div class="col-sm-6">
			<input type="text" name="service" class="form-control" id="inputphoto">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">address</label>
		<div class="col-sm-6">
			<input type="text" name="address" class="form-control" id="inputphoto">
		</div>
	</div>
	
	<input type="submit" value="Create" class="btn btn-danger" >
</form>
@endsection
