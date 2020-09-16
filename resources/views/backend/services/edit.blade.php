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

	@method('PUT')
	
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
			<select class="form-control form-control-md" id="inputBrand" name="category_id">
				<optgroup label="Choose Category">
					@foreach($categories as $category)
						<option value="{{ $category->id }}" @if($category->category_name == $service->category_name) {{ 'selected'}} @endif>{{ $service->category_id }}</option>
					@endforeach

				</optgroup>
			</select>
			
		</div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
	</div>			
	</div>
<<<<<<< HEAD
		
</div>
	
=======

		
	</div>
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
=======
	</div>	
	<input type="submit" value="Update" class="btn btn-danger">		
	</div>
		
</div>
<<<<<<< HEAD
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Photo</label>
			<div class="col-sm-6">
				<input type="file" name="photo" >
				@error('photo')
					<div class="text-danger">{{($message)}}</div>
					<img src="{{ asset($service->photo) }}" class="img-fluid w-25">
				@enderror

<<<<<<< HEAD
				<input type="hidden" name="oldphoto" value="{{ $service->photo }}">
			</div>
		</div>	

		<input type="submit" value="Update" class="btn btn-danger">	
	</form>
</div>
=======
<<<<<<< HEAD
>>>>>>> 10de3259a9a6997cfac8affc02899511a3f7a34a
=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
	<input type="submit" value="Update" class="btn btn-danger">
>>>>>>> 697a619dc35e92c422ead583f187d4bcb701916a
=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
</form>
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
@endsection