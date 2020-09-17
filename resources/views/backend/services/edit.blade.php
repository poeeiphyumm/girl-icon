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
		{{-- @php dd($service); @endphp --}}
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Category</label>
			<select class="form-control form-control-md" id="inputBrand" name="category_id">

				@php echo $service->category_id; @endphp
				<optgroup label="Choose Category">
					@foreach($categories as $category)
<<<<<<< HEAD

						<option value="{{ $category->id }}" @if($category->id == $service->category_id) {{ 'selected'}} @endif>{{ $category->category_name }}</option>
=======
						<option value="{{ $category->id }}"
						 @if($category->id == $service->category_id) 
						 {{ 'selected'}} @endif
						 >{{ $category->category_name }}</option>
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9
					@endforeach

				</optgroup>
			</select>
			
		</div>
<<<<<<< HEAD
	{{-- </div>			
	</div> --}}
		
{{-- /div>
	</div>
	</div>	
	<input type="submit" value="Update" class="btn btn-danger">		
	</div>
		
</div> --}}
=======
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Photo</label>
			<div class="col-sm-6">
				<input type="file" name="photo" >
				@error('photo')
					<div class="text-danger">{{($message)}}</div>
					<img src="{{ asset($service->photo) }}" class="img-fluid w-25">
				@enderror

				<input type="hidden" name="oldphoto" value="{{ $service->photo }}">
			</div>
		</div>	

		<input type="submit" value="Update" class="btn btn-danger">	
	</form>
</div>
<<<<<<< HEAD

=======
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9
@endsection