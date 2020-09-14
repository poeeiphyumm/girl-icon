@extends ('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Service Edit Form</h1>
            	</div>
            </div>
    </div>



<form action="{{ route('services.update',$service->id) }}" method="post" enctype="multipart/form-data">
	@csrf
	{{-- //methos put က  update  လုပ်တာ --}}
	@method('PUT')
	{{-- // --}}
	
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="name" name="service_name" class="form-control" id="inputname" value="{{ $service->service_name}}" >
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Duration</label>
		<div class="col-sm-6">
			<input type="text" name="duration" class="form-control" id="inputname" value="{{ $service->duration}}" >
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-6">
			<input type="text" name="price" class="form-control" id="inputname" value="{{ $service->price}}" >
		</div>
	</div>

	<div class="form-group row">
				<label class="col-sm-2 col-form-label">Category</label>
				<select class="form-control form-control-md" id="inputBrand" name="category">
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
			<input type="file" name="photo" class="form-control" id="inputphoto" >
			<img src="{{ asset($service->photo) }}" class="img-fluid w-25">

			<input type="hidden" name="oldphoto" value="{{ $service->photo }}">
		</div>
	</div>			
	</div>
	<input type="submit" value="Update" class="btn btn-danger">
</form>
@endsection