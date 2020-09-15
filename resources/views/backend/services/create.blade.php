@extends ('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Service Create Form</h1>
            	</div>
            </div>
    </div>
   



<form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="name" name="service_name" class="form-control" id="inputname" >
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Duration</label>
		<div class="col-sm-6">
			<input type="text" name="duration" class="form-control" id="inputduration">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-6">
			<input type="text" name="price" class="form-control" id="inputprice">
		</div>
	</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Category</label>
				<select class="form-control form-control-md" id="inputBrand" name="category_id">
					<optgroup label="Choose Category">
						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->category_name }}</option>
						@endforeach

					</optgroup>
				</select>
		
			</div>

	
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
			<input type="file" name="photo" class="form-control" id="inputphoto">
		</div>
	</div>
	
	<input type="submit" value="Create" class="btn btn-danger" >
</form>
@endsection